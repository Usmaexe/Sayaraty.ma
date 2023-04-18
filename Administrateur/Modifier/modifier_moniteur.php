<?PHP
require("../../PHP/Connexion_BD.php");
session_start();
$id=$_GET['up'];


$res=" SELECT * FROM  moniteur where Login_moniteur='$id'  ";
$requete = mysqli_query( $connect ,$res);
$row = mysqli_fetch_assoc($requete);
if(isset($_POST["submit-button2"])){
    $nom = $_POST["name"];
$pass = $_POST["logpass"];
$gender = $_POST["sexe"];
$email = $_POST["email"];
$tele = $_POST["num_tel"];
$Cin = $_POST["num_cin"];
$lic = $_POST["Permis"];
  $insert = true;$error;
  if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$_POST["email"])){     
    $error="email";
    $insert=false;
  }
  if(!preg_match("#^[A-z\ ]+#",$_POST["name"])){
    $error="name";
    $insert=false;
  }
  if(!preg_match("#^\w{1,2}\d{4,6}#",$_POST["num_cin"])){
    $error="Numéro carte national";
    $insert=false;
  }
  if(!preg_match("#^(0|\+\d{1,3}-)\d{9}#",$_POST["num_tel"])){
    $error="Numéro télephone";
    $insert=false;
  }
  if($insert){
 
          if($_POST["logpass"]==""){
            $query="SELECT Password FROM moniteur WHERE Login_moniteur='$id'    ";
            $result=mysqli_fetch_row(mysqli_query($connect,$query));
            $_POST["logpass"]=$result[0];
          }
           $quer = "UPDATE  moniteur  SET 
          Nom='$nom', 
          Password='".password_hash($_POST["logpass"], PASSWORD_DEFAULT)."',
          Email_moniteur='$email' ,
          Sexe_moniteur='$gender' ,
          Num_CIN_moniteur='$Cin' ,
          Num_telephone_moniteur='$tele',
          num_permis='$lic'
           where Login_moniteur='$id' ";
         if( mysqli_query($connect,$quer))  
          {
            echo '<script>
              alert("Vous avez Modifier '.$row['Nom'].' par succées! ");
              document.location = "../pages/moniteur.php";
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
    
}

echo '
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Sayaraty - Ajouter Candidat </title>
      <link rel="icon" href="../../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../CSS/style-add-candidat.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
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
                                  <h4 class="ins mb-4 pb-3">Modifier '.$row['Nom'].'</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <input type="text" name="name" class="name-style" value="'.$row['Nom'].'"  autocomplete="off" required>
                                    <img class="img2" src="../../IMG/key.png">
                                    <input type="text" name="login" class="login-style" value="'.$row['Login_moniteur'].'" READONLY  required>
                                  </div>	
                                  <div class="form-group mt-2">
                                    <!-- mt-2 stands to margin-top is a defined class -->
                                    <img class="img3" src="../../IMG/gender.png">
                                    <label for="select-area">select</label>
                                    <select name="sexe" id="select-area" class="sexe">
                                      <option class="sexe" name="Homme" value="Homme">Homme</option>
                                      <option class="sexe" name="Femme" value="Femme">Femme</option>
                                    </select>
                                    <img class="imgl" src="../../IMG/licence.png"/>
                                    <input type="text" name="Permis" class="login-style" value="'.$row['num_permis'].'" autocomplete="off" required>
                                  
                                  </div>
                                 
                                  <div class="form-group mt-2">
                                    <img class="img5" src="../../IMG/id-card.png">
                                    <input type="text" name="num_cin" class="name-style" value="'.$row['Num_CIN_moniteur'].'"  autocomplete="off" required>
                                    <img class="img6" src="../../IMG/phone-call.png">
                                    <input type="text" name="num_tel" class="login-style" value="'.$row['Num_telephone_moniteur'].'" autocomplete="off" required>
                                  </div>
                                  <div class="form-group mt-2"> 
                                    <img src="../../IMG/email.png"/>
                                    <input type="email" name="email" class="form-style" value="'.$row['Email_moniteur'].'" autocomplete="off" required>
                                  </div>
                                  	
                                  
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/padlock.png"/>
                                    <input type="password" name="logpass" class="form-style" placeholder="Nouveau Mot de passe" autocomplete="off" >
                                  </div>
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/padlock.png"/>
                                    <input type="password" name="logpassConfirm" class="form-style" placeholder="Confirmer le mot de passe" autocomplete="off">
                                  </div>
                                  
                                 
                                  
                                  <input type="submit" name="submit-button2" value="Modifier" class="btn mt-4">
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
</html>'?>