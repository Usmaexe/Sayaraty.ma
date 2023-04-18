<?php
    require("../../PHP/Connexion_BD.php"); 
    session_start();

    if(isset($_POST['submit']))
    {
       $nommon= $_SESSION["login"];
    $nomcon = $_POST["candidat"];
    $time = $_POST["Temps"];
    $jour = $_POST["jour"];
    $ve=$_POST["voiture"];
    
    $res="INSERT INTO seance ( id_moniteur, id_candidat , Heure, id_vehicule, Jour) VALUES ('$nommon', '$nomcon', '$time','$ve','$jour')";
    $requete = mysqli_query( $connect ,$res);
    if($requete){
        echo 'ajouter avec succes';
        
        header("Location:../list_candidatx.php");
    }else{
        echo 'ajouter avec succes';
    }
    }
    $requete = mysqli_query( $connect , "SELECT Login_candidat , Nom FROM candidat ");
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
      <link rel="stylesheet" href="../../CSS/style-affich-cand.css">
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
                                  <h4 class="ins mb-4 pb-3">Ajouter sceance</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <span  class="name-style" >choisissez Candidat</span>
                                    <label for="select-area">select</label>
                                    <select name="candidat" id="select-area" class="sexe">';
                                    while($ligne = mysqli_fetch_assoc($requete)) { 
                                     echo '
                                      <option class="sexe" value="'.$ligne["Login_candidat"].'">'.$ligne["Nom"].'</option>
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
                               <select name="Temps" id="select-area" class="sexe">
                                   <option value="09h-10h">09h-10h</option>
                                   <option value="10h-11h">10h-11h</option>
                                   <option value="11h-12h">11h-12h</option>
                                   <option value="14h-15h">14h-15h</option>
                                   <option value="15h-16h">15h-16h</option>
                                   <option value="16h-17h">16h-17h</option>
                                   <option value="17h-18h">17h-18h</option>
                                   <option value="18h-19h">18h-19h</option>
                           </select>
                               
                            </div>	
                            <div class="form-group mt-2">
                               <img src="../../IMG/user.png">
                               <span  class="name-style" >choisissez Jour</span>
                               <select name="jour" id="select-area" class="sexe">
                               <option value="Lundi">Lundi</option>
                               <option value="Mardi">Mardi</option>
                               <option value="Mercredi">Mercredi</option>
                               <option value="Jeudi">Jeudi</option>
                               <option value="Vendredi">Vendredi</option>
                               <option value="Samedi">Samedi</option>
                               <option value="Dimanche">Dimanche</option>
                           </select>
                               
                            </div>
                        </div>
                                  
                                 
                                  
                                  <input type="submit" name="submit" value="Ajouter" class="btn mt-4">
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