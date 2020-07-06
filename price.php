<?php
require("includes/db_config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Vanilla | Cenovnik</title>
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
                            <li class="active"><a href="price.php" class="nav-link">Cenovnik</a></li>
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
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/cenovnik2.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Cenovnik</h1>
                        <p>Ovde možete videti cene za sve naše usluge.</p>
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
                    <h2 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">Cenovnik usluga</h2>
                </div>
            </div>





    <h5 style="position: relative; padding-right: 50px;">Slana soba (odrasli) <span style="position: absolute; top: 0; right: 0;">400 din</span></h5>
    <p>Tretman za odrasle je 45 minuta. Poželjno je dolaziti na 10 - 15 tretmana svaki dan ili svaki drugi zbog što boljeg efekta!</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Slana soba (dvoje dece) <span style="position: absolute; top: 0; right: 0;">500 din</span></h5>
    <p>Tretman traje 30 minuta. Poželjno je dolaziti na 10 - 15 tretmana svaki dan ili svaki drugi zbog što boljeg efekta!</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Slana soba (studenti) <span style="position: absolute; top: 0; right: 0;">300 din</span></h5>
    <p>Tretman za studente je 45 minuta. Poželjno je dolaziti na 10 - 15 tretmana svaki dan ili svaki drugi zbog što boljeg efekta!</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Slana soba (penzioneri) <span style="position: absolute; top: 0; right: 0;">300 din</span></h5>
    <p>Tretman za penzionere je 45 minuta. Poželjno je dolaziti na 10 - 15 tretmana svaki dan ili svaki drugi zbog što boljeg efekta!</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Porodična karta za slanu sobu <span style="position: absolute; top: 0; right: 0;">800 din</span></h5>
    <p>Tretman je 60 minuta. Poželjno je dolaziti na 10 - 15 tretmana svaki dan ili svaki drugi zbog što boljeg efekta!</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Infracrvena sauna <span style="position: absolute; top: 0; right: 0;">300 din</span></h5>
    <p>Tretman traje 30 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Infracrvena sauna <span style="position: absolute; top: 0; right: 0;">450 din</span></h5>
    <p>Tretman traje 45 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Masaža tela <span style="position: absolute; top: 0; right: 0;">1500 din</span></h5>
    <p>Trajanje tretmana 60 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Masaža parcijalna <span style="position: absolute; top: 0; right: 0;">900 din</span></h5>
    <p>Služi da oslobodi tenzije bilo koji deo tela za kratko vreme. Cilj ima rešavanje konkretnog problema. Trajanje tretmana 30 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">



    <h5 style="position: relative; padding-right: 50px;">Masaža tela (badem ulje) <span style="position: absolute; top: 0; right: 0;">1600 din</span></h5>
    <p>Trajanje tretmana 60 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">


    <h5 style="position: relative; padding-right: 50px;">Masaža lica <span style="position: absolute; top: 0; right: 0;">800 din</span></h5>
    <p>Trajanje tretmana 30 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Masaža stopala <span style="position: absolute; top: 0; right: 0;">1200 din</span></h5>
    <p>Trajanje tretmanja 45 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">


    <h5 style="position: relative; padding-right: 50px;">Wellness paket <span style="position: absolute; top: 0; right: 0;">2000 din</span></h5>
    <p>Masaža celog tela 60 minuna, infra sauna 30 minuta i slana soba 30 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">



    <h5 style="position: relative; padding-right: 50px;">Relax paket <span style="position: absolute; top: 0; right: 0;">1300 din</span></h5>
    <p>Masaža tela 30 minuta, infra sauna 30 minuta, solarijum o,3 EU. Trajanje tretmanja 66 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">




    <h5 style="position: relative; padding-right: 50px;">Crystal paket <span style="position: absolute; top: 0; right: 0;">1400 din</span></h5>
    <p>Masaža tela 30 minuta, infra sauna 30 minuta, slana soba 30 minuta. Trajanje tretmanja 90 minuta.</p>

    <hr class="no_line" style="margin:0 auto 15px">



    <br><br>
    <p style="font-weight:600; font-size:14px">*Ukoliko želite da kupite naš proizvod kontaktirajte nas i mi ćemo Vam poslati na kućnu adresu!</p></div>
    </div>
    <footer class="site-footer bg-image overlay" style="background-image: url('images/cenovnik2.jpg')">
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

