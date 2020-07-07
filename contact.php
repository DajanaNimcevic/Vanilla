<?php
    require("includes/db_config.php");
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Vanilla | Kontakt</title>
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
                  <li><a href="services.php" class="nav-link">Usluge</a></li>
                  <li><a href="products.php" class="nav-link">Proizvodi</a></li>
                  <li><a href="price.php" class="nav-link">Cenovnik</a></li>
                  <li class="active"><a href="contact.php" class="nav-link">Kontakt</a></li>
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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/kontakt2.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3">Kontakt</h1>
                <p>Za više informacija, stojimo Vam na raspolaganju</p>

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

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Kontaktirajte nas!</h2><br>
          <p>Vanilla Spa centar se nalazi u centru Subotice.</p>
            <p>Radnim danima od 10-20h</p>
            <p>Subota od 9-13h</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form id="main-contact-form" name="contact-form" action="sendemail.php" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" name="name" class="form-control" placeholder="Ime">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Prezime">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="email"class="form-control" placeholder="Email adresa">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="message" class="form-control" placeholder="Napišite svoju poruku." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" name="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Pošalji">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Kontakt informacije</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Adresa</span>
                  <span>Prvomajska 1, 24000 Subotica</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Telefon:</span><span>024 555 555</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>wellnessvanilla@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


        <footer class="site-footer bg-image overlay" style="background-image: url('images/kontakt2.jpg')">
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

