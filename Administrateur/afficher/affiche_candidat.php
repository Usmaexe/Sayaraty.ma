<?PHP
require("../../PHP/Connexion_BD.php");
session_start();
$id=$_GET['dis'];


$res=" SELECT * FROM  candidat where Login_candidat='$id'  ";
$requete = mysqli_query( $connect ,$res);
$row = mysqli_fetch_assoc($requete);
echo'
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Sayaraty - Ajouter Candidat </title>
      <link rel="icon" href="../../IMG/SAYARATY_Icon.png">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../CSS/style-affich-cand.css">
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
                                  <h4 class="ins mb-4 pb-3">'.$row['Nom'].'</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <span class="name-style" >'.$row['Nom'].'</span>
                                    <img class="img2" src="../../IMG/key.png">
                                    <span class="login-style" >'.$row['Login_candidat'].'  </span>
                                   </div>	
                                  <div class="form-group mt-2">
                                    <!-- mt-2 stands to margin-top is a defined class -->
                                    <img class="img3" src="../../IMG/gender.png">
                                    <span class="sexe" >'.$row['Sexe_candidat'].'</span>
                                    <img class="img4" src="../../IMG/calendarW.png">
                                    <span class="sexe" >'.$row['Date_d_inscription'].'   </span>
                                  </div>	
                                  <div class="form-group mt-2">
                                    <img class="img5" src="../../IMG/id-card.png">
                                    <span class="name-style" >'.$row['Num_CIN_candidat'].'   </span>
                                    <img class="img6" src="../../IMG/phone-call.png">
                                    <span class="name-style" >   '.$row['Num_telephone'].'</span>
                                  </div>
                                  <div class="form-group mt-2">
                                    <img class="img5" src="../../IMG/clock.png">
                                    <span class="name-style" >'.$row['Nb_heures'].' H</span>
                                    <img class="img6" src="../../IMG/cash.png">
                                    <span class="name-style" >   '.$row['Prix_payer'].' DH</span>
                                  </div>
                                  <div class="form-group mt-2">
                                    <img src="../../IMG/map.png"/>
                                    <span class="form-style" >    '.$row['Adresse'].'</span>
                                    </div>
                                  <div class="form-group mt-2"> 
                                    <img src="../../IMG/email.png"/>
                                    <span class="form-style" >'.$row['Email_candidat'].'</span>
                                  </div>	
                                  <button value="Envoyer" class="btn mt-4"><a href="../Pages/candidat.php" >Retour</a>
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
