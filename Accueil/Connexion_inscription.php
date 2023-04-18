<?PHP
require("../PHP/Connexion_BD.php");
session_start();
?>
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Sayaraty - Authentification</title>
      <title>Sayaraty - Authentification</title>
      <link rel="icon" href="../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../CSS/style-auth.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Secular+One&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="conta">
        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <a class="image" href="../index.php"><img src="../IMG/SAYARATY_w.png" class="Sayaraty"></a>
              <h6 class="mb-0 pb-3"><span>Connexion</span><span>Inscription</span></h6>
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                      <div class="card-3d-wrapper">
                        <form class="card-front" name="Connexion" id="cnx" method="post">
                          <div class="center-wrap">
                              <div class="section text-center">
                                <h4 class="mb-4 pb-3">Connexion</h4>
                                  <div id ="logcontainer" class="form-group">
                                    <img src="../IMG/user.png">
                                    <input type="text" name="logemail" class="form-style" placeholder="Login" autocomplete="off">
                                  </div>	
                                  <div class="form-group mt-2">
                                    <img src="../IMG/padlock.png"/>
                                    <input type="password" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" name="pass" class="form-style" placeholder="Mot de passe" AUTOCOMPLETE="OFF">
                                  </div>
                                  <input type="submit" name="submit-button1" value="Envoyer" class="btn mt-4">
                              </div>
                          </div>
                        </form>
                        <form class="card-back" name="Inscription" id="ins" method="post">
                              <div class="center-wrap">
                                <div class="section text-center">
                                  <h4 class="ins mb-4 pb-3">Inscription</h4>
                                  <div class="form-group">
                                    <img src="../IMG/user.png">
                                    <input type="text" name="name" class="name-style" placeholder="Nom complet"  autocomplete="off">
                                    <img class="img2" src="../IMG/key.png">
                                    <input type="text" name="login" class="login-style" placeholder="login" autocomplete="off">
                                  </div>	
                                  <div class="form-group mt-2">
                                    <!-- mt-2 stands to margin-top is a defined class -->
                                    <img class="img3" src="../IMG/gender.png">
                                    <label for="select-area">select</label>
                                    <select name="sexe" id="select-area" class="sexe">
                                      <option class="sexe" name="Homme" value="Homme">Homme</option>
                                      <option class="sexe" name="Femme" value="Femme">Femme</option>
                                    </select>
                                    <img class="img4" src="../IMG/calendarW.png">
                                    <input type="date" name="date_naissance" class="login-style" placeholder="login" autocomplete="off">
                                  </div>	
                                  <div class="form-group mt-2">
                                    <img class="img5" src="../IMG/id-card.png">
                                    <input type="text" name="num_cin" class="name-style" placeholder="Numèro CIN"  autocomplete="off">
                                    <img class="img6" src="../IMG/phone-call.png">
                                    <input type="text" name="num_tel" class="login-style" placeholder="Numèro Telephone" autocomplete="off">
                                  </div>
                                  <div class="form-group mt-2"> 
                                    <img src="../IMG/email.png"/>
                                    <input type="email" name="email" class="form-style" placeholder="Email" autocomplete="off">
                                  </div>	
                                  <div class="form-group mt-2"> 
                                    <img src="../IMG/location-pin.png"/>
                                    <input type="text" name="adresse" class="form-style" placeholder="Adresse" autocomplete="off">
                                  </div>	
                                  <div class="form-group mt-2">
                                    <img src="../IMG/padlock.png"/>
                                    <input type="password" name="logpass" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" class="form-style" placeholder="Mot de passe" autocomplete="off">
                                  </div>
                                  <div class="form-group mt-2">
                                    <img src="../IMG/padlock.png"/>
                                    <input type="password" name="logpassConfirm" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" class="form-style" placeholder="Confirmer le mot de passe" autocomplete="off">
                                  </div>
                                  <input type="submit" name="submit-button2"  value="Envoyer" class="btn mt-4">
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
    <script>

      //obtenir les élement du formulaire de connexion
      let form = document.getElementById('cnx');
      let inputs = form.querySelectorAll('input');

      // L'ajout d'un écouteur d'évenement lors d'envoi
      form.addEventListener('submit', function(event) {
        inputs = form.querySelectorAll('input');

        inputs.forEach(function(input) {
          if (input.value.trim() === '') {
            event.preventDefault(); // empécher les données d'étre envoyer
            input.style.border = '1px solid red';
          }
          else{
            input.style.border = 'none';
          }
        });
      });

      //obtenir les élement du formulaire d'inscription
      let form2 = document.getElementById('ins');
      let inputs2 = form2.querySelectorAll('input');

      // L'ajout d'un écouteur d'évenement lors d'envoi
      form2.addEventListener('submit', function(event) {
        inputs2 = form2.querySelectorAll('input');

        inputs2.forEach(function(input) {
          if (input.value.trim() === '') {
            event.preventDefault(); // empécher les données d'étre envoyer
            input.style.border = '1px solid red';
          }
          else{
            input.style.border = 'none';
          }
        });
      });

    </script>
