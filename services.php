<?php
require("includes/db_config.php");
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Vanilla | Usluge</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Playfair+Display:400,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo serif">
                <a href="index.php">Vanilla</a>
              </div>
            </div>

            <div class="col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Početna</a></li>
                  <li class="active"><a href="services.php" class="nav-link">Usluge</a></li>
                  <li><a href="products.php" class="nav-link">Proizvodi</a></li>
                  <li><a href="price.php" class="nav-link">Cenovnik</a></li>
                  <li><a href="contact.php" class="nav-link">Kontakt</a></li>
                    <?php
                    if (isset($_SESSION['isAdmin'])) {
                        if ($_SESSION['isAdmin'] == 1) {
                            echo ' <li><a href="admin" class="nav-link">Admin</a></li>';
                        }
                    }
                    ?>
                    <li><a href="cart.php"><img src="images/cart.png" alt="cart"></a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3">Usluge</h1>
              <p>Doživi i oseti Wellness u svom telu i duhu. Priuštite sebi trenutke potpune relaksacije.</p>
                <?php if (!isset($_SESSION['username'])) {
                    echo ' <p><a href="login.php" class="btn btn-primary">Login</a>&nbsp;<a href="register.php" class="btn btn-primary">Register</a></p>';
                    echo ' <p></p>';
                }
                else
                    echo ' <p><a href="logout.php" class="btn btn-primary">Logout</a></p>';
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">Naše usluge</h2>
          </div>
        </div>
          <div class="row">
              <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                  <div class="service_13987">
                      <a href="#" class="mb-3 d-block"><img src="images/sun-stojeci-turbo-1.jpg" alt="Image" height="190" width="270" ></a>
                      <div class="text">
                          <h3 class="serif mb-3"> <a href="solarijum.php"> Solarijum</a></h3>
                          <p>Pomoću novih solarijum lampi EU 0.3 postižete sigurno tamnjenje kože, nema nikakvih rizičnih faktora, bezbedno je za osobe sa osetljivom kožom. </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                  <div class="service_13987">
                      <a href="#" class="mb-3 d-block"><img src="images/img_4.jpg" alt="Image" height="190" width="270"></a>
                      <div class="text">
                          <h3 class="serif mb-3"><a href="masaza.php"> Masaža </a></h3>
                          <p>Relaksaciona masaža je upravo ono na šta njen naziv aludira. To je masaža koja se striktno koristi sa ciljem odmora i relaksacije.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                  <div class="service_13987">
                      <a href="#" class="mb-3 d-block"><img src="images/saltroom.jpg" alt="Image" height="190" width="270"></a>
                      <div class="text">
                          <h3 class="serif mb-3"> <a href="slana%20soba.php"> Slana soba</a></h3>
                          <p>Slana soba od himalajske soli ima 5,5 tona soli. Boravak u slanoj sobi pospešuje disanje, ublažava kijanje, kašalj, kratak dah.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                  <div class="service_13987">
                      <a href="#" class="mb-3 d-block"><img src="images/infracrvenasauna2.jpg" alt="Image"  height="190" width="270"></a>
                      <div class="text">
                          <h3 class="serif mb-3"><a href="sauna.php">Infracrvena sauna</a></h3>
                          <p> Infracrveno zračenje prodire duboko u naše zglobove, kožu, mišiće i tkivo, ubrzavajući cirkulaciju</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>


    <footer class="site-footer bg-image overlay" style="background-image: url('images/hero_1.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h3 class="font-weight-bold serif text-white">Vanilla</h3>
          </div>
            <div class="col-12 text-center mb-5">
                <a href="index.php" class="">Početna</a>
                <span class="mx-3"></span>
                <a href="services.php" class="">Usluge</a>
                <span class="mx-3"></span>
                <a href="products.php" class="">Proizvodi</a>
                <span class="mx-3"></span>
                <a href="price.php" class="">Cenovnik</a>
                <span class="mx-3"></span>
                <a href="contact.php" class="">Kontakt</a>
            </div>
          <div class="col-12">
            <div class="social_29128 white text-center">

              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-facebook"></span></a>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="small">
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Dajana Nimčević
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

