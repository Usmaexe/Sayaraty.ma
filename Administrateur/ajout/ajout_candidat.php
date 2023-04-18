<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_POST['submit']))
{
$nom = $_POST["nom"];
$login = $_POST["login"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$tele = $_POST["tele"];
$adrs = $_POST["adrs"];
$Cin = $_POST["CIN"];

$res="INSERT INTO candidat (Nom, Login_candidat, Password, Sexe_candidat, Email_candidat, Num_telephone, Adresse,Num_CIN_candidat) VALUES ('$nom', '$login', '$pass', '$gender', '$email', '$tele', '$adrs','$Cin')";
$requete = mysqli_query( $connect ,$res);
if($requete){
    echo 'ajouter avec succes';
    
    header("Location:../Pages/candidat.php");
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
  <style>
    #ep{
  margin-left: 1rem;
  
}
  </style>
</head>
<body>
<div class="wrapper">
  <form method="post">
    <div class="title">
      Ajouter Candidat
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nom</label>
          <input type="text" Name="nom" class="input">
       </div>  
       <div class="inputfield">
        <label>Login</label>
        <input type="text" Name="login" class="input">
     </div>   
       <div class="inputfield">
          <label>Password</label>
          <input type="password" name="pass" class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name="passo" class="input">
       </div> 
        <div class="inputfield">
          <label>Gender</label>
    
          <INPUT   TYPE="radio"  id="esp" NAME="sexe" VALUE="F" CHECKED>Femme
            
          <INPUT TYPE="radio" id="ep" NAME="sexe" VALUE="H">Homme

        
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" name="email" class="input">
       </div> 
       <div class="inputfield">
          <label>CIN</label>
          <input type="text"  name="CIN" class="input">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text"  name="tele" class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea name="adrs" class="textarea"></textarea>
       </div> 
      <div class="inputfield">
        <button type="submit" name="submit" class="btn">Ajouter</button>
      </div>
    </div>
</form>
</div>	
</body>
</html>