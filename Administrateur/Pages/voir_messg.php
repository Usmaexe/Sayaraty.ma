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
        <link rel="stylesheet" href="../../CSS/style-modifier.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <link href="//db.onlinewebfonts.com/c/9563028603929a5ec058577b3fb5520a?family=Whipsmart" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/55d433372d270829c51e2577a78ef12d?family=Monument+Extended" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
        <style>
            a{
                color: #fff;
                text-decoration: none;
            }
             Button{
    width: 190px;
    height: 40px;
    color: #fff;
    border-radius: 25px;
    font:500 18px 'Roboto';
    position: relative; /* to let the transition appear in the box only  */
    cursor: pointer;
    box-shadow:inset 1px 1px 6px 0px rgb(181, 207, 250,.6),
    1px 7px 20px 0px rgba(0,0,0,.1),
    1px 4px 5px 0px rgba(0,0,0,.1);
    background: linear-gradient(0deg, rgb(61, 122, 254) 0%,#3D56AD 100%);
    transition: all 250ms ease;
  }
button:hover{
    cursor: pointer;
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
  }
        </style>
       <script defer src="script.js"></script>

   </head>
   <body class="flex-container" class="flex-item">
   <?PHP 
     require("../../PHP/Connexion_BD.php");  
    session_start();
    $id=$_GET['deleteid'];
$nbr_condidat = mysqli_query($connect,"SELECT COUNT(*) FROM candidat");
$nbr_condidat = mysqli_fetch_row($nbr_condidat); 
$nbr_condidat = implode("", $nbr_condidat); 

$query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));
$quer = "SELECT * FROM message WHERE id_message='$id'";
$li = mysqli_fetch_row(mysqli_query($connect,$quer));
 
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
                   <a href="examen.php"><span class="">Examens</span></a>
                  </li>   
                    <li>
                    <a href="message.php" class="active" ><span class="">Messages</span></a>
                   </li>
                  <li>
                   <a href="#" ><span class="">Profil</span></a>
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
          ';
         
          echo '
          <div class="leftContainer">     
            <form name="formulaire" class="formulaire" method="post">
              <div class="nom_email">
                <div class="block">
                <label>Nom : </label>  
                <span type="text1" id="nom" ><p>'.$li[1].'</p> </span>  
                </div> 
              </div>
              <div class="secondBlock">
              <div class="block">
                  <label>Email : </label><span type="text1" id="nom" ><p>'.$li[3].'</p> </span>    
                 </div>
              </div>
              <div class="secondBlock">
                
                <div class="block">
                <label>Objet : </label><span type="text1" id="nom" ><p>'.$li[4].'</p></span>                   
                </div>
                <div class="second">
                                              
                </div>
              </div>
              <div class="thirdBlock">
                <div class="first">
                  <label>Message</label>
              
                  <TEXTAREA id="text" ROWS="5" COLS="70" name="num_tel" id="kbr" class="name-style" READONLY >'.$li[2].'</TEXTAREA>  
                </div>
              </div>
              
              <div class="submit1">
              <button class="submit"><a href="message.php">Retour</a></button>
              </div>
            </form>
          </div>
         
        </div>
        </main>';
        
?>