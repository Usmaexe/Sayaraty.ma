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
    <link rel="icon" href="../IMG/SAYARATY_Icon.png">
		<link rel="stylesheet" href="../CSS/style-index.css">
		<link rel="stylesheet" href="../CSS/style-candidat.css">
		<link rel="stylesheet" href="../CSS/Style-CoursQest-moniteur.css">
    <link rel="stylesheet" href="../CSS/style-modifier.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
    <style>
    #aaa{
      
      background:#ffffff;
      border-radius:10px ;
      color:#fff;
      font-size: .8rem;
      padding: 0.5rem 1rem ;
      margin-right: -40px;
      border: 1px solid #ffffff;
  }
  .image_delete{
    width:20px;
}
  </style>
      

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
            <a href="EmploiTemps.php" class="sub-menu-link">
              <img src="../IMG/testing.png" alt="">
              <P>Emploi du temps</P>
            </a>
            <a href="../PHP/Deconnexion.php" class="sub-menu-link">
              <img src="../IMG/logout.png" style="padding : 0px 0px 0px 4px; width : 26px" alt="">
              <P>D&eacute;connexion</P>
            </a>
          </div>
        </div>
      </div>
    </header>
    <div class="Container">';
    $query = "SELECT nom_document FROM document WHERE id_document=1 ";
    $cour1 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=2 ";
    $cour2 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=3 ";
    $cour3 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=4 ";
    $cour4 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=5 ";
    $cour5 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=6 ";
    $cour6 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=7 ";
    $cour7 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=8 ";
    $cour8 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=9 ";
    $cour9 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=10 ";
    $cour10 = mysqli_fetch_row(mysqli_query($connect,$query));
    $query = "SELECT nom_document FROM document WHERE id_document=11 ";
    $cour11 = mysqli_fetch_row(mysqli_query($connect,$query));
        echo'
      <div class="Lesson">
        <div class="Ltitle">
          <img src ="../IMG/road.png"><span>Cours : Signalisation Verticale<span>
        </div>
        <UL class="av">
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=1">'.$cour1[0].'</a></LI>
            <td> <button id="aaa" value="Modifier"><a href="#popup11" ><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <LI>
            
            <div id="popup11" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour1[0].' ><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </div>
     
          </LI>
          
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=2">'.$cour2[0].'</a></LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup10"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <LI>
           
            <div id="popup10" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour2[0].' ><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic1" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic1" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
             </div>     
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=3">'.$cour3[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup9"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup9" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour3[0].'><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic2" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic2" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
              </div>    
                 
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=4">'.$cour4[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup8" ><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup8" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour4[0].' ><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic3" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic3" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=5">'.$cour5[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup7" ><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup7" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour5[0].' ><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic4" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic4" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=6">'.$cour6[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a href="#popup6"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup6" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour6[0].'><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic5" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic5" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </div>
          </LI>
        
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=7">'.$cour7[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup5"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup5" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours</label>
            <input type="text" name="nom_cours" value='.$cour7[0].'><br>
            <br><label>Contenu de cours</label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic6" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic6" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=8">'.$cour8[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup4"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup4" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours<label>
            <input type="text" name="nom_cours" value='.$cour8[0].' ><br>
            <br><label>Contenu de cours<label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic7" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="SubPic7" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
            <!--form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="SubmitPic7" class="submitPic"  value="Changer" style="width:100px;">
          </form--></LI>
          </div>
        </UL>
      </div>
      <div class="Lesson">
        <div class="Ltitle">
          <img src ="../IMG/quiz.png"><span>Questionnaires<span>
        </div>
        <UL class="av">
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=9">'.$cour9[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a href="#popup3"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup3" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours<label>
            <input type="text" name="nom_cours" value="'.$cour9[0].'" ><br>
            <br><label>Contenu de cours<label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="Submitq" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="Subq" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
            <!--form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
              <input type="file" name="photo" id="photo" ACCEPT="document/*">
              <input type="submit" name="Subq" class="submitPic"  value="Changer" style="width:100px;">
            </form-->
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=10">'.$cour10[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a href="#popup2"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup2" class="overlay1">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
            <label>Nom de cours<label>
            <input type="text" name="nom_cours" value='.$cour10[0].' ><br>
            <br><label>Contenu de cours<label>
            <input type="file" name="photo" id="photo" ACCEPT="document/*">
            <input type="submit" name="Subq1" class="submitPic"  value="Changer" style="width:100px;"><br>
            <br>
            <input type="submit" name="Subq1" class="submitPic"  value="envoyer" style="width:120px;">
          
             </form>
                  
          </div>
          </LI>
          </div>
          <div class="chapter">
            <img src ="../IMG/lesson.png">
            <LI><a href="../PHP/download.php?id=11">'.$cour11[0].'</a></LI>
            <LI>
            <td> <button id="aaa" value="Modifier"><a  href="#popup1"><image class="image_delete" src="../administrateur/image/crayon.png" ></a></buttom></td>
            <div id="popup1" class="overlay1">
	<div class="popup">
  <a class="close" href="#">&times;</a>
  <form name="fichier" ACTION="CoursQest.php" method="post" enctype="multipart/form-data">
  <label>Nom de cours<label>
  <input type="text" name="nom_cours" value='.$cour11[0].' ><br>
  <br><label>Contenu de cours<label>
  <input type="file" name="photo" id="photo" ACCEPT="document/*">
  <input type="submit" name="Subq2" class="submitPic"  value="Changer" style="width:100px;"><br>
  <br>
  <input type="submit" name="Subq2" class="submitPic"  value="envoyer" style="width:120px;">

   </form>
    		
