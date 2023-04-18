<?php
  require("../../PHP/Connexion_BD.php"); 
  $id=$_GET['up'];

if(isset($_POST['submit']))
{
  $nom = $_POST["nom"];
  $login = $_POST["login"];
  $pass = $_POST["pass"];
  $gender = $_POST["sexe"];
  $email = $_POST["email"];
  $tele = $_POST["tele"];
  $Cin=$_POST["CIN"];
  $permis=$_POST["permis"];

$res="UPDATE moniteur SET Nom='$nom', Password='$pass', Sexe_moniteur='$gender', Email_moniteur='$email',Num_telephone_moniteur='$tele', Num_permis='$permis' ,Num_CIN_moniteur='$Cin' where  Login_moniteur='$id'  ";
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
	<title>Modifier Moniteur </title>
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
      Modifier Moniteur
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
          <label>Address Email</label>
          <input type="text" name="email" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Telephoner</label>
          <input type="text"  name="tele" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Sexe</label>
      
    
          <INPUT   TYPE="radio"  id="esp" NAME="sexe" VALUE="F" CHECKED>Femme
            
          <INPUT TYPE="radio" id="ep" NAME="sexe" VALUE="H">  Homme

        
        
       </div> 
       <div class="inputfield">
          <label>Permis</label>
          <input type="text"  name="permis" class="input" required>
       </div>   
       <div class="inputfield">
          <label>Mot de pass</label>
          <input type="password" name="pass" class="input" required>
       </div>  
      <div class="inputfield">
          <label>Confirmer le motde pass</label>
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