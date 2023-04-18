<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/style_moniteur.css">
       <style>
         #imggg{
       width: 20px;
       height: 20px;
       margin-right: 1rem;
       }
       </style>

   </head>
   <body >
   <?PHP 
     require("../../PHP/Connexion_BD.php"); 
    session_start();
$query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));    
$nbr_moniteur = mysqli_query($connect,"SELECT COUNT(*) FROM moniteur");
$nbr_moniteur = mysqli_fetch_row($nbr_moniteur); 
$nbr_moniteur = implode("", $nbr_moniteur); 


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
                    <a  href="#" class="active"><span class="moniteur">  Moniteurs </span></a>
                   </li>
                   <li>
                    <a href=" vehicule.php"><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="seance.php"><span class="">Seances</span></a>
                  </li>
                    <li>
                    <a href="message.php"><span class="">Messages</span></a>
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
                         <h3> Moniteurs </h3>
                         <button><a id="nn" href="../ajout/ajout_moniteur.php" ><img src="../image/plus.png"  width="17px" height="17px" ></a> </button>
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      <td> Moniteur </td> 
                                      <td> Cin </td>
                                      <td> Telephone </td>
                                      <td> Email </td> 
                                      <td> Sexe </td> 
                                      <td> Permis </td>
                                   </tr>
                                </thead>  ';

                                $requete = mysqli_query($connect , "SELECT * FROM moniteur");
                                while($ligne = mysqli_fetch_assoc($requete)){ 
                                               $ab=$ligne['Login_moniteur'];
                                        echo ' <tbody>
                                         <tr>
                                             <td>'.$ligne['Nom'].'</td>
                                             <td>'.$ligne['Num_CIN_moniteur'].'</td>
                                             <td>'.$ligne['Num_telephone_moniteur'].'</td>
                                             <td>'.$ligne['Email_moniteur'].'</td>
                                             <td>'.$ligne['Sexe_moniteur'].'</td>
                                             <td>'.$ligne['num_permis'].'</td>
                                            <td> <button id="aaa" value="Supprimer"><a href="../Modifier/modifier_moniteur.php?up='.$ligne["Login_moniteur"].'"><image class="image_delete"  title"="Modifier"  src="../image/crayon.png" ></a></buttom></td>
                                            <td> <button id="aaaa" value="Supprimer"><a title"="Supprimer" onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer?")\' href="../supp/supp_monit.php?login='.$ligne["Login_moniteur"].'"><image class="image_delete" src="../image/delete.png" ></a></buttom></td>
                                             
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
