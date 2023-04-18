<?PHP
         require("../../PHP/Connexion_BD.php"); 
  session_start();
  echo '
<div class="Container">
          <div class="rightContainer">
            <label class="picTitle">Photo De profile</label>
            <span class="subTitle">
              Avec une photo à jour, votre identifiera plus facilement sur le site.
            </span>
            <form name="fichier" method="post">
              <input type="file" name="Photo">
              <input type="submit" name="SubmitPic" class="submitPic" value="Changer" style="width:100px;">
            </form>
          </div>';
          $query = "SELECT * FROM Candidat WHERE Login_candidat='".$_SESSION["login"]."'";
          $ligne = mysqli_fetch_row(mysqli_query($connect,$query)); 
          echo '
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
                  <label>Date de naissance</label>
                  <input type="date" name="date_naissance" class="login-style" value="'.$ligne[7].'" autocomplete="off" required>                 
                </div>
                <div class="third">
                  <label>Numéro de télephone</label>
                  <input type="text" name="num_tel" class="name-style" value="'.$ligne[5].'" autocomplete="off" required>                                
                </div>
              </div>
              <div class="thirdBlock">
                <div class="first">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="name-style" value="'.$ligne[13].'" autocomplete="off" required>  
                </div>
                <div class="second">
                  <label>Numèro Carte National</label>
                  <input type="text" name="num_cin" class="login-style" value="'.$ligne[6].'" autocomplete="off" required>                 
                </div>
              </div>
              <div class="forthBlock">
                <div class="first">
                  <label>Email</label>
                  <input type="text" name="email" class="name-style" value="'.$ligne[3].'" autocomplete="off" required>  
                </div>
                <div class="second">
                  <label>Mot de passe</label>
                  <input type="password" name="password" class="login-style" value="'.$ligne[1].'" autocomplete="off" required>                 
                </div>
                <div class="third">
                  <label>Confirmer</label>
                  <input type="password" name="Cpassword" class="login-style" value="'.$ligne[1].'" autocomplete="off" required>                 
                </div>
              </div>
              <div class="submit">
                <input name="submit-button" type="submit" value="Envoyer">
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
            <LI><A HREF="">Q&R</A></LI>
            <LI><A HREF="">Nos offres</A></LI>
            <LI><A HREF="">A Propos de nous</A></LI>
            <LI><A HREF="">Envoyer un message</A></LI>
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
      </DIV>';

     ?>