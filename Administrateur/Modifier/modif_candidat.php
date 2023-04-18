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
$adrs = $_POST["adrs"];
$Cin = $_POST["CIN"];

$res="UPDATE candidat SET Nom='$nom', Password='$pass', Sexe_candidat='$gender', Email_candidat='$email',Num_telephone='$tele', Adresse='$adrs' ,Num_CIN_candidat='$Cin' where  Login_candidat='$id'  ";
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
	<title>ajouter candidat</title>
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
          <label>CIN</label>
          <input type="text"  name="CIN" class="input">
       </div>
       <div class="inputfield">
          <label>Address Email</label>
          <input type="text" name="email" class="input">
       </div> 
       <div class="inputfield">
          <label>Telephone</label>
          <input type="text"  name="tele" class="input">
       </div> 
      
        <div class="inputfield">
          <label>Sexe</label>
    
          <INPUT   TYPE="radio"  id="esp" NAME="sexe" VALUE="F" CHECKED>Femme
            
          <INPUT TYPE="radio" id="ep" NAME="sexe" VALUE="H">Homme

        
       </div> 
       <div class="inputfield">
          <label>Address</label>
          <textarea name="adrs" class="textarea"></textarea>
       </div> 
       <div class="inputfield">
          <label>Mots de pass</label>
          <input type="password" name="pass" class="input">
       </div>  
      <div class="inputfield">
          <label>Confirmer mot de pass</label>
          <input type="password" name="passo" class="input">
         </div>
      
        
     
      
      <div class="inputfield">
        <button type="submit" name="submit" class="btn">Modifier</button>
      </div>
    </div>
</form>
</div>	
</body>
</html>