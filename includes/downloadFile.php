<?php 


(isset($_GET['id'])) ? $id = $_GET['id'] : $id = "";

$query = "SELECT doc FROM staff_sec_a WHERE id=$id";
$exec  = mysqli_query($connection, $query);



while ($row = mysqli_fetch_assoc($exec)) {
    $doc = $row['doc'];
}


if (file_exists($doc)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($doc).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($doc));
    readfile($doc);
    exit;
}





?>



