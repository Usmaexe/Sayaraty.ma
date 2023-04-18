<?PHP
require("../PHP/Connexion_BD.php");
session_start();
$query = "SELECT * FROM offre where id_offre=1 and statut=true";
$titre;$commentaire;$prix;$statut;
if($result=mysqli_query($connect,$query)){
  while($ligne=mysqli_fetch_row($result)){
    $titre=$ligne[0];
  }
}
echo '
  <!DOCTYPE HTML>
  <HTML>
    <HEAD>
      <meta CHAESET="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--it\'s only used for Internet explorer-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Controls the layout of the page on smaller screens-->
      <TITLE>Sayarty - Nos offres</TITLE>
      <link rel="icon" href="../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="../CSS/style-index.css">
      <link rel="stylesheet" href="../CSS/style-offres.css">
      <link rel="stylesheet" href="../CSS/style-candidat.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
    </HEAD>
    <BODY>';       
      include("AccueilHeader.php");
        echo'
      <div class="firstContainer">
        <img src="../IMG/permisA.png" alt="">
        <div class="container">
          <div class="theTitleOfPage">';
          $query = "SELECT Prix FROM offre where id_offre=5";
          $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
          echo '
            Votre permis A de conduite en mieux d&egrave;s <b>'.$ligne[0].' DH</b>
          </div>
          <div class="subtitle">
            *par rapport &agrave; une auto-&eacute;cole traditionnelle
          </div>';
          if(isset($_SESSION["login"])){
            echo '
              <a href="../Candidat/CoursQest.php" class="Cto">J\'obtiens mon code</a>
            ';
          }
          else{
            echo'
              <a href="Connexion_inscription.php" class="Cto">J\'obtiens mon code</a>
              ';
          }
          echo'
        </div>
      </div>
      <div class="cardContainer">';
      $query = "SELECT * FROM offre where type='permisA'";
        $i=0; 
        if($result=mysqli_query($connect,$query)){
          while(($ligne=mysqli_fetch_row($result))&&$i<3){
            $chaine=explode("-",$ligne[1]);
            $titre=$chaine[0];
            if($i==1||$i==2){$subtitre=$chaine[1];}
            $prix=$ligne[2];
            $commentaire=$ligne[4];
            if($i==0){$nbcard="first";}
            else if($i==1){$nbcard="second";}
            else if($i==2){$nbcard="third";}
            echo '
              <div class="'.$nbcard.'Card">
                <span class="cardTitle">'.$titre.'</span>';
            if($i==1 || $i==2){
              echo '<span class="cardSubTitle">'.$subtitre.'</span>';
              echo '<span class="cardSubSubTitle">'.$commentaire.'</span>';
            }
            else{
              echo '<span class="cardSubTitle">'.$commentaire.'</span>';
            }
            echo'
                <hr>
                <span class="cardPrice"><b>D&Eacute;S</b> '.$prix.' DH</span></div>
              ';
            $i++;
          }
        }
      echo'
      </div>';
      echo'
      <div class="firstContainer">
        <div class="container">
          <div class="theTitleOfPage">';
          $query = "SELECT Prix FROM offre where id_offre=2";
          $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
          echo '
            Votre permis B de conduite en mieux d&egrave;s <b>'.$ligne[0].' DH</b>
          </div>
          <div class="subtitle">
            *par rapport &agrave; une auto-&eacute;cole traditionnelle
          </div>';
          if(isset($_SESSION["login"])){
            echo '
              <a href="../Candidat/CoursQest.php" class="Cto">J\'obtiens mon code</a>
            ';
          }
          else{
            echo'
              <a href="Connexion_inscription.php" class="Cto">J\'obtiens mon code</a>
              ';
          }
          echo'
         </div>
        <img src="../IMG/PermisB.png" alt="">
      </div>
      <div class="cardContainer">';
        $query = "SELECT * FROM offre where statut=true and type='PermisB'";
          $i=0; 
          if($result=mysqli_query($connect,$query)){
            while(($ligne=mysqli_fetch_row($result))&&$i<3){
              $chaine=explode("-",$ligne[1]);
              $titre=$chaine[0];
              if($i==1||$i==2){$subtitre=$chaine[1];}
              $prix=$ligne[2];
              $commentaire=$ligne[4];
              if($i==0){$nbcard="first";}
              else if($i==1){$nbcard="second";}
              else if($i==2){$nbcard="third";}
              echo '
                <div class="'.$nbcard.'Card">
                  <span class="cardTitle">'.$titre.'</span>';
              if($i==1 || $i==2){
                echo '<span class="cardSubTitle">'.$subtitre.'</span>';
                echo '<span class="cardSubSubTitle">'.$commentaire.'</span>';
              }
              else{
                echo '<span class="cardSubTitle">'.$commentaire.'</span>';
              }
              echo'
                  <hr>
                  <span class="cardPrice"><b>D&Eacute;S</b> '.$prix.' DH</span></div>
                ';
              $i++;
            }
          }
        echo'
        </div>
      </div>';
      include("AccueilFooter.php");
      echo'
    </BODY>
    
  <script>
  var subMenu = document.getElementById("subMenu");
  function toggleMenu(){
    subMenu.classList.toggle("open-menu");
  }
</script>
  </HTML>
';

?>