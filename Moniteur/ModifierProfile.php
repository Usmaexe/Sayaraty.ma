<?PHP
  require("../PHP/Connexion_BD.php");
  session_start();
  echo '
    <!DOCTYPE HTML>
    <HTML>
      <HEAD>
        <meta CHAESET="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--it\'s only used for Internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Controls the layout of the page on smaller screens-->
        <TITLE>Sayarty - Espace Candidat</TITLE>
        <script src="Page-Candidat.js"></script>
        <link rel="icon" href="../IMG/SAYARATY_Icon.png">
        <link rel="stylesheet" href="../CSS/style-index1.css">
        <link rel="stylesheet" href="../CSS/style-candidat.css">
        <link rel="stylesheet" href="../CSS/style-contacter.css">
        <link rel="stylesheet" href="../CSS/style-modifier.css">
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
          echo'
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
          <h1 class="TheHeader">modifier votre profil</h1>
        </div>
        <div class="Container">
          <div class="rightContainer">
            <label class="picTitle">Photo De profil</label>
            <span class="subTitle">
              Avec une photo à jour, votre identifiera plus facilement sur le site.
            </span>
            <div class="image">
              <img id="ImgProfile" src="'.$ligne[8].'" alt>
            </div>
            <form name="fichier" ACTION="ModifierProfile.php" method="post" enctype="multipart/form-data">
              <input type="file" name="photo" id="photo" ACCEPT="image/*">
              <input type="submit" name="SubmitPic" class="submitPic"  value="Changer" style="width:100px;">
            </form>
          </div>
          <div class="leftContainer">     
            <form name="formulaire" class="formulaire" method="post">
              <div class="nom_email">
                <div class="block">
                  <label>Nom</label><input type="text" id="name" name="nom" value="'.$ligne[2].'"required>
                </div>
                <div class="block">
                  <label>Login</label><input type="text" id="mail" name="login" value="'.$ligne[0].'" READONLY required>
                </div>
              </div>
              <div class="secondBlock">
                <div class="first">
                  <label>Sexe</label>
                  <select name="sexe" id="select-area" class="sexe">';
                  if($ligne[4]=="Homme"){
                    echo'
                      <option class="sexe" name="Homme" value="Homme" SELECTED>Homme</option>
                      <option class="sexe" name="Femme" value="Femme">Femme</option>
                    ';
                  }
                  else{
                    echo'
                      <option class="sexe" name="Homme" value="Homme">Homme</option>
                      <option class="sexe" name="Femme" value="Femme" SELECTED>Femme</option>
                    ';
                  }
                  echo'
                  </select>
                </div>
                <div class="second">
                  <label>Numèro Carte National</label>
                  <input type="text" name="num_cin" class="login-style" value="'.$ligne[6].'" autocomplete="off" required>                 
                </div>
                <div class="second">
                  <label>Licence</label>
                  <input type="text" name="licence" class="login-style" value="'.$ligne[7].'" autocomplete="off" required>                                
                </div>
              </div>
             
              <div class="forthBlock">
                <div class="first">
                  <label>Email</label>
                  <input type="text" name="email" class="name-style" value="'.$ligne[3].'" autocomplete="off" required>  
                </div>
                <div class="second">
                  <label>Mot de passe</label>
                  <input type="password" name="password" class="login-style"  autocomplete="off"  >                 
                </div>
                <div class="third">
                  <label>Confirmer mot de passe</label>
                  <input type="password" name="Cpassword" class="login-style" autocomplete="off"  >                 
                </div>
              </div>
              <div class="submit">
                <input  name="submit-button" type="submit" value="Envoyer">
              </div>
            </form>
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
      </BODY>
      <script>
        var subMenu = document.getElementById("subMenu");
        function toggleMenu(){
          subMenu.classList.toggle("open-menu");
        }
      </script>
    </HTML> 
    
  ';
  if(isset($_POST["submit-button"])){
      $pss= $_POST["password"];
      $name= $_POST["nom"];
      $email= $_POST["email"];
      $sexe= $_POST["sexe"];
      $Cin= $_POST["num_cin"];
      $licence= $_POST["licence"];
      $update = true;$error;
      if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$_POST["email"])){     
        $error="email";
        $update=false;
      }
      if(!preg_match("#^[A-z\ ]+#",$_POST["nom"])){
        $error="nom";
        $update=false;
      }
      if(!preg_match("#^\w{1,2}\d{4,6}#",$_POST["num_cin"])){
        $error="Numéro carte national";
        $update=false;
      }
      if($_POST["Cpassword"]!=$_POST["password"]) {
        $error="Mot de passe";
        $update=false;
      }
      
    if($update){
      if($_POST["password"]==""){
        $query="SELECT Password FROM MONITEUR WHERE Login_moniteur='".$_SESSION["login"]."'";
        $result=mysqli_fetch_row(mysqli_query($connect,$query));
        $_POST["password"]=$result[0];
      }
      $query = "UPDATE moniteur SET Password='".password_hash($_POST["password"], PASSWORD_DEFAULT)."',Nom='$name',
      Email_moniteur='$email',Sexe_moniteur='$sexe',
      Num_CIN_moniteur='$Cin'
      ,num_permis='$licence' WHERE Login_moniteur='".$_SESSION["login"]."'";
      if($result=mysqli_query($connect,$query)){
        echo '
        <SCRIPT>
          document.getElementById("ImgProfile").src="../IMG/'.$_FILES["photo"]["name"].'";
          document.location = "./ModifierProfile.php" ;
        </SCRIPT>
      ';
      }
      echo "
        <SCRIPT>
          document.formulaire.nom.value='".$_POST["nom"]."';
          document.formulaire.num_cin.value='".$_POST["num_cin"]."';
          document.formulaire.licence.value='".$_POST["licence"]."';
          document.formulaire.email.value='".$_POST["email"]."';           
          let option = '".$_POST["sexe"]."';
          document.Inscription.sexe.options.namedItem(option).selected = true;

        </SCRIPT>
      ";
      echo '
      <SCRIPT>
               document.location = "./ModifierProfile.php" ;
      </SCRIPT>
    ';
    }
    else{
      echo '
        <SCRIPT>
          alert("'.$error.' Incorrecte!");
        </SCRIPT>
      ';
    }  
  
      header("location:./ModifierProfile.php");

  }
  if(isset($_POST["SubmitPic"])){
    $fichier=$_FILES['photo'];
    if($fichier['error']==0){
      $src=$fichier['tmp_name'];
      $dest="../IMG/".$fichier['name'];
      move_uploaded_file($src,$dest);
    }
    $query = "UPDATE moniteur SET Photo_moniteur='../IMG/".$_FILES["photo"]["name"]."' WHERE Login_moniteur='".$_SESSION["login"]."'";
    $result= mysqli_query($connect,$query);
    echo '
      <SCRIPT>
        document.getElementById("ImgProfile").src="../IMG/'.$_FILES["photo"]["name"].'";
        document.location = "./ModifierProfile.php" ;
      </SCRIPT>
    ';
  }

?>