</html>

<?PHP
if(isset($_POST["submit-button1"])){
  $query = "SELECT Email_candidat FROM candidat";
  $log = $_POST["logemail"];
  $pwd = $_POST["pass"];
  $C_email;$A_email;$M_email;$i=0;
  if($result=mysqli_query($connect,$query)){
    while($ligne=mysqli_fetch_row($result)){
      $C_email[$i] = $ligne[0];
      $i++;
    }
  }
  $query = "SELECT Login_candidat FROM candidat";
  if($result=mysqli_query($connect,$query)){
    while($ligne = mysqli_fetch_row($result)){
      $C_email[$i]=$ligne[0];
      $i++;
    }
  }


  $query = "SELECT Email FROM administrateur";$i=0;
  if($result=mysqli_query($connect,$query)){
    while($ligne=mysqli_fetch_row($result)){
      $A_email[$i] = $ligne[0];
      $i++;
    }
  }
  $query = "SELECT login_admin FROM administrateur";
  if($result=mysqli_query($connect,$query)){
    while($ligne=mysqli_fetch_row($result)){
      $A_email[$i] = $ligne[0];
      $i++;
    }
  }

  $query = "SELECT Email_moniteur FROM moniteur";$i=0;
  if($result=mysqli_query($connect,$query)){
    while($ligne=mysqli_fetch_row($result)){
      $M_email[$i] = $ligne[0];
      $i++;
    }
  }
  $query = "SELECT login_moniteur FROM moniteur";
  if($result=mysqli_query($connect,$query)){
    while($ligne=mysqli_fetch_row($result)){
      $M_email[$i] = $ligne[0];
      $i++;
    }
  }

  $isCandidat=$isMoniteur=$isAdmin=false;

  if(in_array($_POST["logemail"],$C_email)||in_array($_POST["logemail"],$M_email)||in_array($_POST["logemail"],$A_email)){
    $verified = false;$mdpv = "";
    if(in_array($_POST["logemail"],$C_email)){
      $query = "SELECT Password FROM CANDIDAT WHERE Email_candidat='".$_POST["logemail"]."' OR Login_candidat='".$_POST["logemail"]."'";      
      $mdp = mysqli_fetch_row(mysqli_query($connect,$query));
      for($k = 0 ; $k < sizeof($mdp) ; $k++){
        if(password_verify($_POST["pass"],$mdp[$k])){
          $verified = true;
          $mdpv=$mdp[$k];
        }
      }
      $query = "SELECT Login_candidat FROM CANDIDAT WHERE Password='".$mdpv."' and (Email_candidat='".$_POST["logemail"]."' OR Login_candidat='".$_POST["logemail"]."')";
      $emailVer = mysqli_fetch_row(mysqli_query($connect,$query));
      $isCandidat=true;
    }
    if(in_array($_POST["logemail"],$M_email)){
      $query = "SELECT Password FROM MONITEUR WHERE Email_moniteur='".$_POST["logemail"]."' OR login_moniteur='".$_POST["logemail"]."'";
      $mdp = mysqli_fetch_row(mysqli_query($connect,$query));
      for($k = 0 ; $k < sizeof($mdp) ; $k++){
        if(password_verify($_POST["pass"],$mdp[$k])){
          $verified = true;
          $mdpv=$mdp[$k];
        }
      }
      $query = "SELECT Login_moniteur FROM MONITEUR WHERE Password='".$mdpv."' and (Email_moniteur='".$_POST["logemail"]."' OR Login_moniteur='".$_POST["logemail"]."')";
      $emailVer = mysqli_fetch_row(mysqli_query($connect,$query));
      $isMoniteur=true;
    }
    if(in_array($_POST["logemail"],$A_email)){
      $query = "SELECT Password FROM ADMINISTRATEUR WHERE Email='".$_POST["logemail"]."' OR Login_admin='".$_POST["logemail"]."'";     
      $mdp = mysqli_fetch_row(mysqli_query($connect,$query));
      for($k = 0 ; $k < sizeof($mdp) ; $k++){
        if(password_verify($_POST["pass"],$mdp[$k])){
          $verified = true;
          $mdpv=$mdp[$k];
        }
      }
      $query = "SELECT Login_admin FROM ADMINISTRATEUR WHERE Password='".$mdpv."' and (Email='".$_POST["logemail"]."' OR Login_admin='".$_POST["logemail"]."')";
      $emailVer = mysqli_fetch_row(mysqli_query($connect,$query));
      $isAdmin=true;
    }
    if($verified){
      $_SESSION["login"]=$emailVer[0];
      if($isCandidat){
        echo'
          <SCRIPT>
            document.location = "../Candidat";
          </SCRIPT> 
        ';
      }
      else if($isMoniteur){
        echo'
          <SCRIPT>
            document.location = "../Moniteur";
          </SCRIPT> 
        ';
      }
      else if($isAdmin){
        echo'
          <SCRIPT>
            document.location = "../Administrateur";
          </SCRIPT> 
        ';
      }
    }
    if(is_null($emailVer)){
      echo '
      <SCRIPT>
        if(!(performance.navigation.type==1)){
          alert("Informations incorrectes");
        }
        document.Connexion.logemail.value = "'.$log.'";
        document.Connexion.pass.value = "'.$pwd.'";
      </SCRIPT> 
      ';
    }
  }
  else{
    echo '
      <SCRIPT>
        if(!(performance.navigation.type==1)){
          alert("Informations incorrectes");
        }
        document.Connexion.logemail.value = "'.$log.'";
        document.Connexion.pass.value = "'.$pwd.'";
      </SCRIPT> 
    ';
  }
}
else {
  echo '
      <SCRIPT>
        document.Connexion.logemail.value = "";
        document.Connexion.pass.value = "";
      </SCRIPT>
    ';
}
if(isset($_POST["submit-button2"])){  
      $insert = true;$error=[];
      if(!preg_match("#^[\w\.]+@([\w]+\.)+[\w]{2,4}$#",$_POST["email"])){     
        array_push($error,"email");
        $insert = false;
      }
      if(!preg_match("#^[A-z\ ]+$#",$_POST["name"])){
        array_push($error,"name");
        $insert = false;
      }
      if(!preg_match("#^\w{1,2}\d{4,6}$#",$_POST["num_cin"])){
        array_push($error,"Numéro carte national");
        $insert = false;
      }
      if(!preg_match("#^(0|\+\d{1,3}-)\d{9}$#",$_POST["num_tel"])){
        array_push($error,"Numéro télephone");
        $insert = false;
      }
      if($_POST["logpass"]!=$_POST["logpassConfirm"]){
        array_push($error,"Mot de passe");
        $insert = false;
      }
      if(!$insert){
        echo '
            <script>
              if(!(performance.navigation.type==1)){';
                for($i = 0 ; $i < sizeof($error) ; $i++){
                  echo'
                      alert("'.$error[$i].' incorrect");
                    ';
                }  
              echo'
                }
              
              document.Inscription.login.value = "'.$_POST["login"].'";
              document.Inscription.email.value = "'.$_POST["email"].'";
              document.Inscription.adresse.value = "'.$_POST["adresse"].'";   
              document.Inscription.name.value = "'.$_POST["name"].'";
              document.Inscription.num_cin.value = "'.$_POST["num_cin"].'";
              document.Inscription.num_tel.value = "'.$_POST["num_tel"].'";
              let option = "'.$_POST["sexe"].'";
              document.Inscription.sexe.options.namedItem(option).selected = true;
              let date = "'.$_POST["date_naissance"].'";
              document.Inscription.date_naissance.value = date;
              let rot = document.getElementsByName("reg-log");
              rot[0].checked=true;
            </script>
          ';
      }
      else{
        $query = "SELECT login_candidat,email_candidat FROM candidat";$exist=false;
        if($result=mysqli_query($connect,$query)){
          while($ligne=mysqli_fetch_row($result)){
            if($ligne[0]==$_POST["login"]){
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
          0,0,false,'../IMG/image.png','".$_POST["adresse"]."')";
          mysqli_query($connect,$query);  
          echo '
            <script>
              alert("Vous étes inscrit par succées! Vous pouvez se connecter maintenant");
              document.location = "Connexion_inscription.php" ;
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
              document.Inscription.adresse.value = "'.$_POST["adresse"].'";
              document.Inscription.name.value = "'.$_POST["name"].'";
              document.Inscription.num_cin.value = "'.$_POST["num_cin"].'";
              document.Inscription.num_tel.value = "'.$_POST["num_tel"].'";
              let option = "'.$_POST["sexe"].'";
              document.Inscription.sexe.options.namedItem(option).selected = true;
              document.Inscription.date_naissance.value = "'.$_POST["date_naissance"].'";
              let rot = document.getElementsByName("reg-log");
              rot[0].checked=true;
            </script>
          ';
        }
      }
  }
  
?>