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
		<link rel="stylesheet" href="../CSS/style-Examen.css">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
    <link rel="stylesheet" href="../CSS/style-contacter.css">
    <link rel="stylesheet" href="../CSS/style-Emploi.css"> 
    <link rel="stylesheet" href="../administrateur/styles/Style_condidat1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">

  </HEAD>
	<BODY>
    <header>
      <a href="index.php"><img src="../IMG/SAYARATY_LOGO.png"></a>
      <UL class="Nav">
        <LI class = "item1"><a href="index.php">ACCUEIL</a></LI>
        <LI class = "item2"><a href="A-propos.php">&Agrave PROPOS</a></LI>
        <LI class = "item4"><a href="Contactez-nous.php">CONTACTEZ-NOUS</a></LI>
      </UL>';
      $query = "SELECT * FROM moniteur WHERE Login_moniteur='".$_SESSION["login"]."'";
      $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
      echo '
      <span class="mon-compte" onclick="toggleMenu()"><img src="'.$ligne[8].'" class="user-pic"> <span>Mon compte</span></span>
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="'.$ligne[8].'" class="user-pic">
            <h2>'.$_SESSION["login"].'</h2>
            <hr>
            <a href="ModifierProfile.php" class="sub-menu-link">
              <img src="../IMG/modify.png" alt="">
              <P>Modifier Profil</P>
            </a>
            <a href="CoursQest.php" class="sub-menu-link">
              <img src="../IMG/cours.png" alt="">
              <P>Cours & Questionnaire</P>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../IMG/testing.png" alt="">
              <P>Emploi du temps</P>
            </a>
            <a href="../PHP/Deconnexion.php" class="sub-menu-link">
              <img src="../IMG/logout.png" style="padding: 0px 0px 0px 4px; width: 26px" alt="">
              <P>D&eacute;connexion</P>
            </a>
          </div>
        </div>
      </div>
    </header>
    <DIV class="tableContainer">
    <div class="Title">
      <h1 class="TheHeader">Emploi du temps</h1>
      </div>    
      <FORM name="formulaire" METHOD="POST" ACTION="EmploiTemps.php">
      <TABLE CELLSPACING=0>
        <tr>
        
          <th>Date</th>
          <th>Heure</th>
          <th>Candidat</th>
          <th>Voiture</th>
        </tr>
        <SCRIPT>
                let option;
        </SCRIPT>
           ' ;
           $nbr_candidat = mysqli_query($connect,"SELECT COUNT(*) FROM seance where id_moniteur='".$_SESSION["login"]."'");
           $nbr_candidat = mysqli_fetch_row($nbr_candidat); 
    
           echo'
           <p class="Sentence">
               Nombre de seance avec voscandidats : <b>'.$nbr_candidat[0].'</b><BR>
               ';
               if($nbr_candidat[0]!=0){
                 echo'<p style=" font:400 18px \'Noto Sans\';text-transform:Initial;">Vous pouvez modifier la date de vos séances pratiques avec le candidat </P ><BR>';
               }
               else{
                 echo '<p style=" font:400 18px \'Noto Sans\';text-transform:Initial;">Il faut que vous attendez ajout d\administateur <BR>';
               } 
               echo '</p>
         </DIV>';
         if($nbr_candidat[0]!=0){
          $requete = "SELECT * FROM seance where id_moniteur='".$_SESSION["login"]."'";
         if($result = mysqli_query($connect,$requete)){ 
          $i=0;
           while($nbr_candidat=mysqli_fetch_row($result)){
             $lignes[$i]=$nbr_candidat;
            $i++;
           }
        }
        $nbr_sc= mysqli_query($connect,"SELECT COUNT(*) FROM seance where id_moniteur='".$_SESSION["login"]."'");
        $nbr_sc= mysqli_fetch_row($nbr_sc); 
      for($i=0;$i<$nbr_sc[0];$i++){
        $idd=$lignes[$i][0] ; 
        $id=$lignes[$i][5];
        $requet = mysqli_query($connect, "SELECT Nom FROM candidat where Login_candidat like '$id'");
        $cl=mysqli_fetch_row($requet);
        
             echo ' <tbody>
              <tr>
             
                  
                  <td>
                
                  <input  type="date" name="Date'.$i.'" value="'.$lignes[$i][2].'">
                 </td>
                  <td>
                  <SELECT name="heure'.$i.'">';
                  if ($lignes[$i][3]=="9:00-10:00"){
                    echo' <OPTION name="9:00-10:00" VALUE="9:00-10:00" SELECTED>09:00-->10:00</OPTION>
                    <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION>
                    <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                    <OPTION name="12:00-13:00" VALUE="12:00-13:00">12:00-->13:00</OPTION>';
                  }else if ($lignes[$i][3]=="10:00-11:00"){
                    echo'  <OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                    <OPTION name="10:00-11:00" VALUE="10:00-11:00" SELECTED>10:00-->11:00</OPTION>
                    <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                    <OPTION name="12:00-13:00" VALUE="12:00-13:00">12:00-->13:00</OPTION>';
                  }else if ($lignes[$i][3]=="11:00-12:00"){
                    echo' <OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                    <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION> 
                    <OPTION name="11:00-12:00" VALUE="11:00-12:00" SELECTED>11:00-->12:00</OPTION>
                    <OPTION name="12:00-13:00" VALUE="10:00-11:00">12:00-->13:00</OPTION>';
                  }else if ($lignes[$i][3]=="12:00-13:00"){
                    echo'<OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                    <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION>
                    <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                     <OPTION name="12:00-13:00" VALUE="12:00-13:00" SELECTED>12:00-->13:00</OPTION>';
                  }else{
                  echo'
                  <OPTION name="9:00-10:00" VALUE="9:00-10:00">09:00-->10:00</OPTION>
                  <OPTION name="10:00-11:00" VALUE="10:00-11:00">10:00-->11:00</OPTION>
                  <OPTION name="11:00-12:00" VALUE="11:00-12:00">11:00-->12:00</OPTION>
                  <OPTION name="12:00-13:00" VALUE="12:00-13:00">12:00-->13:00</OPTION>';
                  }
                  echo'
                </SELECT>
                <SCRIPT>
                  option = "'.$lignes[$i][3].'";
                  document.formulaire.Heure'.$i.'.options.namedItem(option).selected = true; 
                </SCRIPT>
                  </td>

                  <td>'.$cl[0].'</td>  
                  <td>'.$lignes[$i][7].'</td>
                  <th>
                     <a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer la seance?")\'href="../administrateur/supp/suppsea1.php?deleteid='.$idd.'"> <image class="image_delete"src="../administrateur/image/delete.png" ></a> 
                  </th>

              </tr>' ;

        }

echo'                              
</TABLE>
<SPAN name="Conf" class="confirmation"></SPAN>
<div class="submit">
  <input name="submit-button" type="submit" value="Modifier">
</div>
</FORM>';
}
echo'
     </div>
  
    </div>
     
    <footer>
      <DIV class="FooterContainer">
        <DIV class="Footer-col">
          <h4>Nos Horraires</h4>
          <UL class="Horraire" style="color: #bbb;">
            <LI>Lundi | 09:00 - 17:00</LI>
            <LI>Mardi | 09:00 - 17:00</LI>
            <LI>Mercredi | 09:00 - 17:00</LI>
            <LI>Jeudi | 09:00 - 17:00</LI>
            <LI>Vendredi | 09:00 - 12:00</LI>
            <LI>Samedi | 09:00 - 19:00</LI>
          </UL>
        </DIV>
        <DIV class="Footer-col">
          <h4>aide</h4>
          <UL class="Aide">
            <LI><A HREF="A-propos.php">A Propos de nous</A></LI>
            <LI><A HREF="Contactez-nous.php">Envoyer un message</A></LI>
          </UL>
        </DIV>
        <DIV class="Footer-col">
          <h4>Nos coordonnées</h4>
          <UL class="coordonnees">
            <LI><i class="fa-solid fa-location-dot"></i><A HREF="">30 Bv lkhatabi, Hay Salam, Oujda</A></LI>
            <LI><i class="fa-solid fa-phone"></i><A HREF="">06 24 67 82 90</A></LI>
            <LI><i class="fa-solid fa-envelope"></i><A HREF="">AutoEcol99@gmail.com</A></LI>
          </UL>
        </DIV>
        <DIV class="Footer-col">
          <h4>suivez-nous</h4>
          <DIV class="SocialMedia">
            <a href="#"> <img src="../IMG/facebook.png" alt=""></a>
            <a href="#"> <img src="../IMG/instagram.png" alt=""></a>
            <a href="#"> <img src="../IMG/linkedin.png" alt=""></a>
          </DIV>
        </DIV>
      </DIV>
  </footer>	
  <script>
    var subMenu = document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }
  </script>
