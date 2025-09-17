<?php
include 'db.php';

$query = "SELECT * FROM ev2";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Sorgu hatası: " . mysqli_error($conn));
}

// Silme işlemi
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["sil"])) {
    $sil_id = $_GET["sil"];
    
    // 'id' anahtarının dizide var olup olmadığını kontrol et
    if (is_numeric($sil_id)) {
        $sil_query = "DELETE FROM ev2 WHERE id = $sil_id";
        
        if (mysqli_query($conn, $sil_query)) {
            echo "Kayıt başarıyla silindi!";
            // İşlem tamamlandıktan sonra sayfayı yenilemek için aşağıdaki satırı ekleyin
            header("Refresh: 2; URL=form.php");
        } else {
            echo "Silme hatası: " . mysqli_error($conn);
        }
    } else {
        echo "Geçersiz ID parametresi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>Form Görme</title>
</head>

<body>
<nav class="row"> <div class="title-container">
            <a href="admin.php">İlanlar</a>
            <a href="form.php">Formlar</a></div>
        </nav>
    <div class="ilan">
        <main class="row">
            <h1></h1>

            <table border="" style="width:100%">
                <tr>
                    <th>ad</th>
                    <th>soyad</th>
                    <th>oda</th>
                    <th>tel </th>
                    <th>resim</th>
                    <th>gorus</th>
                    <th>İşlemler</th>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";

                    echo "<td>" . $row['ad'] . "</td>";
                    echo "<td>" . $row['soyad'] . "</td>";
                    echo "<td>" . $row['oda'] . "</td>";
                    echo "<td>" . $row['tel'] . "</td>";

                    echo "<td><img src='" . $row['resim'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                    echo "<td>" . $row['gorus'] . "</td>";
                    echo "<td><a class='delete-link' href='?sil=" . $row['id'] . "'>Sil</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </main>
    </div>
</body>

</html>
