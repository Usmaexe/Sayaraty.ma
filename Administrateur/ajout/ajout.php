<?php
     require("../../PHP/Connexion_BD.php"); 
     session_start();
 
     if(isset($_POST['submit']))
     {
     $nomcon = $_POST["candidat"];
     $nommon = $_POST["moniteur"];
     $time = $_POST["Temps"];
     $jour = $_POST["jour"];
     $ve=$_POST["voiture"];
     
     $res="INSERT INTO seance ( id_moniteur, id_candidat , Heure, id_vehicule, Jour) VALUES ('$nommon', '$nomcon', '$time','$ve','$jour')";
     $requete = mysqli_query( $connect ,$res);
     if($requete){
         echo 'ajouter avec succes';
         
         header("Location:../Pages/seance.php");
     }else{
         echo 'ajouter avec succes';
     }
     }
     $requete = mysqli_query( $connect , "SELECT Login_candidat , Nom FROM candidat ");
     $requete_m = mysqli_query( $connect , "SELECT Login_moniteur , Nom FROM moniteur ");
     $requete_v = mysqli_query( $connect , "SELECT Num_matricule FROM vehicule");
echo'

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
      Ajouter Seance
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nom candidat</label>
          <select  name="candidat">';
           while($ligne = mysqli_fetch_assoc($requete)) { 
            echo '
          <option value="'.$ligne["Login_candidat"].'">'.$ligne["Nom"].'</option>
          ';} 
          echo' </select> 
         
       </div>  
       <div class="inputfield">
        <label>Nom Moniteur</label>';
        echo '
        <select name="moniteur">';
         while($moni = mysqli_fetch_assoc($requete_m)) { 
          echo '
        <option value="'.$moni["Login_moniteur"].'">'.$moni["Nom"].'</option>
        ';} 

        echo' </select> 
       
     </div>   
       <div class="inputfield">
          <label>Voiture</label>';
          echo' </select> 
          <select name="voiture">';
          while($voi = mysqli_fetch_assoc($requete_v)) { 
           echo '
         <option value="'.$voi["Num_matricule"].'">'.$voi["Num_matricule"].'</option>
                 ';} 
         echo '</select> 
       </div>  
      <div class="inputfield">
          <label>Temps</label>
        <select name="Temps">
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
        <div class="inputfield">
          <label>Jour</label>
        <select name="jour">
          <option value="Lundi">Lundi</option>
          <option value="Mardi">Mardi</option>
          <option value="Mercredi">Mercredi</option>
          <option value="Jeudi">Jeudi</option>
          <option value="Vendredi">Vendredi</option>
          <option value="Samedi">Samedi</option>
          <option value="Dimanche">Dimanche</option>
          
        </select>
       </div> 
        
      <div class="inputfield">
        <button type="submit" name="submit" class="btn">Ajouter</button>
      </div>
    </div>
</form>
</div>	
</body>
</html>';
?>