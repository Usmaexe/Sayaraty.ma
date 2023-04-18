<?PHP
require("../../PHP/Connexion_BD.php");
session_start();
$id=$_GET['up'];

$res="SELECT * from seance where id_seance=$id"; 
$requete = mysqli_query( $connect ,$res);
$row = mysqli_fetch_assoc($requete);  
$a=$row['id_candidat'];
    if(isset($_POST['submit']))
    {
      $insert = true;
      $exist=false;
    $nommon = $_POST["moniteur"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $ve=$_POST["voiture"];
    
    if(date('Y-m-d', strtotime(date('m/d/Y') . " + " . 0 . " days"))>$_POST["date"]){
      $error="Date";
      $insert=false;
    }
    if(!$insert){
      echo '
      <SCRIPT>
        alert("'.$error.' Incorrecte");
        document.formulaire.date_examen.value="'.$_POST["date"].'";
      </SCRIPT>
      ';
    }else if(!$exist){
      $req= "UPDATE  seance  SET id_moniteur='$nommon' ,Heure='$time',Date='$date', id_vehicule='$ve' where id_seance=$id";
      $requete = mysqli_query( $connect ,$req);
      if($requete){
        echo '<script>
        alert("Modifications avec succees");
        document.location = "../Pages/seance.php";
        </script>';
          
        
      }else{
          echo 'ajouter avec succes';
      }
    }
    }
    $requete = mysqli_query( $connect , "SELECT Nom FROM candidat where login_candidat='$a'");#
    $rae= mysqli_fetch_assoc($requete);  
    $requete_m = mysqli_query( $connect , "SELECT Login_moniteur , Nom FROM moniteur ");
    $requete_v = mysqli_query( $connect , "SELECT Num_matricule FROM vehicule");
 echo '   

<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Sayaraty - Ajouter Candidat </title>
      <link rel="icon" href="../../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../CSS/Style_add_seance.css">
      <script defer src="script.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">

      <style>
     
    
   .form-group .img44{
    width: 23px;
    top: 12px;
    left: 320px;
  }
  .form-group .img45{
    width: 23px;
    top: 12px;
    left: 140px;
  }
          .llogin-style{
    padding: 13px 20px;
    padding-left: 55px;
    margin-left: 125px;
    height: 48px;
    width: 50%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.5px;
    outline: none;
    color: #ffffff;
    background-color: rgb(0 123 255 / 24%);
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
  }
      </style>    
    </head>
    <body>
      <div class="conta">
        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <a class="image" href="../index.php"><img src="../../IMG/SAYARATY_w.png" class="Sayaraty"></a>
              <!--h6 class="mb-0 pb-3"><span>Connexion</span><span>Inscription</span></h6-->
                
                  <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                      <div class="card-3d-wrapper">
                        <form class="card-front" name="Connexion" method="post">
                        <div class="center-wrap">
                                <div class="section text-center">
                                  <h4 class="ins mb-4 pb-3">Modifier sceance</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <span  class="name-style" >choisissez Candidat</span>
                                    <label for="select-area">select</label>
                                    <input type="text" name="Permis" class="login-style" value="'.$rae['Nom'].'" autocomplete="off" required>
                                 </div>	
                                 
                          
                                 <div class="form-group mt-2">
                                 <img src="../../IMG/user.png">
                                 <span  class="name-style" >choisissez Moniteur</span>
                                 <label for="select-area">select</label>
                                 <select name="moniteur" id="select-area" class="sexe">';
                                 while($moni = mysqli_fetch_assoc($requete_m)) { 
                                  echo '
                                   <option class="sexe" value="'.$moni["Login_moniteur"].'">'.$moni["Nom"].'</option>
                                   ';} 
                                   echo '
                                 </select>
                              </div>	
                                  <div class="form-group mt-2">
                                  <img src="../../IMG/user.png">
                                  <span  class="name-style" >choisissez Voiture</span>
                                  <label for="select-area">select</label>
                                  <select name="voiture" id="select-area" class="sexe">';
                                  while($voi = mysqli_fetch_assoc($requete_v)) { 
                                   echo '
                                    <option class="sexe" value="'.$voi["Num_matricule"].'">'.$voi["Num_matricule"].'</option>
                                    ';} 
                                    echo '
                                  </select>
                               </div>                               
                               <div class="form-group mt-2">
                               <img src="../../IMG/user.png">
                               <span  class="name-style" >choisissez Heur</span>
                               
                               <input type="text" name="time" class="login-style" value="'.$row['Heure'].'" autocomplete="off" required>
                               
                            </div>	
                            <div class="form-group mt-2">
                               <img src="../../IMG/user.png">
                               <span  class="name-style" >choisissez La date </span>
                               <input type="date" name="date" class="login-style" value="'.$row['Date'].'" autocomplete="off" required>
                               
                            </div>
                        </div>
                                  
                                 
                                  
                                  <input type="submit" name="submit" value="Modifier" class="btn mt-4">
                                </div>
                              </div>
                            </div>
                        </form>
                      </div>
              </div>
            </form>
          </div>
        </div>
    </body>
</html>';
?>