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
    <!-- <script type="module" src="../JS/Page-Candidat.js"></script> -->
    <link rel="icon" href="../IMG/SAYARATY_Icon.png">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
		<link rel="stylesheet" href="../CSS/style-contacter.css">
		<link rel="stylesheet" href="../CSS/style-Emploi.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
  </HEAD>
	<BODY>';
    include("CandidatHeader.php");
  echo'
    <DIV class="tableContainer">
      <DIV class="Title">
        <h1 class="TheHeader">Emploi de temps</h1>';
        $query = "SELECT nb_heures FROM CANDIDAT where login_candidat='".$_SESSION["login"]."'";
        $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
        echo'
        <p class="Sentence">
            Nombre d\'heure de conduite : <b>'.$ligne[0].'</b><BR>
            ';
            if($ligne[0]!=0){
              echo'<p style=" font:400 18px \'Noto Sans\';text-transform:Initial;">Vous pouvez choisir la date de votre séance pratique de conduite!</P >';
            }
            else{
              echo '<p style=" font:400 18px \'Noto Sans\';text-transform:Initial;">Il faut que vous viendrez chez l\'école pour payez votre heure de conduite';
            } 
            echo '</p>
      </DIV>';
        if($ligne[0]!=0){
          $query = "SELECT Jour,Date,Heure,Valide FROM SEANCE WHERE id_candidat='".$_SESSION["login"]."'";$lignes=[];
          if($result=mysqli_query($connect,$query)){
            $i=0;
            while($ligne=mysqli_fetch_row($result)){
              $lignes[$i]=$ligne;
              $i++;
            }
          }
          $query = "SELECT Nb_heures FROM CANDIDAT WHERE login_candidat='".$_SESSION["login"]."'";
          $nb_heures = mysqli_fetch_row(mysqli_query($connect,$query));
          echo'
            <FORM name="formulaire" METHOD="POST" ACTION="EmploiTemps.php">
            <DIV class="Tab">
            <TABLE CELLSPACING=0>
              <tr>
                <th>Jour</th>
                <th>Date</th>
                <th>Heure</th>
              </tr>
              <SCRIPT>
                let option;
              </SCRIPT>
              
              ';
                $color;$bg_color;$bd_color;
                for($i=0,$t=0;$i<$nb_heures[0];$i++,$t++){
                  if($i<sizeof($lignes)){
                    echo'
                      <tr name="row'.$i.'" >
                        <td  name="Jour'.$i.'">'.$lignes[$i][0].'</td>
                        <td>
                          <input type="date" name="Date'.$i.'" value="'.$lignes[$i][1].'"><BR>
                          <span name="error"></span>
                        </td>
                        <td>
                          <SELECT name="Heure'.$i.'">
                            <OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                            <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION>
                            <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                            <OPTION name="12:00-13:00" VALUE="12:00-13:00">12:00-->13:00</OPTION>
                          </SELECT>
                          <SCRIPT>
                            option = "'.$lignes[$i][2].'";
                            document.formulaire.Heure'.$i.'.options.namedItem(option).selected = true; 
                            console.log('.sizeof($lignes).');
                          </SCRIPT>
                        </td>
                      </tr>
                    ';
                  }
                  else{
                    echo'
                      <tr>
                        <td name="Jour'.$i.'">Jour</td>
                        <td>
                          <input type="Date" name="Date'.$i.'"><br>
                          <span name="error"></span>
                        </td>
                        <td>
                          <SELECT name="Heure'.$i.'">
                            <OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                            <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION>
                            <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                            <OPTION name="12:00-13:00" VALUE="12:00-13:00">12:00-->13:00</OPTION>
                          </SELECT>
                        </td>
                      </tr>
                    ';
                  }
                }
              echo'
            </TABLE>';
            if(sizeof($lignes)>0){
            echo'
            <DIV class="icons">';
              echo '<span class="icon" style="height:48.4px;"></span>';
              for($i=0;$i<$nb_heures[0];$i++){
                echo '<span class="icon"><img style="width:18px; visibility: hidden;" name="validImages" src="#"></span>';
              }
            echo'
            </DIV>';
            }
            echo'
            </DIV>
            <SPAN name="Conf" class="confirmation"></SPAN>
            <div class="submit">
              <input name="submit-button" type="submit" value="Envoyer">
            </div>
          </FORM>';
        }
        echo'
    </DIV>';
      include("CandidatFooter.php");
    echo '</HTML>';