</div>
          </LI>
          </div>
        </UL>
      </div>';
      echo'
    </div>
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
            <LI><A HREF="../Accueil/A-propos.php">A Propos de nous</A></LI>
            <LI><A HREF="../Accueil/Contactez-nous.php">Envoyer un message</A></LI>
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
if(isset($_POST["SubmitPic"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=1";
  $result= mysqli_query($connect,$query);
  echo '
    <SCRIPT>
      document.getElementById("ImgProfile").src="../IMG/'.$_FILES["photo"]["name"].'";
    </SCRIPT>
  ';
}
if(isset($_POST["SubmitPic"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=1";
  $result= mysqli_query($connect,$query);
 
}if(isset($_POST["SubmitPic1"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=2";
  $result= mysqli_query($connect,$query);
 
}if(isset($_POST["SubmitPic2"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=3";
  $result= mysqli_query($connect,$query);
  
}if(isset($_POST["SubmitPic3"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=4";
  $result= mysqli_query($connect,$query);

}if(isset($_POST["SubmitPic4"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=5";
  $result= mysqli_query($connect,$query);
 
}if(isset($_POST["SubmitPic5"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=6";
  $result= mysqli_query($connect,$query);
 
}if(isset($_POST["SubmitPic6"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=7";
  $result= mysqli_query($connect,$query);

}
if(isset($_POST["SubmitPic7"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=8";
  $result= mysqli_query($connect,$query);

}
if(isset($_POST["Submitq"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=9";
  $result= mysqli_query($connect,$query);

}if(isset($_POST["Submitq1"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=10";
  $result= mysqli_query($connect,$query);

}if(isset($_POST["Submitq2"])){
  $fichier=$_FILES['photo'];
  if($fichier['error']==0){
    $src=$fichier['tmp_name'];
    $dest="../Document/".$fichier['name'];
    move_uploaded_file($src,$dest);
  }
  $query = "UPDATE document SET url_document='../Document/".$_FILES["photo"]["name"]."' WHERE id_document=11";
  $result= mysqli_query($connect,$query);

}
if(isset($_POST["SubPic"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 1";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
      alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic1"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 2";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic2"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 3";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic3"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 4";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic4"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 5";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic5"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 6";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic6"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 7";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["SubPic7"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 8";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["Subq"])){
  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 9";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["Subq1"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 10";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}
if(isset($_POST["Subq2"])){

  $name=$_POST['nom_cours'];
  $query = "UPDATE document SET nom_document='$name' WHERE id_document like 11";
  if($result= mysqli_query($connect,$query)){
   
     echo '<script>
     alert("changement avec succee");
      document.location = "./CoursQest.php" ;
    </script>';
  }

}

?>