<?PHP
require("../../PHP/Connexion_BD.php");
session_start();
$id=$_GET['accpt'];
    $quer = "UPDATE  seance SET 
       Valide=1
    where ID_SEANCE='$id' ";
  if( mysqli_query($connect,$quer))  
   {
     echo '<script>
     alert("Seance Valide !");
       document.location = "../Pages/seance.php" ;
     </script>
   ';
   }
?>