

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

    
    $sql = "SELECT * FROM ilanver WHERE id = $ilan_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $ilan = $result->fetch_assoc();
    } else {
        echo "İlan bulunamadı.";
        exit;
    }
} else {
    echo "İlan ID'si belirtilmedi.";
    exit;
}


if (isset($_POST['ilan_guncelle'])) {
    $baslik = $_POST['baslik'];
    $resim = $_POST['resim'];
    $metrekare = $_POST['metrekare'];
    $odasayi = $_POST['odasayi'];
    $fiyat = $_POST['fiyat'];

    $sql_update = "UPDATE ilanver SET baslik='$baslik', resim='$resim', metrekare='$metrekare', odasayi='$odasayi', fiyat='$fiyat' WHERE id=$ilan_id";

    if ($conn->query($sql_update) === TRUE) {
        echo "İlan başarıyla güncellendi!";
    } else {
        echo "Hata: " . $sql_update . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/nav.css">
    <nav class="row"> <div class="title-container">

            <a href="admin.php">İlanlar</a>
            <a href="form.php">Formlar</a></div>
        </nav>
    <title>TNC Emlak - İlan Düzenle</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        header, footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        main {
            margin-top: 20px;
        }

        h1 {
            color: #343a40;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #343a40;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #23272b;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
          
        </header>

        <main class="row">
            <h1>İlan Düzenle</h1>

            <form method="post" action="">
                <label for="baslik">Başlık:</label>
                <input type="text" id="baslik" name="baslik" value="<?php echo $ilan['baslik']; ?>" required>

                <label for="resim">Resim URL:</label>
                <input type="text" id="resim" name="resim" value="<?php echo $ilan['resim']; ?>" required>

                <label for="metrekare">Metrekare:</label>
                <input type="text" id="metrekare" name="metrekare" value="<?php echo $ilan['metrekare']; ?>" required>

                <label for="odasayi">Oda Sayısı:</label>
                <input type="text" id="odasayi" name="odasayi" value="<?php echo $ilan['odasayi']; ?>" required>

                <label for="fiyat">Fiyat:</label>
                <input type="text" id="fiyat" name="fiyat" value="<?php echo $ilan['fiyat']; ?>" required>

                <button type="submit" name="ilan_guncelle">Güncelle</button>
            </form>
        </main>

        <footer class="row justify-content-center">
          
        </footer>
    </div>
</body>
</html>
