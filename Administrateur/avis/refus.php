<?PHP
require("../../PHP/Connexion_BD.php");
session_start();
$id=$_GET['refs'];
    $quer = "UPDATE  avis SET 
   Statut='0'
    where id_avis='$id' ";
    $requet = mysqli_query($connect, "SELECT * FROM avis where id_avis like '$id'");
    $cl=mysqli_fetch_row($requet);
  if( mysqli_query($connect,$quer))  
   {
     echo '<script>
     alert("L\'avis de '.$cl[4].' a ete masque avec succee");
       document.location = "../Pages/Avis.php" ;
     </script>
   ';
   }
?>