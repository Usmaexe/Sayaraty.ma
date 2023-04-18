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
$Cin=$_POST["CIN"];
$permis=$_POST["permis"];



$res="INSERT INTO moniteur (Nom, Login_moniteur, Password, Sexe_moniteur, Email_moniteur, Num_telephone_moniteur,Num_CIN_moniteur, Num_permis) VALUES ('$nom', '$login', '$pass', '$gender', '$email', '$tele','$Cin','$permis')";
$requete = mysqli_query( $connect ,$res);
if($requete){
    echo 'ajouter avec succes';
    header("Location:../Pages/moniteur.php");
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
</head>
<body>
<div class="wrapper">
  <form method="post">
    <div class="title">
      Ajouter Moniteur
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nom</label>
          <input type="text" Name="nom" class="input" required>
       </div>  
       <div class="inputfield">
          <label>CIN</label>
          <input type="text"  name="CIN" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Email Address</label>
          <input type="text" name="email" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Phone Number</label>
          <input type="text"  name="tele" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Gender</label>
      
    
          <INPUT   TYPE="radio"  id="esp" NAME="sexe" VALUE="F" CHECKED>Femme
            
          <INPUT TYPE="radio" id="ep" NAME="sexe" VALUE="H">  Homme

        
        
       </div> 
       <div class="inputfield">
          <label>Permis</label>
          <input type="text"  name="permis" class="input" required>
       </div> 
       <div class="inputfield">
        <label>Login</label>
        <input type="text" Name="login" class="input" required>
     </div>   
       <div class="inputfield">
          <label>Password</label>
          <input type="password" name="pass" class="input" required>
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name="passo" class="input" required>
       </div> 
        
        
       
     
      <div class="inputfield">
        <button type="submit" name="submit" class="btn">Ajouter</button>
      </div>
    </div>
</form>
</div>	
</body>
</html>