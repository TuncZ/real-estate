

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tncemlak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


$sql = "SELECT * FROM ilanver";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TNC Emlak - İlanlar</title>
    
</head>
<body>
    <div class="container-fluid">
        <header class="row">
           
        </header>

        <main class="row">
            <h1>İlanlar</h1>

            <?php
         
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div>";
                    echo "<h2>" . $row["baslik"] . "</h2>";
                    echo "<p>Metrekare: " . $row["metrekare"] . "</p>";
                    echo "<p>Oda Sayısı: " . $row["odasayi"] . "</p>";
                    echo "<p>Fiyat: " . $row["fiyat"] . "</p>";
                    echo "<a href='ilan_duzenle.php?id=" . $row["id"] . "'>Düzenle</a> | ";
                    echo "<a href='ilan_sil.php?id=" . $row["id"] . "'>Sil</a>";
                    echo "</div>";
                }
            } else {
                echo "Henüz ilan bulunmamaktadır.";
            }

            $conn->close();
            ?>
        </main>

        <footer class="row justify-content-center">
           
        </footer>
    </div>
</body>
</html>
