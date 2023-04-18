<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/style_message.css">
       <link rel="stylesheet" href="../styles/Style_condidat.css">
       <script defer src="script.js"></script>

   </head>
   <body>
   <?PHP 
      require("../../PHP/Connexion_BD.php"); 
    session_start();
    $query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
    $ligne = mysqli_fetch_row(mysqli_query($connect,$query)); 
$nbr_voiture = mysqli_query( $connect ,  "SELECT COUNT(*) FROM vehicule");
$nbr_voiture = mysqli_fetch_row($nbr_voiture); 
$nbr_voiture = implode("", $nbr_voiture); 


   echo '  <div class="sidebar">
            <div class="brand">
            <a href="../"><img src="../image/SAYARATY_LOGO.png"><a>
            </div>
            <div class="menu">
                <ul>
                   <li>
                    <a href="../index.php" ><span class="dash">Accueil</span></a>
                   </li>
                   <li>
                    <a href="candidat.php" ><span class="condidats">Candidats</span></a>
                   </li>
                   <li>
                    <a  href="moniteur.php" ><span class="moniteur"> Moniteurs </span></a>
                   </li>
                   <li>
                    <a href="vehicule.php"  ><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="Seance.php"  ><span class="">Seances</span></a></li>
                   
                    <li>
                    <a href="#" class="active" ><span class="">Messages</span></a>
                   </li>
                   <li>
                   <a href="Avis.php"><span class="">Avis</span></a>
                  </li>
                  <li>
                   <a href="profile.php"><span class="">Profil</span></a>
                  </li>
                     
                 
                </ul>
            </div>
      </div>
      <div class="main_cont">
        <header>
             <h2 >
                <label for="">
                    <span  class="hello"></span>
                </label>

              
             </h2>
             
             <div class="condidat">
             <!-- span onclick()=affiche() class=""-->
             <img id="hi" src="'.$ligne[6].'" onclick="toggle" width="30px" height="30px"  alt="">
             
             <div >
                 <h4 id="Menu">'.$_SESSION["login"].'</h4>
                 <small>Admin</small></a>
                
             </div>
             <a href="../../PHP/Deconnexion.php">
             <img id="hiii" src="../image/loging out.png" width="25px" height="25px">
             </a>

             
          </div>
        </header>
        <main>
          
             
        <div class="recent">
                <div class="project">
                   <div class="card2">
                      <div class="card_h">
                         <h3> Messages </h3>
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      <td> Nom </td>
                                      <td> Email </td>
                                      <td> Objet </td> 
                                      <td>  Message  </td>
                                   </tr>
                                </thead>' ;

                                $requete = mysqli_query($connect, "SELECT * FROM  Message ");
                                    if ($requete){
                                       while($row = mysqli_fetch_assoc($requete)) { 

                                          echo ' <tbody>
                                           <tr>';
                                           $id=$row['id_message'];
                                           $name=$row['Nom'];
                                           $email=$row['Email'];
                                           $object=$row['Objet'];
                                           $contenu=$row['Contenu'];
  
                                            echo '   <td>'.$name.'</td>
                                               <td>'.$email.'</td>
                                               <td>'.$object.'</td>
                                               <td>  <button id="aaaa" ><a href="voir_messg.php?deleteid='.$id.'"><image class="image_delete" src="../image/silhouette-de-messages.png" ></a></buttom></td> 
                                               <td>
                                               <button id="aaa" value="Supprimer"> <a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer?")\'href="../supp/suppmess.php?deleteid='.$id.'"> <image class="image_delete"src="../image/delete.png" ></a> </button>
                                               </td>
                                               
                                             
  
                                           </tr>' ;
                                           
                                          
                                           
                                          /* $rqt=mysqli_query($connexion,"DELETE * FROM Message WHERE Nom = ".$a. " ");
                                           $stmt->bind_param("i", $id);
  
                                           // Exécution de la requête SQL
                                           if (!$stmt->execute()) {
                                             echo "Échec de l'exécution de la requête SQL: " . $mysqli->error;
                                             exit();
                                           }
                                           header("Location: message.php");*/
                                                                           }
                                    }
                               
                     echo '
                                     
        
                                    


                              </tbody>
                              </table>
                        </div>
                      </div>
                   </div>
                </div>
                <div class="custmer">

                </div>
            </div>
        </main>
      </div>
   </body>
</html>   '
?>
