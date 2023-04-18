<header>
  <?PHP
    if(isset($_SESSION["login"])){
      echo '
        <a href="../Candidat/"><img src="../IMG/SAYARATY_LOGO.png"></a>
      ';
    }
    else{
      echo '
        <a href="Accueil/.."><img src="../IMG/SAYARATY_LOGO.png"></a>
      ';
    }
  ?>
  <UL class="Naaav">
  <?PHP
    if(isset($_SESSION["login"])){
      echo '
        <LI class = "item1"><a href="../Candidat/">ACCUEIL</a></LI>
        <LI class = "item2"><a href="A-propos.php">&Agrave PROPOS</a></LI>
        <LI class = "item3"><a href="Nos-offres.php">NOS OFFRES</a></LI>
        <LI class = "item4"><a href="Contactez-nous.php">CONTACTEZ-NOUS</a></LI>
      </UL>
      ';
      $query = "SELECT PHOTO FROM Candidat WHERE Login_candidat='".$_SESSION["login"]."'";
      $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
      echo '
      <span class="mon-compte" onclick="toggleMenu()"><img src="'.$ligne[0].'" class="user-pic"> <span>Mon compte</span></span>
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="'.$ligne[0].'" class="user-pic">
            <h2>'.$_SESSION["login"].'</h2>
            <hr>
            <a href="../Candidat/ModifierProfil.php" class="sub-menu-link">
                <img src="../IMG/modify.png" alt="">
                <P>Modifier Profil</P>
            </a>
            <a href="../Candidat/CoursQest.php" class="sub-menu-link">
              <img src="../IMG/cours.png" alt="">
              <P>Cours & Questionnaire</P>
            </a>
            <a href="../Candidat/EmploiTemps.php" class="sub-menu-link">
              <img src="../IMG/calendar.png" alt="">
              <P>Emploi du temps</P>
            </a>
            <a href="../Candidat/DonnerAvis.php" class="sub-menu-link">
              <img src="../IMG/star.png" alt="">
              <P>Donner mon avis</P>
            </a>
            <a href="../PHP/Deconnexion.php" class="sub-menu-link">
              <img src="../IMG/logout.png" style="padding: 0px 0px 0px 4px; width: 26px" alt="">
              <P>D&eacute;connexion</P>
            </a>
          </div>
        </div>
      </div>
      ';
    }
    else{
      echo '
        <LI class = "item1"><a href="../">ACCUEIL</a></LI>
        <LI class = "item2"><a href="A-propos.php">&Agrave PROPOS</a></LI>
        <LI class = "item3"><a href="Nos-offres.php">NOS OFFRES</a></LI>
        <LI class = "item4"><a href="Contactez-nous.php">CONTACTEZ-NOUS</a></LI>
      </UL>
      <a class="item5" href="Connexion_inscription.php"> <span>Connexion</span></a></DIV>
      ';
    }      
  ?>
</header>