<?php
  require("../../PHP/Connexion_BD.php"); 
/*$id = $_POST['id'];

  // Préparation de la requête SQL de suppression
  $sql = "DELETE FROM moniteur WHERE id = ?";

  // Préparation de la requête SQL
  $stmt = $mysqli->prepare($sql);

  // Vérification de la préparation de la requête
  if (!$stmt) {
    echo "Échec de la préparation de la requête SQL: " . $mysqli->error;
    exit();
  }

  // Liaison du paramètre de l'ID
  $stmt->bind_param("s", $id);

  // Exécution de la requête SQL
  if (!$stmt->execute()) {
    echo "Échec de l'exécution de la requête SQL: " . $mysqli->error;
    exit();
  }*/
if(isset($_GET['login'])){
  $id=$_GET['login'];
 $res="DELETE FROM  moniteur where Login_moniteur like '$id' ";
  $requete = mysqli_query( $connect ,$res);

  if($requete){
    echo 'hhhh';
    header("Location:../Pages/moniteur.php");
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