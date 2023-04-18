<!DOCTYPE html>
<!doctype html>
<html>
   <head> 
       <meta charset="UTF-8">
       <title> Admin page</title>
       <link rel="icon" href="image/SAYARATY_Icon.png">
       <link rel="stylesheet" href="styles/Style_admin.css">
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
       <link rel="stylesheet" href="styles/style.css">
    

       <style>
        .cherche input::placeholder {
    justify-content: center;
    align-items: center;
}
#hiii{
   
   margin-right: 1rem;
cursor: pointer;
margin-left: 30px;
border-radius: 0%;
}
#imggg{
    width: 20px;
    height: 20px;
  margin-right: 1rem;
}
         #imgg{

    cursor: pointer;
}
#nn{
    margin: 0px;
    padding: 0px;
}
        </style>

   </head>
   <body>
   <?PHP 
     require("../PHP/Connexion_BD.php"); 
    session_start();	

$nbr_moniteur = mysqli_query($connect,"SELECT COUNT(*) FROM moniteur");
$nbr_moniteur = mysqli_fetch_row($nbr_moniteur); 
$nbr_moniteur = implode("", $nbr_moniteur); 
$nbr_condidat = mysqli_query($connect,"SELECT COUNT(*) FROM candidat");
$nbr_condidat = mysqli_fetch_row($nbr_condidat); 
$nbr_condidat = implode("", $nbr_condidat); 
$nbr_voiture = mysqli_query($connect,"SELECT COUNT(*) FROM vehicule");
$nbr_voiture = mysqli_fetch_row($nbr_voiture); 
$nbr_voiture = implode("", $nbr_voiture); 
$nbr_msg = mysqli_query($connect,"SELECT COUNT(*) FROM  Message ");
$nbr_msg = mysqli_fetch_row($nbr_msg); 
$nbr_msg = implode("",$nbr_msg); 
 

   echo '  <div class="sidebar">
            <div class="brand">
                <a href="#"><img src="image/SAYARATY_LOGO.png"><a>
            </div>
            <div class="menu">
                <ul>
                   <li>
                   <a href="#" class="active"><span >Accueil</span></a>
                   </li>
                   <li>
                    <a href="Pages/candidat.php"><span class="candidats">Candidats</span></a>
                   </li>
                   <li>
                    <a  href="Pages/moniteur.php"><span class="moniteur">Moniteurs</span></a>
                   </li>
                   <li>
                    <a href="Pages/vehicule.php"><span class="voitures">Vehicules</span></a>
                   </li>
                   <li>
                   <a href="Pages/Seance.php"><span class="">Seances</span></a></li>
                    <li>
                    <a href="Pages/message.php"><span class="">Messages</span></a>
                   </li>
                  
                   <li>
                   <a href="Pages/avis.php"><span class="">Avis</span></a>
                  </li>   
                 
                 <li>
                   <a href="Pages/profile.php"><span class="">Profil</span></a>
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

                Tableau De Bord
             </h2>';
             $query = "SELECT * FROM administrateur WHERE Login_admin='".$_SESSION["login"]."'";
