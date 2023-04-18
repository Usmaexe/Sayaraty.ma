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
		<link rel="stylesheet" href="../CSS/style-index.css">
    <link rel="stylesheet" href="../CSS/style-contacter.css">
    <link rel="stylesheet" href="../CSS/style-candidat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
  </head>
  <body>';
  include("AccueilHeader.php");
      echo '
    <div class="Title">
      <h1 class="TheHeader">CONTACTEZ-NOUS</h1>
      <p class="Sentence">L\'&eacute;quipe d\'assistance est disponible 24/7 pour vous aider et r&eacute;pondre &agrave; vos questions.</p>
    </div>
    <div class="Container">
      <div class="leftContainer">     
        <form name="formulaire" id="contacter" class="formulaire" action="Contactez-nous.php" method="post">';
          if(!isset($_SESSION["login"])){
            echo '
            <div class="nom_email">
              <div class="block">
                <label>Nom</label><input type="text" id="name" name="nom">
              </div>
              <div class="block">
                <label>Email</label><input type="text" id="mail" name="email">
              </div>
            </div>
            ';
          }
          echo'
          <div class="block">
            <label>Comment peut-on vous aider ?</label><TEXTAREA id="text" ROWS="5" COLS="60" name="contenu" value="test"></TEXTAREA>
          </div>
          <div class="objet">
            <label style = "width: 65px;">Objet</label><span id="message" style="color:red;visible:hidden;"></span>
            <div class="options">
              <div>
                <input type="radio" name="objet" value="Problème de contact">Probl&egrave;me de contact
              </div> 
              <div>
                <input type="radio" name="objet" value="Problème technique">Probl&egrave;me technique
              </div>
              <div>
                <input type="radio" name="objet" value="Autre problème">Autre probl&egrave;me
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
          <LI><img src = "../IMG/map.png" class = "cor"><A HREF="">30 Bv lkhatabi, Hay Salam, Oujda</A></LI>
          <LI><img src = "../IMG/phone-call.png" class="cor"><A HREF="">06 24 67 82 90</A></LI>
          <LI><img src = "../IMG/email.png" class="cor"><A HREF="">AutoEcol99@gmail.com</A></LI>
        </UL>
        <style>
          .cor{
            width:20px;
            margin-right: 10px;
          }
        </style>
      </div>
    </div>';
      include("AccueilFooter.php");
    echo'
    <script>
    var subMenu = document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }
  </script>
  </body>
</html>

<script>
  //obtenir les élement du formulaire de connexion
  let form = document.getElementById("contacter");
  let inputs = form.querySelectorAll("input");
  let text = document.getElementById("text");
  let radios = document.getElementsByName("objet");
  console.log("they are declared!");
  let r,empty=true;
  form.addEventListener("submit", function(event) {
    text = document.getElementById("text");
    inputs = form.querySelectorAll("input");
    radios = document.getElementsByName("objet");

    radios.forEach(function(radio) {
      if(radio.checked){
        r = radio;
        empty=false;
      }
    });

    inputs.forEach(function(input) {
      if (input.value.trim() === "") {
        event.preventDefault();
        input.style.border = "1px solid red";
      }
      else{
        input.style.border = "none";
        input.style.borderBottom = "solid 1px #4e4e4e";
      }
    });

    if(text.value.trim() === ""){
      event.preventDefault();
      text.style.border = "1px solid red";
    }
    else{
      text.style.border = "1px solid #4e4e4e";
    }

    if(empty){
      event.preventDefault();
      let msg = document.getElementById("message");
      msg.innerHTML = "Il faut choisir une option !";
    }
    else{
      let msg = document.getElementById("message");
      msg.innerHTML="";
    }
  });

</script>
';
if(isset($_POST["submit-button"])){
  $insert=true;
  if(isset($_SESSION["login"])){   
    $query = "SELECT nom,email_candidat from candidat where login_candidat='".$_SESSION["login"]."'";
    $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
    $name = $ligne[0];
    $mail = $ligne[1];
  }
  else{
    $name=$_POST["nom"];
    $mail=$_POST["email"];    
  }
  if(isset($_SESSION["login"])){   
    $query = "SELECT nom,email_candidat from candidat where login_candidat='".$_SESSION["login"]."'";
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
        let email = document.getElementById("mail");
        email.style.borderBottom="2px solid red";
        email.style.backgroundColor="#ffb9b9";
      </SCRIPT>      
    ';
  }
  if(!preg_match("#^[A-z\ ]+#",$name)){
    $insert=false;
    echo '
      <SCRIPT>
        let name = document.getElementById("name");
        name.style.borderBottom="2px solid red";
        name.style.backgroundColor="#ffb9b9";
      </SCRIPT>
    ';
  }
  if($insert){
    $query = 'INSERT INTO message(nom,contenu,email,objet) VALUES("'.$name.'","'.$_POST["contenu"].'","'.$mail.'","'.$_POST["objet"].'")';
    mysqli_query($connect,$query);
    echo '
      <SCRIPT>
        document.formulaire.innerHTML = "<p style=\"color:green;font-size:18px;\">Votre message a été envoyé avec succès !</p>" + document.formulaire.innerHTML;
      </SCRIPT>
    ';
  }
  else{
    echo '
      <SCRIPT>
        document.formulaire.innerHTML = "<p style=\"color:red;font-size:18px;\">Valeur(s) incorrectes !</p>" + document.formulaire.innerHTML;
      </SCRIPT>
    ';
    echo '
      <SCRIPT>
        document.formulaire.nom.value = "'.$name.'";     
        document.formulaire.email.value = "'.$mail.'";     
        document.formulaire.contenu.value = `'.$text.'`;
        var objet = document.getElementsByName("objet");
        for(let i = 0 ; i < 3 ; i++){       
          if("'.$prbl.'"==objet[i].value){
            objet[i].checked=true;
          }
        }
      </SCRIPT>
    ';
  }
}
?>