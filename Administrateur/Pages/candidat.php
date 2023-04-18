<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/Style_condidat.css">
       <script defer src="script.js"></script>
       <style>
       #imggg{
    width: 20px;
    height: 20px;
  margin-right: 1rem;
}
</style>
         

   </head>
   <body class="flex-container" class="flex-item">
   <?PHP 
   require("../../PHP/Connexion_BD.php");  
    session_start();
$query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));
$nbr_condidat = mysqli_query($connect,"SELECT COUNT(*) FROM candidat");
$nbr_condidat = mysqli_fetch_row($nbr_condidat); 
$nbr_condidat = implode("", $nbr_condidat); 

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
                    <a href="#" class="active"><span class="condidats">Candidats</span></a>
                   </li>
                   <li>
                    <a  href="moniteur.php"><span class="moniteur">  Moniteurs </span></a>
                   </li>
                   <li>
                    <a href="vehicule.php"><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="Seance.php" ><span class="">Seances</span></a></li>     
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
                         <h3> Condidats </h3>
                         <button><a id="nn" href="../ajout/ajout _cand.php" ><img src="../image/plus.png"  width="17px" height="17px" ></a> </button>
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      <td> Nom </td> 
                                      <td> Cin </td>
                                      <td> Telephone</td>
                                      <td> </td>  
                                   </tr>
                                </thead>  ';
                              

                                $requete = mysqli_query( $connect, "SELECT * FROM candidat");
                                while($row = mysqli_fetch_assoc($requete)){ 
                                           $id=$row['Login_candidat'];
                                           $nom=$row['Nom'];
                                           $cin=$row['Num_CIN_candidat'];
                                           $tel=$row['Num_telephone'];

                                           
                                        echo ' <tbody>
                                         <tr>
                                             <td>'.$nom.'</td>
                                             <td>'.$cin.'</td>
                                             <td>'.$tel.'</td>
                                             <td> <button id="aaa" value="supp"><a title="Voir plus"  href="../afficher/affiche_candidat.php?dis='.$row['Login_candidat'].'"><image class="image_delete" src="../image/user1.png" ></a></buttom></td>
                                             <td> <button id="aaa" value="Modifier"><a title"="Modifier"  href="../Modifier/modif_cand.php?up='.$row['Login_candidat'].'"><image class="image_delete" src="../image/crayon.png" ></a></button></td>
                                              <td> <button id="aaa" value="Supprimer"><a title"="Supprimer" onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer?")\' href="../supp/supp_condidat.php?deleteif='.$row['Login_candidat'].'"><image class="image_delete" src="../image/delete.png" ></a></buttom></td>
                                             
                                 
           
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
</html>   ';
?>