</HTML>
';
  if(isset($_POST["submit-button"])){
    $error = "";$insert=true;$k=0;$invalides=[];
    while(isset($_POST["Date".$k])&&$_POST["Date".$k]!=""){
      if(date('Y-m-d')>$_POST["Date".$k]){
        $insert=false;
        echo '
          <SCRIPT>
            span = document.getElementsByName("error");
            span['.$k.'].innerHTML="Date invalide!";
            
          </SCRIPT>
        ';
      }   
      else{
       
      } 
      $k++;
    }
    $nbr_candidat = mysqli_query($connect,"SELECT COUNT(*) FROM seance where id_moniteur='".$_SESSION["login"]."'");
    $nbr_candidat = mysqli_fetch_row($nbr_candidat); 
    if ($insert) {
      $query = "SELECT id_seance from seance where id_moniteur='" . $_SESSION["login"] . "'";
      $result =  mysqli_fetch_row(mysqli_query($connect, $query));
      if($result !=null){
        $counter=$result[0];
      }
        $message=$aucune=false;
        for ($j = 0; $j < $nbr_candidat[0]; $j++) {
          if (!empty($_POST["Date" . $j]) && $j < sizeof($lignes)) {
            $query = "UPDATE SEANCE SET Date='" . $_POST["Date" . $j] . "' ,Heure='" . $_POST["heure" . $j] . "',Valide=0 WHERE id_seance='" . $counter . "'";
            mysqli_query($connect, $query);
            $message = true;
            $counter++;
             // Exit loop after first itera $counter tion
          }
        
          
        }
  }
  echo'
      <SCRIPT>
      document.location = "./EmploiTemps.php" ;
    </SCRIPT>';
  echo '
    
    ';
}
?>