<?php
  require("../../PHP/Connexion_BD.php"); 
$id=$_GET['dis'];


$res=" SELECT * FROM  moniteur where Login_moniteur='$id'  ";
$requete = mysqli_query( $connect ,$res);
$row = mysqli_fetch_assoc($requete);



echo'

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>'.$row['Nom'].'</title>
	<link rel="stylesheet" href="../styles/styles.css">
  <style>
    #ep{
  margin-left: 1rem;
  
}
#a{
    text-decoration: none;
    color:#fff
  }
  </style>
</head>
<body>
<div class="wrapper">
  <form method="post">
    <div class="title">
     Moniteur '.$row['Nom'].'
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nom :</label>
          <label>'.$row['Nom'].'</label>
       </div>  
       <div class="inputfield">
          <label>CIN :</label>
          <label>  '.$row['Num_CIN_moniteur'].'</label>
       </div>
       <div class="inputfield">
          <label>Address Email : </label>
          <label>'.$row['Email_moniteur'].'</label>
          
       </div> 
       <div class="inputfield">
          <label>Telephone :</label>
          <label>'.$row['Num_telephone_moniteur'].'</label>
       </div> 
    
        <div class="inputfield">
          <label>Sexe :</label>
          <label>'.$row['Sexe_moniteur'].'</label>
        
       </div> 
       <div class="inputfield">
          <label>Permis :</label>
          <label>'.$row['num_permis'].'</label>
       </div> 
       <div class="inputfield">
        <label>Login :</label>
        <label>'.$row['Login_moniteur'].'</label>
     </div>     
      <div class="inputfield">
       <button class="btn"> <a id="a" href="../pages/moniteur.php">Retour</a></button>
      </div>
    
</form>
</div>	
</body>
</html>';

?>