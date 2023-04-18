<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $requete = mysqli_query($connect, "DELETE  FROM  Avis where id_avis=$id ");

  if($requete){
    echo 'hhhh';
    header("Location:../Pages/Avis.php");
  }else{
   echo 'fuck';
  }
}