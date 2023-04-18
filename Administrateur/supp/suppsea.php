<?php
  require("../../PHP/Connexion_BD.php"); 
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $requete = mysqli_query($connect, "DELETE  FROM  `seance` where ID_SEANCE=$id ");

  if($requete){
   echo'alert("sppp")';
    header("Location:../Pages/seance.php");
  }else{
   echo 'fuck';
  }
}
/*
while($ligne = mysqli_fetch_assoc($requete)){
    $id=0;
    foreach($_POST["<?php echo $id; ?>"] as $tmp ){
      $id=$tmp;
      if($id=$tmp){
       $sql='DELETE * FROM Message WHERE Contenu = '.$tmp.' '; 
       $rq= $bdd -> prepare($sql);
       $r=$rq->execute();
      }
    }*/
/*$a=$ligne['Contenu'];
$id = $_POST["id"];                         
$rqt=mysqli_query($connexion,"DELETE * FROM Message WHERE Contenu = :i ");
$stmt = $connexion->prepare($rql);
$stmt->bind_param("i", $id);
if (!$stmt->execute()) {
    echo "Échec de l'exécution de la requête SQL: " . $mysqli->error;
    exit();
  }
  header("Location: message.php");*/
  

?>