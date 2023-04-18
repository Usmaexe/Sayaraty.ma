<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_GET['deleteif'])){
  $id=$_GET['deleteif'];
 $res="DELETE FROM  candidat where Login_candidat like '$id' ";
  $requete = mysqli_query( $connect,$res);

  if($requete){
    echo 'hhhh';
    header("Location:../Pages/candidat.php");
  }else{
   echo 'erreur';
  }
}
?>