$ligne = mysqli_fetch_row(mysqli_query($connect,$query));  
echo'
             
             
       
            <div class="condidat">
                <img id="hi" src="up/'.$ligne[6].'"  width="30px" height="30px" >
                <div >
                    <h4 id="Menu">'.$_SESSION["login"].'</h4>
                    <small>Admin</small></a>
                    
                </div>
                <a href="../PHP/Deconnexion.php">
                <img id="hiii"  src="../IMG/logout.png" alt="" title="Deconnexion" width="25px" height="25px">
                </a> 
                 </div>  
                        
        </header>
       
        <main >
            <div class="dash">
                <div class="card">
                    <div>
                        <h1>'.$nbr_condidat.'</h1>
                        <a href="Pages/candidat.php"><span>condidats</span></a>
                        
                    </div>
                    <div>
                        <span class="user"></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <h1>'.$nbr_moniteur.'</h1>
                        <a href="Pages/moniteur.php"><span>moniteurs</span></a>
                    </div>
                    <div>
                        <span class="moniteur"></span>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <h1>'.$nbr_voiture.'</h1>
                        <a href="Pages/vehicule.php"><span>vehicules</span></a>
                    </div>
                    <div>
                        <span class="voitures"></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <h1>'.$nbr_msg.'</h1>
                        <a href="Pages/message.php"><span >Message</span></a>
                    </div>
                    <div>
                        <span class="user"></span>
                    </div>
                </div>
            </div>
             
            <div class="recent">
        
            <div class="project" >
               <div class="card2">
                  <div class="card_h">
                     <h3>Condidats </h3>
                     <a id="nn" href="Pages/candidat.php" ><img src="../IMG/task.png"  width="40px" height="40px" ></a>
                  </div>
                  <div class="card_body">
                    <div class="table_res">
                        <table width="100%">
                            <thead>
                               <tr>
                                  <td> Nom </td> 
                                  <td> motant </td>
                                  <td> CIN </td>  
  
                               </tr>
                            </thead>  '; 
                                  $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                                  $requete = mysqli_query( $connect, "SELECT * FROM candidat");
                                  $utilisateurs = array();
                                  while ($row = mysqli_fetch_assoc($requete)) {
                                    $utilisateurs[] = $row;
                                    $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                                      $utilisateurs = array_slice($utilisateurs, 0, $nombre_utilisateurs);
                                       $total_utilisateurs = count($utilisateurs);
                                  }
                                  foreach ($utilisateurs as $utilisateur) {                       
                                
                            
    
                                    echo ' <tbody>
                                     <tr>
                                         <td>'. $utilisateur['Nom'].'</td>
                                         <td>'. $utilisateur['Prix_payer'].'</td>
                                         <td>
                                             <span class="status_prog"></span> 
                                             '. $utilisateur['Num_CIN_candidat'].' </td> 
                                             
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
        <div class="recent1">
        
        <div class="project" >
           <div class="card2">
              <div class="card_h">
                 <h3> Moniteurs </h3>
                     <a id="nn" href="Pages/moniteur.php" ><img src="../IMG/task.png"  width="40px" height="40px" ></a> 
              </div>
              <div class="card_body">
                <div class="table_res">
                    <table width="100%">
                        <thead>
                           <tr>
                              <td> Nom </td> 
                              <td> CIN </td>
                              <td> Permie </td>  

                           </tr>
                        </thead>  ';
                        $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                        $requete = mysqli_query($connect, "SELECT Nom,num_CIN_moniteur,num_permis FROM moniteur");
                        $utilisateurs = array();
                      
                        
                            while ($row = mysqli_fetch_assoc($requete)) {
                                $utilisateurs[] = $row;
                                $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                                  $utilisateurs = array_slice($utilisateurs, 0, $nombre_utilisateurs);
                                   $total_utilisateurs = count($utilisateurs);
                              }
                              foreach ($utilisateurs as $utilisateur) {  

                                echo ' <tbody>
                                 <tr>
                                     <td>'.$utilisateur['Nom'].'</td>
                                     <td>'.$utilisateur['num_CIN_moniteur'].'</td>
                                     <td>
                                         <span class="status_prog"></span> 
                                         '.$utilisateur['num_permis'].' </td> 
                                         
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

    <div class="recent1">    
    <div class="project" >
       <div class="card2">
          <div class="card_h">
             <h3> Vehicules </h3>
            <a id="nn" href="Pages/vehicule.php" ><img src="../IMG/task.png"  width="40px" height="40px" ></a> 
          </div>
          <div class="card_body">
            <div class="table_res">
                <table width="100%">
                    <thead>
                       <tr>
                          
                          <td> Modele </td>
                          <td> Matricule </td>
                          <td> Disponibilite </td>  

                       </tr>
                    </thead>  ';
                      $i=0;
                   
                      
                    $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                    $requete = mysqli_query($connect, "SELECT Num_matricule,Modele,Disponibilite FROM  vehicule  ");
                    $utilisateurs = array();
                  
                    
                        while ($row = mysqli_fetch_assoc($requete)) {
                            $utilisateurs[] = $row;
                            $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                              $utilisateurs = array_slice($utilisateurs, 0, $nombre_utilisateurs);
                               $total_utilisateurs = count($utilisateurs);
                          }
                          foreach ($utilisateurs as $utilisateur) {  


                            echo ' <tbody>
                             <tr>
                                 <td>'.$utilisateur['Modele'].'</td>
                                 <td>'.$utilisateur['Num_matricule'].'</td>
                                 <td>
                                     <span class="status_prog"></span> 
                                     '.$utilisateur['Disponibilite'].' </td> 
                                     
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
        
<div class="recent1">    
<div class="project" >
   <div class="card2">
      <div class="card_h">
         <h3> Messages </h3>
         <a id="nn" href="Pages/Message.php" ><img src="../IMG/task.png"  width="40px" height="40px" ></a> 
      </div>
      <div class="card_body">
        <div class="table_res">
            <table width="100%">
                <thead>
                   <tr>
                      <td> Nom </td> 
                      <td> Email </td>
                      <td> Objet </td> 

                   </tr>
                </thead>  ';
                 
                
                  
                $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                $requete = mysqli_query($connect, "SELECT Nom , Email, Objet, Contenu FROM  Message ");
                $utilisateurs = array();
              
                
                    while ($row = mysqli_fetch_assoc($requete)) {
                        $utilisateurs[] = $row;
                        $nombre_utilisateurs = 2; // nombre spécifié d'utilisateurs à afficher
                          $utilisateurs = array_slice($utilisateurs, 0, $nombre_utilisateurs);
                           $total_utilisateurs = count($utilisateurs);
                      }
                      foreach ($utilisateurs as $utilisateur) {  


                        echo ' <tbody>
                         <tr>
                             <td>'.$utilisateur['Nom'].'</td>
                             <td>'.$utilisateur['Email'].'</td>
                             <td>'.$utilisateur['Objet'].'</td>
 
                                 
                         </tr>' ;
                     }




 echo'                              </tbody>
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