<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Linking external css -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/gallery.css" />
  <!-- Linking Bootstrap Grid System -->
  <link rel="stylesheet" href="../styles/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="./styles/normalize.css">
  <!-- Importing google fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@600&display=swap" rel="stylesheet" />
  <!-- Adding favicon -->
  <link rel="icon" href="../images/icon.png" type="image/x-icon" />
  <title>TNC Galeri</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 1000, 
      dots: true, 
      arrows: true 
    });
  });
</script>

  
  <script src="../js/main.js"></script>
 
</head>

<body>
  <div class="container-fluid">
   
    <div class="sticky">
    <header class="row">
      <div class="nav-head col-12">
        <div class="logo-and-hamburger-container col-12">
          <div class="logo-container">
            <a href="../index.php" class="logo-link"><img
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
            <a class="nav-link" href="..//index.php">
              <li class="nav-unit"><i class="fa-solid fa-house"></i>ANA SAYFA</li>
            </a>
            <a class="nav-link" href="#">
              <li class="nav-unit"><i class="fa-solid fa-camera"></i>GALERİ</li>
            </a>
            <a class="nav-link" href="membership.php">
              <li class="nav-unit"><i class="fa-solid fa-user"></i>ÜYELİK</li>
            </a><a class="nav-link" href="./ilanlarım.php"
                ><li class="nav-unit"><i class="fa-solid fa-shop"></i>İLANLAR</li></a
              >
            <a class="nav-link" href="contact.php">
              <li class="nav-unit"><i class="fa-solid fa-phone"></i>BİZE ULAŞIN</li>
            </a>
          </ul>
        </nav>
      </div>
    </div>
    </header>

   
    <main class="row">
      <div class="col-12">
        <h1 class="sub-head">Etrafına Bir Bak</h1>
        
        <div class="slider">
          <div>
            <div class="gallery-item col-12 col-md-9 center">
              <img src="../images/main_image.jpg" alt="main-picture" class="pic1" />
            </div>
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture1.jpg" alt="picture1" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture2.jpg" alt="picture2" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture3.jpg" alt="picture3" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture4.jpg" alt="picture4" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture5.jpg" alt="picture5" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture6.jpg" alt="picture6" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture7.jpg" alt="picture7" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture8.jpg" alt="picture8" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture9.jpg" alt="picture9" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture10.jpg" alt="picture10" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture11.jpg" alt="picture11" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture12.jpg" alt="picture12" />
          </div>
        </div>
        <div class="gallery row justify-content-center">
          <div>
            <div class="gallery-item col-12 col-md-9 center">
              <img src="../images/main_image.jpg" alt="main-picture" class="pic1" />
            </div>
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture1.jpg" alt="picture1" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture2.jpg" alt="picture2" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture3.jpg" alt="picture3" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture4.jpg" alt="picture4" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture5.jpg" alt="picture5" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture6.jpg" alt="picture6" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture7.jpg" alt="picture7" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture8.jpg" alt="picture8" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture9.jpg" alt="picture9" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture10.jpg" alt="picture10" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture11.jpg" alt="picture11" />
          </div>
          <div class="gallery-item col-12 col-md-6 col-lg-3">
            <img src="../images/picture12.jpg" alt="picture12" />
          </div>
        </div></div>
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