<?PHP
require("../../PHP/Connexion_BD.php");
session_start();

?>
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Sayaraty - Ajouter Candidat </title>
      <link rel="icon" href="../../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../CSS/style-add-candidat1.css">
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
                        <form class="card-front" name="Inscription" method="post">
                        <div class="center-wrap">
                                <div class="section text-center">
                                  <h4 class="ins mb-4 pb-3">Ajouter Candidat</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <input type="text" name="name" class="name-style" placeholder="Nom complet"  autocomplete="off" required>
                                    <img class="img2" src="../../IMG/key.png">
                                    <input type="text" name="login" class="login-style" placeholder="login" autocomplete="off" required>
                                  </div>	
                                  <div class="form-group mt-2">
                                    <!-- mt-2 stands to margin-top is a defined class -->
                                    <img class="img3" src="../../IMG/gender.png">
                                    <label for="select-area">select</label>
                                    <select name="sexe" id="select-area" class="sexe">
                                      <option class="sexe" name="Homme" value="Homme">Homme</option>
                                      <option class="sexe" name="Femme" value="Femme">Femme</option>
                                    </select>
                                    <img class="img4" src="../../IMG/calendarW.png">
                                    <input type="date" name="date_naissance" class="login-style" placeholder="login" autocomplete="off" required>
                                  </div>	
                                  <div class="form-group mt-2">
                                    <img class="img5" src="../../IMG/id-card.png">
                                    <input type="text" name="num_cin" class="name-style" placeholder="Numèro CIN"  autocomplete="off" required>
                                    <img class="img6" src="../../IMG/phone-call.png">
                                    <input type="text" name="num_tel" class="login-style" placeholder="Numèro Telephone" autocomplete="off" required>
                                  </div>
                                  </div>
                                  <div class="form-group mt-2">
                                  <img class="img7" src="../../IMG/clock.png">
                                  <input type="text" name="nbr_hr" class="name-style" placeholder="Nombre d'heure"  autocomplete="off" required>
                                  <img class="img8" src="../../IMG/cash.png">
                                  <input type="text" name="prix" class="login-style"  placeholder="Prix Payéer" autocomplete="off" required>
                                </div>
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/map.png"/>
                                    <input type="Text" name="Adresse" class="form-style" placeholder="Votre Adresse" autocomplete="off" required>
                                  </div>
                                  <div class="form-group mt-2"> 
                                    <img src="../../IMG/email.png"/>
                                    <input type="email" name="email" class="form-style" placeholder="Email" autocomplete="off" required>
                                  </div>	
                                  
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/padlock.png"/>
                                    <input type="password" name="logpass" class="form-style" placeholder="Mot de passe" autocomplete="off" required>
                                  </div>
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/padlock.png"/>
                                    <input type="password" name="logpassConfirm" class="form-style" placeholder="Confirmer le mot de passe" autocomplete="off" required>
                                  </div>
                                  
                                 
                                  
                                  <input type="submit" name="submit-button2" value="Ajouter" class="btn mt-4">
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
</html>
<?php


if(isset($_POST["submit-button2"])){
  $insert = true;$error;
  if (!preg_match("#^\d+$#", $_POST["prix"])) {
    $error="Prix Payéer";
    $insert=false;
  }
  if (!preg_match("#^\d+$#", $_POST["nbr_hr"])) {
    $error="Nombre d'heures";
    $insert=false;
  }
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
  }if ($_POST["prix"]>0){
    $statut=1;
  }else{
    $statut=0;
  }
  if($insert){
   
        $query = "SELECT login_candidat,email_candidat FROM candidat";$exist=false;
        if($result=mysqli_query($connect,$query)){
          while($ligne=mysqli_fetch_row($result)){
            if($ligne[0]==$_POST["login"]||$ligne[1]==$_POST["email"]){
              $exist=true;
              break;
            }
          }
        }
        if(!$exist){
          
          $query = "INSERT INTO CANDIDAT VALUES ('".$_POST["login"]."',
          '".password_hash($_POST["logpass"], PASSWORD_DEFAULT)."','".$_POST["name"]."',
          '".$_POST["email"]."','".$_POST["sexe"]."',
          '".$_POST["num_tel"]."','".$_POST["num_cin"]."',
          '".$_POST["date_naissance"]."','".date('Y-m-d')."',
          '".$_POST["prix"]."','".$_POST["nbr_hr"]."',$statut,'../IMG/image.png',' ".$_POST["Adresse"]."')";
          mysqli_query($connect,$query);  
          echo '
            <script>
              alert("Vous avez ajouter un nouveau candidat par succées! ");
              document.location = "../Pages/candidat.php" ;
            </script>
          ';
          
        }
        else{
          echo '
            <script>
              if(!(performance.navigation.type==1)){
                alert("Login déja existe");
              }
              document.Inscription.login.value = "'.$_POST["login"].'";
              document.Inscription.email.value = "'.$_POST["email"].'";
              document.Inscription.name.value = "'.$_POST["name"].'";
              document.Inscription.num_cin.value = "'.$_POST["num_cin"].'";
              document.Inscription.num_tel.value = "'.$_POST["num_tel"].'";
              document.Inscription.Adresse.value = "'.$_POST["Adresse"].'";
              let option = "'.$_POST["sexe"].'";
              document.Inscription.sexe.options.namedItem(option).selected = true;
              let option = "'.$_POST["date_naissance"].'";
              document.Inscription.date_naissance.value = date;
              let rot = document.getElementsByName("reg-log");
              rot[0].checked=true;
            </script>
          ';
        }
      }else {
        echo '
        <script>
          if(!(performance.navigation.type==1)){
            alert("'.$error.' incorrect");
          }
          document.Inscription.login.value = "'.$_POST["login"].'";
          document.Inscription.email.value = "'.$_POST["email"].'";
          document.Inscription.name.value = "'.$_POST["name"].'";
          document.Inscription.num_cin.value = "'.$_POST["num_cin"].'";
          document.Inscription.num_tel.value = "'.$_POST["num_tel"].'";
          document.Inscription.Adresse.value = "'.$_POST["Adresse"].'";
          let option = "'.$_POST["sexe"].'";
          document.Inscription.sexe.options.namedItem(option).selected = true;
          let date = "'.$_POST["date_naissance"].'";
          document.Inscription.date_naissance.value = date;
          let rot = document.getElementsByName("reg-log");
          rot[0].checked=true;
        </script>
      ';
      }
}

?>