<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="../image/SAYARATY_Icon.png">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="../styles/Style_vehicule.css">
       <style>
         .image_delete{
    width:20px;
}
#aaa{
  
    background:#ffffff;
    border-radius:10px ;
    color:#fff;
    font-size: .8rem;
    padding: 0.5rem 1rem ;
    margin-right: -30px;
    border: 1px solid #ffffff;

}
       </style>
   </head>
   <body>
   <?PHP 
     require("../../PHP/Connexion_BD.php"); 
    session_start();
    $query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));
$nbr_voiture = mysqli_query( $connect ,"SELECT COUNT(*) FROM vehicule");
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
                    <a href="#" class="active" ><span class="voitures">Vehicules</span></a>
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
                         <h3> Vehicules </h3>
                         <button><a id="nn" href="../ajout/ajout_v.php" ><img src="../image/plus.png"  width="17px" height="17px" ></a> </button>
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      <td> Matricule </td>
                                      <td> Marque </td> 
                                      <td> Modele </td>
                                   </tr>
                                </thead>' ;

                                $requete = mysqli_query( $connect , "SELECT Num_matricule,Marque,Modele,Disponibilite FROM  vehicule ");
                                while($ligne = mysqli_fetch_assoc($requete)) { 

                                        echo ' <tbody>
                                         <tr>
                                          
                                             <td>'.$ligne['Num_matricule'].'</td>
                                             <td>'.$ligne['Marque'].'</td>
                                             <td>'.$ligne['Modele'].'</td>
                                             <td> <button id="aaa" value="Supprimer"><a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer?")\' href="../supp/supp_vehicule.php?delete='.$ligne['Num_matricule'].'"><image class="image_delete" src="../image/delete.png" ></a></buttom></td>

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
