<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_GET['delete'])){
  $id=$_GET['delete'];
 $res="DELETE FROM  vehicule where Num_matricule like '$id' ";
  $requete = mysqli_query($connect,$res);

  if($requete){
    echo 'hhhh';
    header("Location:../Pages/vehicule.php");
  }else{
   echo 'fuck';
  }
}
?>