<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/normalize.css">
    
    <link rel="stylesheet" href="./styles/bootstrap-grid.min.css" />
    
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
      
    >
    <title>TNC Emlak</title>

    
    <script src="./js/main.js"></script>
    
  </head>
  <body>
    <div class="container-fluid">
     
      <div class="sticky">
      <header class="row">
        <div class="nav-head col-12">
          <div class="logo-and-hamburger-container col-12">
            <div class="logo-container">
              <a href="index.php" class="logo-link"
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
              <a class="nav-link" href="#row"><li class="nav-unit"><i class="fa-solid fa-house"></i>  ANA SAYFA</li></a>
              <a class="nav-link" href="./html/gallery.php"
                ><li class="nav-unit"><i class="fa-solid fa-camera"></i>GALERİ</li></a
              >
              <a class="nav-link" href="./html/membership.php"
                ><li class="nav-unit"><i class="fa-solid fa-user"></i>ÜYELİK</li></a
              >
              <a class="nav-link" href="./html/ilanlarım.php"
                ><li class="nav-unit"><i class="fa-solid fa-shop"></i></i>İLANLAR</li></a
              >
              <a class="nav-link" href="html/contact.php" target="_self"
                ><li class="nav-unit"><i class="fa-solid fa-phone"></i>BİZE ULAŞIN</li></a
              >
            </ul>
          </nav>
        </div>
      </div>
    </header>

      
      <main class="row justify-content-center">
        <div class="main-body col-12">  
          <div class="main-body-section col-7 col-lg-8 col-xl-9">
            <h1 class="sub-head">TNC Emlak</h1>
            <p class=" main-body-text">
              Gelin şehri değiştirecek projeyi keşfedin ve
             <br> Yeni bir yaşam tarzına ilham verin
            </p>
          </div>
        </div>
        <div class="about col-11">
          <h1 class="about-text sub-head"> BİZ KİMİZ</h1>
          <p class="about-text main-body-text">
            TNC Emlak, müşterilere kapsamlı bir emlak yelpazesi sunan bir emlak kolu grubudur. <br>
Yatırım ve geliştirmede yüksek kaliteli profesyonel hizmetler <br> Otuz yıllık sürdürülebilir deneyim sayesinde
geliştirme sayesinde şirket Banglore'daki en büyük <br> arazi toplayıcılardan biri haline geldi
ve Hindistan genelinde <br> Ülke genelinde birçok arazi edinimi anlaşmasını resmileştirdi <br>
ve gayrimenkul alanında saygın isimlerle başarılı ortak girişimlere sahiptir.
          </p>
        </div>
        <div class="btn col-12">
          <a href="./html/contact.php"
            ><button class="btn-enq">BAŞVURU YAPIN</button></a
          >
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