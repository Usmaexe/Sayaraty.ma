<?PHP
require("../PHP/Connexion_BD.php");
session_start();
echo '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayaraty - Contactez-Nous</title>
    <link rel="icon" href="../IMG/SAYARATY_Icon.png">
		<link rel="stylesheet" href="../CSS/style-index1.css">
    <link rel="stylesheet" href="../CSS/style-contacter.css">
    <link rel="stylesheet" href="../CSS/style-candidat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Noto+Sans:wght@300;500;600;700;800;900&family=Poppins:wght@300;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
 <style>
    
 </style> 
    </head>
  <body>
    <header>';
     
        echo '
          <a href="index.php" class"esp"><img src="../IMG/SAYARATY_LOGO.png"></a>
    
      <UL class="Nav">';

      
        echo '
          <LI class = "item1"><a href="index.php">ACCUEIL</a></LI>
          <LI class = "item2"><a href="A-propos.php">&Agrave PROPOS</a></LI>
          <LI class = "item4"><a href="Contactez-nous.php">CONTACTEZ-NOUS</a></LI>
        </UL>
        ';
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
              <a href="CoursQuest.php" class="sub-menu-link">
                <img src="../IMG/cours.png" alt="">
                <P>Cours & Questionnaire</P>
              </a>

              <a href="EmploiTemps.php" class="sub-menu-link">
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
    <div class="Title">
      <h1 class="TheHeader">CONTACTEZ-NOUS</h1>
      <p class="Sentence">L\'&eacute;quipe d\'assistance est disponible 24/7 pour vous aider et r&eacute;pondre &agrave; vos questions.</p>
    </div>
    <div class="Container">
      <div class="leftContainer">     
        <form name="formulaire" class="formulaire" action="Contactez-nous.php" method="post">
          <div class="block">
            <label>Comment peut-on vous aider ?</label><TEXTAREA id="text" ROWS="5" COLS="60" name="contenu" required></TEXTAREA>
          </div>
          <div class="objet">
            <label>Objet</label>
            <div class="options">
              <div>
                <input type="radio" name="objet" value="Problème de contact" REQUIRED>Probl&egrave;me de contact
              </div> 
              <div>
                <input type="radio" name="objet" value="Problème technique" REQUIRED>Probl&egrave;me technique
              </div>
              <div>
                <input type="radio" name="objet" value="Autre problème" REQUIRED>Autre probl&egrave;me
              </div>
            </div>
          </div>
          <div class="submit">
           <input name="submit-button" type="submit" value="Envoyer">
          </div>
        </form>
      </div>
      <div class="rightContainer">
        <UL class="coordonnees">
          <LI><i class="fa-solid fa-location-dot"></i><A HREF="">30 Bv lkhatabi, Hay Salam, Oujda</A></LI>
          <LI><i class="fa-solid fa-phone"></i><A HREF="">06 24 67 82 90</A></LI>
          <LI><i class="fa-solid fa-envelope"></i><A HREF="">AutoEcol99@gmail.com</A></LI>
        </UL>
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
            <h4>Nos coordonn&eacute;es</h4>
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
  </body>
</html>
';
if(isset($_POST["submit-button"])){
  $insert=true;
  if(isset($_SESSION["login"])){   
    $query = "SELECT Nom,email_moniteur from moniteur where login_moniteur='".$_SESSION["login"]."'";
    $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
    $name = $ligne[0];
    $mail = $ligne[1];
  }
  else{
    $name=$_POST["nom"];
    $mail=$_POST["email"];    
  }
  if(isset($_SESSION["login"])){   
    $query = "SELECT Nom,email_moniteur from moniteur where login_moniteur='".$_SESSION["login"]."'";
    $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
    $name = $ligne[0];
    $mail = $ligne[1];
  }
  else{
    $name=$_POST["nom"];
    $mail=$_POST["email"];    
  }
  $text=$_POST["contenu"];     
  $prbl=$_POST["objet"];
  if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$mail)){
    $insert=false;
    echo '
      <SCRIPT>
        document.formulaire.innerHTML = "<p style=\"color:red;font-size:18px;\">Il faut entrer un email valide!</p>"+document.formulaire.innerHTML;
        document.formulaire.nom.value = "'.$name.'";     
        document.formulaire.email.value = "'.$mail.'";     
        document.formulaire.contenu.value = `'.$text.'`;
        var objet = document.getElementsByName("objet");
        for(let i = 0 ; i < 3 ; i++){       
          if("'.$prbl.'"==objet[i].value){
            objet[i].checked;
          }
        }
      </SCRIPT>      
    ';
  }
  if(!preg_match("#^[A-z\ ]+#",$name)){
    $insert=false;
    echo '
      <SCRIPT>
        document.formulaire.innerHTML = "<p style=\"color:red;font-size:18px;\">Il faut entrer un nom valide!</p>"+document.formulaire.innerHTML;
        document.formulaire.nom.value = "'.$name.'";     
        document.formulaire.email.value = "'.$mail.'";     
        document.formulaire.contenu.value = `'.$text.'`;
        var objet = document.getElementsByName("objet");
        for(let i = 0 ; i < 3 ; i++){       
          if("'.$prbl.'"==objet[i].value){
            alert(objet[i].value+" "+"'.$prbl.'");
            objet[i].checked=true;
          }
        }
      </SCRIPT>
    ';
  }
  if($insert){
    $query = 'INSERT INTO message(nom,contenu,email,objet) VALUES("'.$name.'","'.$_POST["contenu"].'","'.$mail.'","'.$_POST["objet"].'")';
    mysqli_query($connect,$query);
    echo '
      <SCRIPT>
        alert("Votre a message a été bien envoyer");
      </SCRIPT>
    ';
  }
}
?>