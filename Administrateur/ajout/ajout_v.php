<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_POST['submit']))
{
$marque = $_POST["marque"];
$model = $_POST["modele"];
$mat = $_POST["matricule"];
$type = $_POST["type"];




$res="INSERT INTO vehicule (Modele,Marque,Num_matricule)  VALUES ( '$model','$marque','$mat')";
$requete = mysqli_query( $connect ,$res);
if($requete){
 echo' <script>
  alert("Vous avez ajouter une nouvelle Vehicule par succées! ");
  document.location = "../Pages/vehicule.php" ;
</script>';

}else{
    echo 'ajouter avec succes';
}


}
?>
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
                                  <h4 class="ins mb-4 pb-3">Ajouter Vehicule</h4>
                                  <div class="form-group">
                                    <img src="../../IMG/user.png">
                                    <span  class="name-style" >choisissez le Type</span>
                                    <label for="select-area">select</label>
                                    <select name="type" id="select-area" class="sexe">
                                      <option class="sexe" name="Voiture" value="Voiture">Voiture</option>
                                      <option class="sexe" name="Moto" value="Moto">Moto</option>
                                    </select>
                                 </div>	
                                 
                          
                                 <div class="form-group mt-2">
                                    <img src="../../IMG/matricule.png" >
                                    <input type="text" name="matricule" class="name-style" placeholder="Matricule"  autocomplete="off" required>
                                    <img class="img44" src="../../IMG/matricule.png">
                                    <input type="text" name="marque" class="name-style" placeholder="Marque" autocomplete="off" required>
                                 
                                </div>
                                  <div class="form-group mt-2">
                                  <img class="img45" src="../../IMG/matricule.png">
                                    <input type="text" name="modele" class="llogin-style" placeholder="Modelle" autocomplete="off" required>
                                   
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
</html>