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
        <link rel="icon" href="../IMG/SAYARATY_Icon.png">
        <link rel="stylesheet" href="../CSS/style-index.css">
        <link rel="stylesheet" href="../CSS/style-candidat.css">
        <link rel="stylesheet" href="../CSS/style-contacter.css">
        <link rel="stylesheet" href="../CSS/style-modifier.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
      
      </HEAD>
      <BODY>';
        include("CandidatHeader.php");
        echo'
        <div class="Title">
          <h1 class="TheHeader">Modifier votre profil</h1>
          <p class="Sentence" style="text-transform:none;width:510px;">Vous pouvez changer votre information et votre photo à tout temps,<br> Mais vous pouvez pas changer votre login!</p>
        </div>
        <div class="Container">
          <div class="rightContainer">
            <label class="picTitle">Photo De profil</label>
            <span class="subTitle">
              Avec une photo à jour, votre identifiera plus facilement sur le site.
            </span>
            <div class="image">
              <img id="ImgProfile" src="'.$ligne[0].'" alt>
            </div>
            <form name="fichier" ACTION="ModifierProfile.php" method="post" enctype="multipart/form-data">
              <input type="file" name="photo" id="photo" ACCEPT="image/*">
              <input type="submit" name="SubmitPic" class="submitPic"  value="Changer" style="width:100px;">
            </form>
          </div>';
          $query = "SELECT * FROM Candidat WHERE Login_candidat='".$_SESSION["login"]."'";
          $ligne = mysqli_fetch_row(mysqli_query($connect,$query)); 
          echo '
          <div class="leftContainer">     
            <form name="formulaire" class="formulaire" method="post">
              <div class="nom_email">
                <div class="block">
                 <label>Nom</label><input type="text" id="name" name="nom" value="'.$ligne[2].'"><span style="margin-top:8px;color:red" name="snom"></span>
               
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
                  </select><span style="margin-top:8px;color:red" name="ssexe"></span>
                </div>
                <div class="second">
                  <label>Date de naissance</label>
                  <input type="date" name="date_naissance" class="login-style" value="'.$ligne[7].'" autocomplete="off" required><span style="margin-top:8px;color:red" name="sdate_naissance"></span>                
                </div>
                <div class="third">
                  <label>Numéro de télephone</label>
                  <input type="text" name="num_tel" class="name-style" value="'.$ligne[5].'" autocomplete="off" required><span style="margin-top:8px;color:red" name="snum_tel"></span>                                
                </div>
              </div>
              <div class="thirdBlock">
                <div class="first">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="name-style" value="'.$ligne[13].'" autocomplete="off" required><span style="margin-top:8px;color:red" name="sadresse"></span>  
                </div>
                <div class="second">
                  <label>Numèro Carte National</label>
                  <input type="text" name="num_cin" class="login-style" value="'.$ligne[6].'" autocomplete="off" required><span style="margin-top:8px;color:red" name="snum_cin"></span>                 
                </div>
              </div>
              <div class="forthBlock">
                <div class="first">
                  <label>Email</label>
                  <input type="text" name="email" class="name-style" value="'.$ligne[3].'" autocomplete="off" required><span style="margin-top:8px;color:red" name="semail"></span>     
                </div>
                <div class="second">
                  <label>Nouveau mot de passe</label>
                  <input type="password" name="password" class="login-style" autocomplete="off"><span style="margin-top:8px;color:red" name="spassword"></span>                  
                </div>
                <div class="third">
                  <label>Confirmer mot de passe</label>
                  <input type="password" name="Cpassword" class="login-style" autocomplete="off">                 
                </div>
              </div>
              <div class="submit">
                <input name="submit-button" type="submit" value="Envoyer">
              </div>
            </form>
          </div>
        </div>';
          include("CandidatFooter.php");
        echo'
    </HTML> 
    
  ';
  if(isset($_POST["submit-button"])){
      $update = true;$error=[];
      $dte = new DateTime($_POST["date_naissance"]);
      $today = new DateTime();
      $age = $today->diff($dte)->y;
      if($age<18){
        array_push($error,"date_naissance");
        $update=false;
      }
      if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$_POST["email"])){     
        array_push($error,"email");
        $update=false;
      }
      if(!preg_match("#^[A-z\ ]+#",$_POST["nom"])){
        array_push($error,"nom");
        $update=false;
      }
      if(!preg_match("#^\w{1,2}\d{4,6}#",$_POST["num_cin"])){
        array_push($error,"num_cin");
        $update=false;
      }
      if(!preg_match("#^(0|\+\d{1,3}-)\d{9}#",$_POST["num_tel"])){
        array_push($error,"num_tel");
        $update=false;
      }
      if($_POST["Cpassword"]!=$_POST["password"]){
        array_push($error,"password");
        $update=false;
      }
      
    if($update){
      if($_POST["password"]==""){
        $query="SELECT PASSWORD FROM CANDIDAT WHERE LOGIN_CANDIDAT='".$_SESSION["login"]."'";
        $result=mysqli_fetch_row(mysqli_query($connect,$query));
        $_POST["password"]=$result[0];
      }
      else{
        $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);
      }
      $query = "UPDATE CANDIDAT SET Password='".$_POST["password"]."',Nom='".$_POST["nom"]."',
      Email_candidat='".$_POST["email"]."',Sexe_candidat='".$_POST["sexe"]."',Num_telephone='".$_POST["num_tel"]."',
      Num_CIN_candidat='".$_POST["num_cin"]."',Date_de_naissance='".$_POST["date_naissance"]."'
      ,Adresse='".$_POST["adresse"]."' WHERE Login_candidat='".$_SESSION["login"]."'";
      $result=mysqli_query($connect,$query); 
      echo "
        <SCRIPT>
          document.formulaire.innerHTML='<span style=\"color:green\">Vos modifications sont enregistrées avec succès !</span>'+document.formulaire.innerHTML;
          document.formulaire.nom.value='".$_POST["nom"]."';
          document.formulaire.date_naissance.value='".$_POST["date_naissance"]."';
          document.formulaire.num_tel.value='".$_POST["num_tel"]."';
          document.formulaire.num_cin.value='".$_POST["num_cin"]."';
          document.formulaire.adresse.value='".$_POST["adresse"]."';
          document.formulaire.email.value='".$_POST["email"]."';           
          let option = '".$_POST["sexe"]."';
          document.formulaire.sexe.options.namedItem(option).selected = true;
          console.log('".$_POST["nom"]."');
        </SCRIPT>
      ";
    }
    else{
      echo "
        <SCRIPT>
          document.formulaire.nom.value='".$_POST["nom"]."';
          document.formulaire.date_naissance.value='".$_POST["date_naissance"]."';
          document.formulaire.num_tel.value='".$_POST["num_tel"]."';
          document.formulaire.num_cin.value='".$_POST["num_cin"]."';
          document.formulaire.adresse.value='".$_POST["adresse"]."';
          document.formulaire.email.value='".$_POST["email"]."';           
          let option = '".$_POST["sexe"]."';
          document.formulaire.sexe.options.namedItem(option).selected = true;
          let element;";
      for($i = 0 ; $i < sizeof($error) ; $i++){
        echo'
            document.formulaire.'.$error[$i].'.style.border="1px solid red";
            document.formulaire.'.$error[$i].'.style.backgroundColor="#ffd0d0";
            element = document.getElementsByName("s'.$error[$i].'");
            element[0].innerHTML="Valeur invalide";
        ';
      }
      echo'
        </SCRIPT>
      ';
    }  
  }
  if(isset($_POST["SubmitPic"])){
    $fichier=$_FILES['photo'];
    if($fichier['error']==0){
      $src=$fichier['tmp_name'];
      $dest="../IMG/".$fichier['name'];
      move_uploaded_file($src,$dest);
    }
    $query = "UPDATE CANDIDAT SET PHOTO='../IMG/".$_FILES["photo"]["name"]."' WHERE Login_candidat='".$_SESSION["login"]."'";
    $result= mysqli_query($connect,$query);
    echo '
      <SCRIPT>
        document.getElementById("ImgProfile").src="../IMG/'.$_FILES["photo"]["name"].'";
      </SCRIPT>
    ';
  }
  
?>