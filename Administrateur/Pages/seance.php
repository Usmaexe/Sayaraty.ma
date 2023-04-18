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
$name=mysqli_query($connect,"SELECT Nom FROM administrateur ");
$name = mysqli_fetch_row($name); 
$name = implode("",$name); 
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
               <a href="#" class="active" ><span class="">Seances</span></a>
               </li>
                    
                <li>
                <a href="message.php"  ><span class="">Messages</span></a>
               </li>
               
               <li>
               <a href="avis.php"><span class="">Avis</span></a>
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
                <div id="Submenu" class="sub-menu-wrap" >
                    <div class="Sub-menu">
                      <div class="user-infos" >
                       <img src="../image/user.png">
                       <h3>'.$_SESSION["login"].'</h3>
                      </div>
                      <hr>
                      <a href="#" class="sub-menu-link">
                        <img src="../image/profile.png">
                        <p>Edit Profile</p>
                        <span>><span>
                        </a>
    
    
                        <a href="#" class="sub-menu-link">
                        <img src="../image/setting.png">
                        <p>Edit Profile</p>
                        <span>><span>
                        </a>
    
                        <a href="#" class="sub-menu-link">
                        <img src="../image/help.png">
                        <p>Edit Profile</p>
                        <span>><span>
                        </a>
    
                        <a href="#" class="sub-menu-link">
                        <img src="../image/logout.png">
                        <p>Edit Profile</p>
                        <span>><span>
                        </a>
                    </div>
    
                 </div>
             </div>
        </header>
        <main>
          
             
        <div class="recent">
                <div class="project">
                   <div class="card2">
                      <div class="card_h">
                         <h3> Sceances </h3>
                         <button><a id="nn" href="../ajout/ajout_sc.php" ><img src="../image/plus.png"  width="17px" height="17px" ></a> </button>
                      </div>
                      <div class="card_body">
                        <div class="table_res">
                            <table width="100%">
                                <thead>
                                   <tr>
                                      
                                      
                                      
                                      <td> Date </td> 
                                      <td> Heure </td>  
                                      <td> Candidat</td>
                                      <td> Moniteur </td>
                                      <td> Vehicule</td> 
                                   </tr>
                                </thead>' ;

                                $requete = mysqli_query( $connect , "SELECT * FROM seance");
                                while($ligne = mysqli_fetch_assoc($requete)) { 
                                 $idd=$ligne['ID_SEANCE']  ; 
                                 $id=$ligne['id_candidat'];
                                 $iv=$ligne['id_moniteur'];
                                 $requet = mysqli_query($connect, "SELECT Nom FROM candidat where Login_candidat like '$id'");
                                 $candidat=mysqli_fetch_row($requet);
                                 $requet = mysqli_query($connect, "SELECT * FROM moniteur where Login_moniteur='$iv'");
                                 $moniteur=mysqli_fetch_row($requet);
                                 if(!$candidat==null){
                                        echo ' <tbody>
                                         <tr>
                                    
                                         <td>'.$ligne['Date'].'</td>
                                         <td>'.$ligne['Heure'].'</td>
                                             <td>'.$candidat[0].'</td>
                                             ';
                                             if($moniteur==null){
                                             echo'
                                             <td> il faut ajoute un moniteur </td>';
                                              }else{
                                             echo'
                                             <td>'.$moniteur[2].'</td>';
                                              }
                                              echo'
                                              ';
                                             if($ligne['id_vehicule']==null){
                                                
                                             echo'
                                             <td> il faut ajoute une vehicule </td>';
                                              }else{
                                             echo'
                                             <td>'.$ligne['id_vehicule'].'</td>
                                             ';
                                              }
                                              echo'
                                              <td> <button id="aaa" value="Modifier"><a title"="Modifier"  href="../Modifier/modif_sc.php?up='.$idd.'"><image class="image_delete" src="../image/crayon.png" ></a></button></td>
                                             
                                              ';
                                              if($ligne['Valide']==1){
                                                echo'
                                                <td> <button id="aaa" ><image class="image_delete" src="../image/oui.png" ></buttom></td>
                                               ';
                                                }else{
                                                echo'
                                                <td> <button id="aaa" ><a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir accepter?")\'href="../seance/accepter.php?accpt='.$idd.'"><image class="image_delete" src="../../IMG/chek.png" ></a></buttom></td>
                                               ';
                                                }
                                              echo'
                                              
                                              <td>
                                              
                                               <button id="aaa" value="Supprimer"> <a onclick=\' javascript: return confirm("Êtes-vous sûr de vouloir supprimer la seance?")\'href="../supp/suppsea.php?deleteid='.$idd.'"> <image class="image_delete"src="../image/delete.png" ></a> </button>
                                               </td>

                                         </tr>' ;
                                     }
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
