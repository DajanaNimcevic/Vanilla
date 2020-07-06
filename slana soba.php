<?php
require("includes/db_config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Vanilla - Wellness</title>
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
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/himso.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Slana soba</h1>
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
            <div class="row align-items-center">
                <div class="col-md-5 mr-auto">
                    <h2 class="serif font-weight-bold mb-3">Himalajska so</h2>
                    <p>Slana soba od himalajske soli ima 5,5 tona soli. Boravak u slanoj sobi pospešuje disanje, ublažava kijanje, kašalj, kratak dah.
                        Pomaže kod bronhitisa, astme, alergije, infekcije uha, pušačkog kašlja, ekcema, infekcije disajnih puteva, sinuzitisa, poboljšava metabolizam. Hrani, čisti i podmlađuje kožu, poboljšava cirkulaciju. Sam ambijent opušta, poboljšava raspoloženje, pospešuje lučenje seratonina (hormona sreće), ima antidepresivni i antistres efekat. Slana terapija se
                        koristi kao pomoćna metoda u lečenju bolesti respiratornih organa i kože. So koju udišete uništava bakterije u plućima, smanjuje zapaljenje i količinu sluzi.</p>

                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="bg-img-1 mr-md-4 mt-md-5" style="background-image: url('images/saltroom.jpg'); "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="bg-img-1 mr-md-4 mt-md-5" style="background-image: url('images/slanasoba-pink.jpg'); "></div>
                    </div>
                </div>
                <div class="col-md-5 mr-auto">
                    <h2 class="serif font-weight-bold mb-3">Mikroklima u slanoj sobi</h2>
                    <p>Mikroklima u slanoj sobi je čistija tri puta nego što je u operacionoj sali bolnice, nemoguće je dobiti bilo kakvu infekciju ili bakterije
                        u toku tretmana jer one se unište velikom količinom soli u prostoriji, ako i neka zaluta izbaci se napolje 15 minutnom ventilacijom posle svakog tretmana.</p>
                    <p>Mikroklima u slanoj sobi je čistija tri puta nego što je u operacionoj sali bolnice, nemoguće je dobiti bilo kakvu infekciju ili bakterije u toku tretmana jer
                        one se unište velikom količinom soli u prostoriji, ako i neka zaluta izbaci se napolje 15 minutnom ventilacijom posle svakog tretmana.</p>
                </div>
                <div style="position: absolute;left:10px" ><a href="masaza.php"> <img src="images/arrow%20left.png" style="float-left"> Masaža</a></div>
                <div style="position:absolute;right:0px"><a href="sauna.php" >Sauna <img src="images/arrow%20right.png" style="float-right"> </a> </div>

            </div>
        </div>
    </div>

    <footer class="site-footer bg-image overlay" style="background-image: url('images/himso.jpg')">
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


