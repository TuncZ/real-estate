<?php
require_once("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $deleteQuery = "DELETE FROM ilanver WHERE id = $id";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        header("Location: ilanlar.php");
        exit;
    } else {
        echo "İlan silinemedi.";
    }
} else {
    echo "İlan ID belirtilmedi.";
}
?>
