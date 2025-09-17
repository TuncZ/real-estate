<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tncemlak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


if (isset($_POST['ilan_ekle'])) {
    $baslik = $_POST['baslik'];
    $resim = $_POST['resim'];
    $metrekare = $_POST['metrekare'];
    $odasayi = $_POST['odasayi'];
    $fiyat = $_POST['fiyat'];

    
    $sql = "INSERT INTO ilanver (baslik, resim, metrekare, odasayi, fiyat) VALUES ('$baslik', '$resim', '$metrekare', '$odasayi', '$fiyat')";

    if ($conn->query($sql) === TRUE) {
        echo "İlan başarıyla eklendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
