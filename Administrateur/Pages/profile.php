<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/Style_condidat.css">
       <link rel="stylesheet" href="../styles/Style_profile.css">


        <link rel="stylesheet" href="../../CSS/Style_modif_profile.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
  
       <script defer src="script.js"></script>

   </head>
   <body class="flex-container" class="flex-item">
   <?PHP 
     require("../../PHP/Connexion_BD.php");  
    session_start();
$nbr_condidat = mysqli_query($connect,"SELECT COUNT(*) FROM candidat");
$nbr_condidat = mysqli_fetch_row($nbr_condidat); 
$nbr_condidat = implode("", $nbr_condidat); 

$query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));
 
   echo '  <div class="sidebar">
            <div class="brand">
            <a href="../"><img src="../image/SAYARATY_LOGO.png"><a>
            </div>
            <div class="menu">
                <ul>
                   <li>
                    <a href="../index.php" ><span class="dash">Accueil</span></a>
                   </li>
                   <li>
                    <a href="candidat.php" ><span class="condidats">Candidats</span></a>
                   </li>
                   <li>
                    <a  href="moniteur.php"><span class="moniteur"> Moniteurs </span></a>
                   </li>
                   <li>
                    <a href="vehicule.php"><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="Seance.php" ><span class="">Seances</span></a>
                   </li>
                    <li>
                    <a href="message.php"><span class="">Messages</span></a>
                   </li>
                   
                   <li>
                   <a href="Avis.php"><span class="">Avis</span></a>
                  </li>
                  <li>
                   <a href="#" class="active"><span class="">Profil</span></a>
                  </li>
                    

                
                </ul>
            </div>
      </div>
      <div class="main_cont">
        <header>
             <h2 >
                <label for="">
                    <span  class="hello"></span>
                </label>

                
             </h2>
             
             <div class="condidat">
                <!-- span onclick()=affiche() class=""-->
                <img id="hi" src="'.$ligne[6].'" onclick="toggle" width="30px" height="30px"  alt="">
                <div >
                    <h4 id="Menu">'.$_SESSION["login"].'</h4>
                    <small>Admin</small></a>
                    
                </div>
                <a href="../../PHP/Deconnexion.php">
             <img id="hiii" src="../image/loging out.png" width="25px" height="25px">
             </a>
    </div>
    </header>
    <main>

<div class="Container">
          <div class="rightContainer">
            <label class="picTitle">Photo De profil</label>
            <span class="subTitle">
              Avec une photo à jour, votre identifiera plus facilement sur le site.
            </span>
            <div class="image">
              <img id="ImgProfile" src="'.$ligne[6].'" alt>
            </div>
            <form name="fichier" ACTION="Profile.php" method="post" enctype="multipart/form-data">
              <input type="file" name="photo" id="photo" ACCEPT="image/*">
              <input type="submit" name="SubmitPic" class="submitPic"  value="Changer" style="width:100px;">
            </form>
          </div>';
         
          echo '
          <div class="leftContainer">     
            <form name="formulaire" class="formulaire" method="post">
              <div class="nom_email">
                <div class="block">
                  <label>Nom</label><input type="text" id="name" name="nom" value="'.$ligne[1].'"required>
                </div>
                <div class="block">
                  <label>Login</label><input type="text" id="mail" name="login" value="'.$_SESSION["login"].'" READONLY required>
                </div>
              </div>
              <div class="secondBlock">
                
                <div class="second">
                <label>Numéro de télephone</label>
                  <input type="text" name="num_tel" class="login-style" value="'.$ligne[4].'" autocomplete="off" required>                    
                </div>
                <div class="second">
                                              
                </div>
              </div>
              <div class="thirdBlock">
                <div class="first">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="name-style" value="'.$ligne[5].'" autocomplete="off" required>  
                </div>
              </div>
              <div class="forthBlock">
                <div class="first">
                  <label>Email</label>
                  <input type="text" name="email" class="name-style" value="'.$ligne[3].'" autocomplete="off" required>  
                </div>
                <div class="second">
                  <label>Mot de passe</label>
                  <input type="password" name="password" class="login-style" autocomplete="off" >                 
                </div>
                <div class="third">
                  <label>Confirmer</label>
                  <input type="password" name="Cpassword" class="login-style"  autocomplete="off" >                 
                </div>
              </div>
              <div class="submit">
                <input name="submit-button" type="submit" value="Envoyer">
              </div>
            </form>
          </div>
         
        </div>
        </main>';
        if(isset($_POST["SubmitPic"])){
          $fichier=$_FILES['photo'];
          if($fichier['error']==0){
            $src=$fichier['tmp_name'];
            $dest="../../IMG/".$fichier['name'];
            move_uploaded_file($src,$dest);
          }
          $query = "UPDATE administrateur SET Photo_admin='../../IMG/".$_FILES["photo"]["name"]."' WHERE Login_admin='".$_SESSION["login"]."'";
          $result= mysqli_query($connect,$query);
          echo '
            <SCRIPT>
              document.getElementById("ImgProfile").src="../../IMG/'.$_FILES["photo"]["name"].'";
            </SCRIPT>
          ';
        }
        
  if(isset($_POST["submit-button"])){
      $update = true;$error;
      if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$_POST["email"])){     
        $error="email";
        $update=false;
      }
      if(!preg_match("#^[A-z\ ]+#",$_POST["nom"])){
        $error="nom";
        $update=false;
      }
      if(!preg_match("#^(0|\+\d{1,3}-)\d{9}#",$_POST["num_tel"])){
        $error="Numéro télephone";
        $update=false;
      }
      
      
    if($update){
      if($_POST["password"]==""){
        $query="SELECT Password FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
        $result=mysqli_fetch_row(mysqli_query($connect,$query));
        $_POST["password"]=$result[0];
      }
      $query = "UPDATE administrateur SET Password='".password_hash($_POST["password"], PASSWORD_DEFAULT)."',Nom='".$_POST["nom"]."',
      Email='".$_POST["email"]."',Num_telephone_admin='".$_POST["num_tel"]."'
      , Adresse='".$_POST["adresse"]."' WHERE Login_admin='".$_SESSION["login"]."'";
    
      if( mysqli_query($connect,$query))  
          {
            echo '<script>
              document.formulaire.innerHTML="<p style=\"color:green; font-size:16px;\">Vous avez Modifier '.$_SESSION["login"].' par succées! </p>"+document.formulaire.innerHTML;
              </script>
          ';
          }
    }
    else{
      echo '
        <SCRIPT>
          alert("'.$error.' Incorrecte!");
        </SCRIPT>
      ';
    } 
    echo '
    <SCRIPT>
    document.location="profile.php" ;
    </SCRIPT>
  ';
  }
  if(isset($_POST["SubmitPic"])){
    $query = "UPDATE CANDIDAT SET PHOTO='../IMG/".$_POST["Photo"]."' WHERE Login_candidat='".$_SESSION["login"]."'";
    $result= mysqli_query($connect,$query);
    echo '
      <SCRIPT>
      alert("Vous avez Modifier l\image de  '.$_SESSION["login"].' par succées! ");
        document.getElementById("ImgProfile").src="../IMG/'.$_POST["Photo"].'";
      </SCRIPT>
    ';
  }

 
?>