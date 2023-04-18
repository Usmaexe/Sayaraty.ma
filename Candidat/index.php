<?PHP
  require("../PHP/Connexion_BD.php");
  session_start();
  echo'
<!DOCTYPE HTML>
<HTML>
	<HEAD>
    <meta CHAESET="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--it\'s only used for Internet explorer-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Controls the layout of the page on smaller screens-->
		<TITLE>Sayarty - Espace Candidat</TITLE>
    <link rel="icon" href="../IMG/SAYARATY_Icon.png">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">

  </HEAD>
	<BODY>';
    include("CandidatHeader.php");
    $query = "SELECT nom from candidat where login_candidat='".$_SESSION["login"]."'";
    $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
    echo'
    <DIV class="InteriorHeader">
      <div class="TextContainer">
        <span class="Title">Bienvenu '.$ligne[0].' </span>';
        $query = "SELECT prix FROM offre where id_offre=1";
        $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
        echo '
        <span class="SubTitle">Obtenez votre code de la route pour <b STYLE="font-size: 30px;">'.$ligne[0].' DH</b></span>
        
        <div class="valid-offres">
          <span><img src="../IMG/check.png" alt="">2 500 questions de code en ligne conformes &agrave; l\'examen</span>
          <span><img src="../IMG/check.png" alt="">Entra&icirc;nez-vous n\'importe o&ugrave; et n\'importe quand en illimit&eacute;</span>
          <span><img src="../IMG/check.png" alt="">Une &eacute;quipe p&eacute;dagogique pr&ecirc;te &agrave; accompagner votre r&eacute;ussite</span>
        </div>
      </div>
      <img src="../IMG/boy-exam.jpg" class="boy">
    </DIV>
    <DIV class="InteriorBottomBar">
      L\'une des meilleurs Auto-école au Maroc
      <span>SAYRATY est devenu la nouvelle façon de préparer son code de la route</span>
    </DIV>  
    <div class="card-container">';
        $query = "SELECT * FROM Avis";
        $i=0;$avis;$nom;$note;$photo;
        if($result = mysqli_query($connect,$query)){
          while($ligne = mysqli_fetch_row($result)){
            if($ligne[3]&&$ligne[2]>2&&$i<3){
              $avis[$i]=$ligne[1];
              $note[$i]=$ligne[2];
              $nom[$i]=$ligne[4];
              $i++;
            }
          }
        }
        for($j=0;$j<$i;$j++){

          $query = "SELECT Nom,PHOTO FROM Candidat WHERE login_candidat='".$nom[$j]."'";
          if($result = mysqli_query($connect,$query)){
            while($ligne= mysqli_fetch_row($result)){
              $nom[$j]=$ligne[0];
              $photo[$j]=$ligne[1];
            }
          }
          echo '          
            <div class="card">
            <div class="row">
            <img src="'.$photo[$j].'" alt="">
            <div class="nom">
          ';
          echo '<h4>'.$nom[$j].'</h4>      
            <span>
          ';
          for($t=0;$t<5;$t++){
            if($t<$note[$j]){
              echo '<i class="fa-solid fa-star"></i> ';
            }
            else{
              echo '<i class="fa-regular fa-star"></i> ';
            }
          }
          echo '</span>
              </div>
            </div>
            <p>'.$avis[$j].'</p>
          </div>';
        }
      echo'
    </div>    
  </DIV>';
    include("CandidatFooter.php");
  echo'
</HTML>
';

?>