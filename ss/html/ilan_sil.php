

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tncemlak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $ilan_id = $_GET['id'];

  
    $sql_delete = "DELETE FROM ilanver WHERE id = $ilan_id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "İlan başarıyla silindi!";
    } else {
        echo "Hata: " . $sql_delete . "<br>" . $conn->error;
    }
} else {
    echo "İlan ID'si belirtilmedi.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TNC Emlak - İlan Sil</title>
   
</head>
<body>
    <div class="container-fluid">
        <header class="row">
           
        </header>

        <main class="row">
            <h1>İlan Sil</h1>
            <p>İlan başarıyla silindi.</p>
        </main>

        <footer class="row justify-content-center">
            
        </footer>
    </div>
</body>
</html>
