<footer>
      <DIV class="FooterContainer">
        <DIV class="Footer-col">
          <h4>Nos Horraires</h4>
          <UL class="Horraire" style="color : #bbb;">
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
            <LI><A HREF="../Accueil/Nos-offres.php">Nos offres</A></LI>
            <LI><A HREF="../Accueil/A-propos.php">A Propos de nous</A></LI>
            <LI><A HREF="../Accueil/Contactez-nous.php">Envoyer un message</A></LI>
          </UL>
        </DIV>
        <DIV class="Footer-col">
          <h4>Nos coordonnées</h4>
          <UL class="coordonnees">
              <?PHP
                $queryAdmin = "SELECT Email,num_telephone_admin,adresse FROM administrateur";
                $values = mysqli_fetch_row(mysqli_query($connect,$queryAdmin));
                echo'
                  <LI><img src = "../IMG/map.png" class = "cor"><A HREF="">'.$values[0].'</A></LI>
                  <LI><img src = "../IMG/phone-call.png" class="cor"><A HREF="">'.$values[1].'</A></LI>
                  <LI><img src = "../IMG/email.png" class="cor"><A HREF="">'.$values[2].'</A></LI>
                ';
              ?>
            </UL>
            <style>
              .cor{
                width:20px;
                margin-right: 10px;
              }
            </style>
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