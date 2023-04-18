<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_POST['submit']))
{
$marque = $_POST["marque"];
$model = $_POST["Modele"];
$mat = $_POST["matricule"];
$type = $_POST["type"];




$res="INSERT INTO vehicule (Modele,Marque,Num_matricule)  VALUES ( '$model','$marque','$mat')";
$requete = mysqli_query( $connect ,$res);
if($requete){
    echo 'ajouter avec succes';
    header("Location:../Pages/vehicule.php");
}else{
    echo 'ajouter avec succes';
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="wrapper">
  <form method="post">
    <div class="title">
      Ajouter Vehicule
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Marque</label>
          <input type="text" Name="marque" class="input">
       </div>  
       <div class="inputfield">
        <label>Modele</label>
        <input type="text" Name="Modele" class="input">
     </div>   
       <div class="inputfield">
          <label>Matricule</label>
          <input type="text" name="matricule" class="input">
       </div>  
        <div class="inputfield">
          <label>Type</label>
          <div class="custom_select">
            <select name="type">
              <option value="">Select</option>
              <option value="Voiture">voiture</option>
              <option value="Moto">moto</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
        <button type="submit" name="submit" class="btn">Ajouter</button>
      </div>
    </div>
    </div>

</form>
</div>	
</body>
</html>