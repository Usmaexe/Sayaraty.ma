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
		<link rel="stylesheet" href="../CSS/style-avis.css">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
		<link rel="stylesheet" href="../CSS/style-contacter.css">
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
    <div class="Title">
      <h1 class="TheHeader">DONNER VOTRE AVIS</h1>
      <p class="Sentence" style="text-transform:none;">Comment trouver-vous notre site-web? vous pouvez donner votre avis maintenant</p>
    </div>
    <div class="Container">
      <div class="leftContainer">     
        <form name="formulaire" id="avis" class="formulaire" action="DonnerAvis.php" method="post">
          <p id="valid" style="color:green; font-size:16px;"></p>
          <div class="block">
            <label>Commentaire</label><TEXTAREA id="text" ROWS="5" COLS="60" name="contenu" required></TEXTAREA>
          </div>
          <div class="objet">
            <label>Avis</label>         
            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5"><label class = "full" for="star5" title="Excellent - 5 étoiles"></label>
              <input type="radio" id="star4" name="rating" value="4"><label class = "full" for="star4" title="Agréable - 4 étoiles"></label>
              <input type="radio" id="star3" name="rating" value="3"><label class = "full" for="star3" title="Moyenne - 3 étoiles"></label>
              <input type="radio" id="star2" name="rating" value="2"><label class = "full" for="star2" title="Désagréable - 2 étoiles"></label>
              <input type="radio" id="star1" name="rating" value="1"><label class = "full" for="star1" title="Détestable- une étoile" ></label>
            </fieldset>
            <span id="erreur" ></span>   
          </div>
          <div class="submit">
           <input name="submit" type="submit" value="Envoyer">
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
    </div>';
      include("CandidatFooter.php");
    echo"
<script>
  let form = document.getElementById('avis');
  let stars = document.getElementsByName('rating');
  let span = document.getElementById('erreur');let check=false;
  form.addEventListener('submit', function(event) {
    stars.forEach((radio)=> {
      if(radio.checked){
        check = true;
      }
    });
    if(!check){
      event.preventDefault();
      span.style.visibility='visible';
      span.style.color='red';
      span.innerHTML = 'Il faut au moins sélectionner une étoile';
    }
  });
</script>
</HTML>
";

  if(isset($_POST["submit"])){
    if(!isset($_POST["rating"])){
      $_POST["rating"]=0;
    }
    $query = 'INSERT INTO AVIS(Contenu,Note,statut,id_candidat) VALUES("'.$_POST["contenu"].'","'.$_POST["rating"].'",0,"'.$_SESSION["login"].'")';
    mysqli_query($connect,$query);
    echo '
      <SCRIPT>
        console.log("hello");
        let msg = document.getElementById("valid");
        msg.innerHTML = "Votre avis a été envoyer par succées!";
        </SCRIPT>
    ';
  }
?>