if(isset($nb_heures)){
  for($i=0,$t=0;$i<$nb_heures[0];$i++,$t++){
    $vis="visible";
    $titre="";
    if(sizeof($lignes)!=0){
      if(isset($lignes[$i][3])&&$lignes[$i][3]){
        $src="valid";
        $titre="Accepté";
      }
      else if(isset($lignes[$i][3])){
        $src="cross";
        $titre="Non Accepté";
      }
      else{
        $src="#";$vis="invisible";
      }
      echo '
        <SCRIPT>
          icon = document.getElementsByName("validImages");
          icon['.$t.'].src = "../IMG/'.$src.'.png";
          icon['.$t.'].style.visibility = "'.$vis.'";
          icon['.$t.'].title = "'.$titre.'";
        </SCRIPT>
      ';
    }
  }

}
if(isset($_POST["submit-button"])){
  $error = "";$insert=true;$k=0;$invalides=[];
  //Pour ne pas accepter les date qui sont inférieur a aujourd'hui:
  while(isset($_POST["Date".$k])&&$_POST["Date".$k]!=""){
    if(date('Y-m-d')>$_POST["Date".$k]){
      $insert=false;
      echo '
        <SCRIPT>
          span = document.getElementsByName("error");
          span['.$k.'].innerHTML="Date invalide!";
          span['.$k.'].style.color="red";
        </SCRIPT>
      ';
    }   
    else{
      $titre="";
      if(sizeof($lignes)!=0){
          if(isset($lignes[$i][3])&&$lignes[$i][3]){
          $src="valid";
          $titre="Accepté";
        }
        else{
          $src="cross";
          $titre="Non Accepté";
        }
        echo '
          <SCRIPT>
            icon = document.getElementsByName("validImages");
            icon['.$k.'].src = "../IMG/'.$src.'.png";
            icon['.$k.'].style.visibility = "visible";
            icon['.$k.'].title = "'.$titre.'";
          </SCRIPT>
        ';
      }
      
    } 
    $k++;
  }
  

  if($insert){
    $query = "SELECT id_seance from seance where id_candidat='".$_SESSION["login"]."'";
    $ids = mysqli_fetch_row(mysqli_query($connect,$query));
    if($ids!=null){
      $counter=$ids[0];
    }
      $message=$aucune=false;
      for($j=0;$j<$nb_heures[0];$j++){
        $date = new DateTime($_POST['Date'.$j]);
        $weekday_names = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        $weekday = $weekday_names[intval($date->format('w'))];  
        if($_POST["Date".$j]!="" && $j < sizeof($lignes)){
          $query = "UPDATE SEANCE SET Jour='".$weekday."',Date='".$_POST["Date".$j]."',Heure='".$_POST["Heure".$j]."' WHERE id_seance='".$counter."'";
          mysqli_query($connect,$query);
          $counter++;
          $message = true;
        }
        else if($_POST["Date".$j]!=""){
          $query = "INSERT INTO SEANCE(Jour,Date,Heure,id_candidat) VALUES('".$weekday."','".$_POST["Date".$j]."','".$_POST["Heure".$j]."','".$_SESSION["login"]."')";
          mysqli_query($connect,$query);  
          $message = true;
        }
        //Quand l'utilisateur n'a entrée aucune date:
        if($_POST["Date0"]==""){
          $aucune = true;
        }
      }
      if($message){
        echo'
          <SCRIPT>
            let conf = document.getElementsByName("Conf");
            conf[0].innerHTML="Votre choix d\'horaire en cours de vérification";
            conf[0].style.font="800 16px \'Noto Sans\'";
            conf[0].style.height="40px";
            conf[0].style.borderRadius="4px";
            conf[0].style.border="1px solid rgb(174, 174, 174)";
            conf[0].style.color="rgb(107 107 107)";
            conf[0].style.backgroundColor="#BDFF80";
          </SCRIPT>
        ';
      }
      if($aucune){
        echo'
          <SCRIPT>
            let conf = document.getElementsByName("Conf");
            conf[0].innerHTML="Il faut sélectionner une date!";
            conf[0].style.font="800 16px \'Noto Sans\'";
            conf[0].style.height="40px";
            conf[0].style.borderRadius="6px";
            conf[0].style.color="#fff";
            conf[0].style.backgroundColor="#fd1d1d";
          </SCRIPT>
        ';
      }
  }
  echo '
    <SCRIPT>
          var tr = document.getElementsByName("row");
          var table = document.getElementsByTagName("TABLE")[0];
          var row = table.getElementsByTagName("tr");
      ';
      for($i = 0 ; $i < $nb_heures[0] ; $i++){
        $date = new DateTime($_POST['Date'.$i]);
        $weekday_names = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        if($_POST['Date'.$i]!=""){
          $weekday = $weekday_names[intval($date->format('w'))];
        }
        else{
          $weekday = "Jour";
        }
        echo '
          var column = row['.($i+1).'].getElementsByTagName("td");
          column[0].innerHTML="'.$weekday.'";';

          echo 'document.formulaire.Date'.$i.'.value="'.$_POST["Date".$i].'";';
          echo 'option = "'.$_POST["Heure".$i].'"';
          echo'
          document.formulaire.Heure'.$i.'.options.namedItem(option).selected = true;
        ';
      }
    echo '
      </SCRIPT>
    ';
}
?>