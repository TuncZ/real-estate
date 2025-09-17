<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("baglanti.php");
if(isset($_POST["kaydet"]))
{
  $ad = isset($_POST["ad"]) ? $_POST["ad"] : "";
  $soyad = isset($_POST["soyad"]) ? $_POST["soyad"] : "";
  $oda = isset($_POST["oda"]) ? $_POST["oda"] : "";
  $tel = isset($_POST["tel"]) ? $_POST["tel"] : "default_telefon_degeri";

  $resim = isset($_POST["resim"]) ? $_POST["resim"] : "";
  $gorus = isset($_POST["gorus"]) ? $_POST["gorus"] : "";
  

  $ekle = "INSERT INTO ev2 (ad, soyad, oda,tel, resim,gorus) VALUES ('$ad', '$soyad', '$oda','$tel', '$resim', '$gorus')";

  $calistirekle = mysqli_query($baglanti, $ekle);

  if ($calistirekle) {
      $last_inserted_id = mysqli_insert_id($baglanti);
      $success_message = "Formunuz başarıyla gönderildi! ID: $last_inserted_id";
  } else {
      $error_message = "Form gönderilirken bir hata oluştu: " . mysqli_error($baglanti);
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
   
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/contact.css" />
    <link rel="stylesheet" href="./styles/normalize.css">
    
    <link rel="stylesheet" href="../styles/bootstrap-grid.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kufam:wght@600&display=swap"
      rel="stylesheet"
    />
    
    <link
      rel="icon"
      href="../images/icon.png"
      type="image/x-icon"
      
    />
    <title>TNC Ulaşım</title>

    
    <script src="../js/main.js"></script>
    
    
  </head>
  <body>
    <div class="container-fluid">
      
      <div class="sticky">
      <header class="row">
        <div class="nav-head col-12">
          <div class="logo-and-hamburger-container col-12">
            <div class="logo-container">
              <a href="../index.php" class="logo-link"
                ><img
                class="logo"
                src="../images/icon.png"
                alt="logo"
              />
              <h4 class="logo-head"><br><br><br> TNC Emlak</h4>
              </a>
            </div>
            <div class="hamburgerIcon">
              <span id="openNavIcon" onclick="openNav()">&#9776;</span>
            </div>
          </div>
          <nav id="navigationContainer">
            <div class="closeNavIcon">
              <span onclick="closeNav()">&times;</span>
            </div>
            <ul class="nav-item">
              <a class="nav-link" href="../index.php">
                <li class="nav-unit"><i class="fa-solid fa-house"></i>ANA SAYFA</li>
              </a>
              <a class="nav-link" href="../html/gallery.php">
                <li class="nav-unit"><i class="fa-solid fa-camera"></i>GALERİ</li>
              </a>
              <a class="nav-link" href="../html/membership.php">
                <li class="nav-unit"><i class="fa-solid fa-user"></i>ÜYELİK</li>
              </a><a class="nav-link" href="./ilanlarım.php"
                ><li class="nav-unit"><i class="fa-solid fa-shop"></i>İLANLAR</li></a
              >
              <a class="nav-link" href="#row">
                <li class="nav-unit"><i class="fa-solid fa-phone"></i>BİZE ULAŞIN</li>
              </a>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    
      
      <main class="row">
        <div class="col-12">
          <h1 class="sub-head">Evinizi Siz Seçin</h1>

          <div class="contact-container">
          <?php if (!empty($success_message)) : ?>
                <script>
                    alert("<?php echo $success_message; ?>");
                </script>
            <?php endif; ?>

            <?php if (!empty($error_message)) : ?>
                <script>
                    alert("<?php echo $error_message; ?>");
                </script>
            <?php endif; ?>
            <form action="contact.php" method="POST"  class="col-12 col-sm-10 col-md-8 col-lg-6">
            <table >
            <tr>
                <td><label for="ad">Ad</label></td>
                <td colspan="1"><input type="text" name="ad" id="ad" required></td>
            </tr>
            
            <tr>
                <td>Soyad</td>
                <td colspan="1"><input type="text" name="soyad" id="soyad" required></td>
            </tr>
            
            <tr>
                <td>Oda Sayısı</td>
                <td><input type="number" name="oda" id="oda" min="0" max="120" placeholder=""></td>
            </tr>
            <tr>
                <td>Telefon Numarası</td>
                <td><input type="tel" name="tel" id="tel"  placeholder=""></td>
            </tr>
            <tr>
                <td>Benzer Resim ekleyin</td>
                <td><input type="file" name="resim" id="resim"></td>
            </tr>
            
            
            
            
            
           
                    <td>Eviniz Özellikleri</td>
                    <td>
                        <textarea name="gorus" id="gorus" placeholder="Nasıl bir evde oturmak isterdiniz"></textarea>
                    </td>    
                </tr>
            </tr>
            
                        <tr>
            <td colspan="2">
            <input type="submit" name="kaydet" id="kaydet" value="KAYDET">
            <input type="reset" name="sil" id="sil" value="TEMİZLE">
 
            </td>
            </tr>
       
        </table>
            </form>
          </div>
        </div>
      </main>

    
  <footer class="row justify-content-center">
    <div class="footer-block col-lg-10">
      <div class="info-block row">
        <div class="address col-12 col-md">
          <h4><u>ADDRESS</u></h4>
              <address>
                Bağcılar Demirkapı Mahellesi <br />
                İstanbul/Türkiye<br />Tel: +90 (546) 598 44 83
              </address>
            </div>
            <div class="office-time col-12 col-md">
              <h4><u>ÇALIŞMA SAATLERİMİZ</u></h4>
              <p>Pazartesi Cuma<br />10:00 | 18:00</p>
            </div>
            <div class="follow col-12 col-md">
              <h4><u>BİZİ TAKİP EDİN</u></h4>
              <p>
            <a
              class="social-link"
              href="https://www.facebook.com/Facebook"
             target="_blank" >Facebook</a
            >
          </p>
          <p>
            <a
              class="social-link"
              href="https://www.instagram.com/memet.m.tunc/"
             target="_blank" >Instagram</a
            >
          </p>
          <p>
            <a class="social-link" target="_blank" href="https://twitter.com/twitter"
              >Twitter</a
            >
          </p>
        </div>
      </div>
      <div class="col-12">
        <p class="credits">
          © 2023 Hakları Saklıdır
          
        </p>
      </div>
    </div>
  </footer>
    </div>
  </body>
</html>