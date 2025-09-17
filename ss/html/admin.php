<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tncemlak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["ilan_ekle"])) {
        $baslik = $_POST["baslik"];
        $resim = $_POST["resim"];
        $metrekare = $_POST["metrekare"];
        $odasayi = $_POST["odasayi"];
        $fiyat = $_POST["fiyat"];

        $sql_insert = "INSERT INTO ilanver (baslik, resim, metrekare, odasayi, fiyat) VALUES ('$baslik', '$resim', '$metrekare', '$odasayi', '$fiyat')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "İlan başarıyla eklendi!";
        } else {
            echo "Hata: " . $sql_insert . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["ilan_duzenle"])) {
        $ilan_id = $_POST["ilan_id"];
        $baslik = $_POST["baslik"];
        $resim = $_POST["resim"];
        $metrekare = $_POST["metrekare"];
        $odasayi = $_POST["odasayi"];
        $fiyat = $_POST["fiyat"];

        $sql_update = "UPDATE ilanver SET baslik='$baslik', resim='$resim', metrekare='$metrekare', odasayi='$odasayi', fiyat='$fiyat' WHERE id=$ilan_id";

        if ($conn->query($sql_update) === TRUE) {
            echo "İlan başarıyla güncellendi!";
        } else {
            echo "Hata: " . $sql_update . "<br>" . $conn->error;
        }
    }
}

if (isset($_GET["edit_id"])) {
    $ilan_id = $_GET["edit_id"];
    $sql_edit = "SELECT * FROM ilanver WHERE id = $ilan_id";
    $result_edit = $conn->query($sql_edit);

    if ($result_edit->num_rows > 0) {
        $ilan = $result_edit->fetch_assoc();
    } else {
        echo "İlan bulunamadı.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>TNC Emlak - İlan Ekle/Düzenle</title>
 

    
    
    <link rel="stylesheet" href="../styles/nav.css">
</head>
<body>
    <div class="container-fluid">
    <nav class="row"> <div class="title-container">
            <a href="admin.php">İlanlar</a>
            <a href="form.php">Formlar</a></div>
        </nav>
        <header class="row">
           
        </header>

        <main class="row">
            <h1>İlan Ekle/Düzenle</h1>

            <form method="post" action="">
                
                <?php if (isset($ilan)): ?>
                    <input type="hidden" name="ilan_id" value="<?php echo $ilan['id']; ?>">
                <?php endif; ?>

                <label for="baslik">Başlık:</label>
                <input type="text" id="baslik" name="baslik" value="<?php echo isset($ilan) ? $ilan['baslik'] : ''; ?>" required>

                <label for="resim">Resim URL:</label>
                <input type="text" id="resim" name="resim" value="<?php echo isset($ilan) ? $ilan['resim'] : ''; ?>" required>

                <label for="metrekare">Metrekare:</label>
                <input type="text" id="metrekare" name="metrekare" value="<?php echo isset($ilan) ? $ilan['metrekare'] : ''; ?>" required>

                <label for="odasayi">Oda Sayısı:</label>
                <input type="text" id="odasayi" name="odasayi" value="<?php echo isset($ilan) ? $ilan['odasayi'] : ''; ?>" required>

                <label for="fiyat">Fiyat:</label>
                <input type="text" id="fiyat" name="fiyat" value="<?php echo isset($ilan) ? $ilan['fiyat'] : ''; ?>" required>

                <?php if (isset($ilan)): ?>
                    <button type="submit" name="ilan_duzenle">İlanı Düzenle</button>
                <?php else: ?>
                    <button type="submit" name="ilan_ekle">İlan Ekle</button>
                <?php endif; ?>
            </form>
        </main>

        <footer class="row justify-content-center">
            
        </footer>
    </div>
</body>
</html>
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

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tncemlak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $ilan_id = $_GET["id"];
    $sql_delete = "DELETE FROM ilanver WHERE id = $ilan_id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "İlan başarıyla silindi!";
        
        header("Refresh: 2; URL=admin.php");
    } else {
        echo "Hata: " . $sql_delete . "<br>" . $conn->error;
    }
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
            

            if ($result !== false && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div>";
                    echo "<h2>" . $row["baslik"] . "</h2>";
                    echo "<p>Metrekare: " . $row["metrekare"] . "</p>";
                    echo "<p>Oda Sayısı: " . $row["odasayi"] . "</p>";
                    echo "<p>Fiyat: " . $row["fiyat"] . "</p>";
                    echo "<a href='ilan_duzenle.php?id=" . $row["id"] . "' class='edit-button'>Düzenle</a>| ";
                    echo "<a href='?id=" . $row["id"] . "' class='delete-button'>Sil</a>";
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
