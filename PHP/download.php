<?php
require("../PHP/Connexion_BD.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sélectionner le document avec l'id préciser
    $sql = "SELECT url_document FROM document WHERE id_document = ".$id;
    $url = mysqli_fetch_row(mysqli_query($connect,$sql));
    header("location:".$url[0]);
    // $stmt = mysqli_prepare($connect, $sql);
    // mysqli_stmt_bind_param($stmt, "i", $id);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_bind_result($stmt, $pdf_data, $pdf_name);
    // mysqli_stmt_fetch($stmt);
    // mysqli_stmt_close($stmt);

    // modifier les headers pour afficher le PDF dans un nouveau tab
    // header('Content-Type: application/pdf');
    echo $pdf_data;
} else {
    echo "Error: ID parameter is not set.";
}
