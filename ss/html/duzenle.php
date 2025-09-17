<?php
require_once("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM ilanver WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $ilan = mysqli_fetch_assoc($result);
    } else {
        echo "İlan bulunamadı.";
        exit;
    }
} else {
    echo "İlan ID belirtilmedi.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css" />
 
    <title>TNC İlan Düzenle</title>
</head>
<body>

    <div class="container-fluid">
        <header class="row">
          
        </header>

        <main class="row">
            <h1>İlan Düzenle</h1>

           
            <form method="post" action="duzenle.php">
                <input type="hidden" name="id" value="<?php echo $ilan['id']; ?>">
                <label for="baslik">Başlık:</label>
                <input type="text" id="baslik" name="baslik" value="<?php echo $ilan['baslik']; ?>" required>
                
                <button type="submit" name="duzenle">Düzenle</button>
            </form>
        </main>

        <footer class="row justify-content-center">
            
        </footer>
    </div>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["duzenle"])) {
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
   
    $updateQuery = "UPDATE ilanver SET baslik = '$baslik' WHERE id = $id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        header("Location: ilanlar.php");
        exit;
    } else {
        echo "İlan güncellenemedi.";
    }
}
?>
