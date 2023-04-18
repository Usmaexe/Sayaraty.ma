<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/Style_Avis.css">

   </head>
   <body>
   <?PHP 
     require("../../PHP/Connexion_BD.php"); 
    session_start();
    $query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));
$nbr_Avis = mysqli_query($connect,"SELECT COUNT(*) FROM avis");
$nbr_Avis = mysqli_fetch_row($nbr_Avis); 
$nbr_Avis = implode("", $nbr_Avis); 

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
                    <a  href="moniteur.php" ><span class="moniteur">Moniteurs</span></a>
                   </li>
                   <li>
                    <a href="vehicule.php"  ><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="seance.php"><span class="">Seances</span></a>
                  </li>
                    <li>
                    <a href="message.php"  ><span class="">Messages</span></a>
                   </li>
                   <li>
                   <a href="#" class="active"><span class="">Avis</span></a>
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
                         <h3> Avis </h3>
                       
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      <td> Nom </td>
                                      <td> Note </td>                             
                                      <td> Contenu </td> 
                                   </tr>
                                </thead>' ;
                                
                                $requete = mysqli_query($connect, "SELECT * FROM Avis inner join candidat on id_candidat=Login_candidat ");
                                while($ligne = mysqli_fetch_assoc($requete)) { 
                                          $id=$ligne['id_avis'];
                                        echo ' <tbody>
                                         <tr>
                                             <td>'.$ligne['Nom'].'</td>
                                             <td>'.$ligne['Note'].'</td>
                                             <td>  <button id="aaa" ><a href="voir_avis.php?deleteid='.$id.'"><image class="image_delete" src="../image/silhouette-de-messages.png" ></a></button></td>
                                             <td> <button id="aaa" ><a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir Afficher cette Avis?")\'href="../avis/accept.php?accpt='.$id.'"><image class="image_delete" src="../image/oui.png" ></a></button></td>
                                             <td> <button id="aaa" ><a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir masque cette Avis?")\'href="../avis/refus.php?refs='.$id.'"><image class="image_delete" src="../image/non.png" ></a></button></td>
                                             <td>
                                               <button id="aaa" value="Supprimer"> <a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer?")\'href="../supp/supp_avis.php?deleteid='.$id.'"> <image class="image_delete"src="../image/delete.png" ></a> </button>
                                               </td>
                                                                                       
                                         </tr>' ;
                                     }
        
 echo'                               </tbody>
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
