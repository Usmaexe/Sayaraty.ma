<?PHP
  require("../php/Connexion_BD.php");
  session_start();
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
    <!-- this is a test -->
    <meta CHAESET="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--it's only used for Internet explorer-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Controls the layout of the page on smaller screens-->
		<TITLE>Sayarty - &Agrave;propos</TITLE>
    <link rel="icon" href="../IMG/SAYARATY_Icon.png">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-apropos.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
  </HEAD>
	<BODY>
  <?PHP include("AccueilHeader.php"); ?>
    <div class="about-container">
        <div class="image-container">
            <img src="../IMG/ipad-iphone.png" alt="">
        </div>
        <div class="text-container">
            <h1>&Agrave; propos</h1>
            <span>
              Sayaraty, plus qu'une auto-&eacute;cole en ligne! Une plateforme qui favorise l'acc&egrave;s &agrave; la mobilit&eacute; pour 
              les jeunes! Chez Sayaraty nous vous accompagnons dans la formation au code de la route et &agrave; la conduite
              et nous vous proposons une assurance auto juste et adapt&eacute;e.
            </span>
        <div class="SocialMedia-col">
          <h4>suivez-nous</h4>
          <DIV class="SocialMedia"> 
            <a href="#"> <img src="../IMG/facebook.png" alt=""></a>
            <a href="#"> <img src="../IMG/instagram.png" alt=""></a>
            <a href="#"> <img src="../IMG/linkedin.png" alt=""></a>
          </DIV>
        </div>
        </div>
    </div>
    <?PHP include("AccueilFooter.php"); ?>
  </BODY>
  <script>
    var subMenu = document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }
  </script>
</HTML>