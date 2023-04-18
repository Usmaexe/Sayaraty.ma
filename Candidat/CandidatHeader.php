<?PHP 
echo'
<header>
      <a href="index.php"><img src="../IMG/SAYARATY_LOGO.png"></a>
      <UL class="Nav">
        <LI class = "item1"><a href="index.php">ACCUEIL</a></LI>
        <LI class = "item2"><a href="../Accueil/A-propos.php">&Agrave PROPOS</a></LI>
        <LI class = "item3"><a href="../Accueil/Nos-offres.php">NOS OFFRES</a></LI>
        <LI class = "item4"><a href="../Accueil/Contactez-nous.php">CONTACTEZ-NOUS</a></LI>
      </UL>';
      $query = "SELECT PHOTO,STATUT FROM Candidat WHERE Login_candidat='".$_SESSION["login"]."'";
      $ligne = mysqli_fetch_row(mysqli_query($connect,$query));
      if($ligne!=null){
      echo '
      <span class="mon-compte" onclick="toggleMenu()"><img src="'.$ligne[0].'" class="user-pic"> <span>Mon compte</span></span>
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="'.$ligne[0].'" class="user-pic">
            <h2>'.$_SESSION["login"].'</h2>
            <hr>
            <a href="ModifierProfil.php" class="sub-menu-link">
              <img src="../IMG/modify.png" alt="">
              <P>Modifier Profil</P>
            </a>
            <a href="CoursQest.php" class="sub-menu-link">
              <img src="../IMG/cours.png" alt="">
              <P>Cours & Questionnaire</P>
            </a>
            <a href="EmploiTemps.php" class="sub-menu-link">
              <img src="../IMG/calendar.png" alt="">
              <P>Emploi du temps</P>
            </a>
            <a href="DonnerAvis.php" class="sub-menu-link">
              <img src="../IMG/star.png" alt="">
              <P>Donner mon avis</P>
            </a>
            <a href="../PHP/Deconnexion.php" class="sub-menu-link">
              <img src="../IMG/logout.png" style="padding : 0px 0px 0px 4px; width : 26px" alt="">
              <P>D&eacute;connexion</P>
            </a>
          </div>
        </div>
      </div>
</header>';
      }
      else{
        header("location:../");
      }
?>