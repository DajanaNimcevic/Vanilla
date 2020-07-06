<?php
require("includes/db_config.php");

?>
<!doctype html>
<html lang="en">

<head>
    <title>Vanilla | Proizvodi</title>
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
                            <li class="active"><a href="products.php" class="nav-link">Proizvodi</a></li>
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
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/uslugee.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Proizvodi</h1>
                        <p>Prirodnu kozmetiku čine sirovine biljnog kontrolisanog porekla.
                            Pravi se uz minimalno ili nikakvo korišćenje veštačkih komponenti.
                            Proces proizvodnje mora biti takav da sastav sirovina ostane nepromenjen.</p>
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
                    <h2 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">Naši proizvodi</h2>
                </div>
            </div>
           <?php
            $sql = "SELECT * FROM product";
            $query = mysqli_query ($connect,$sql);
            while($result = mysqli_fetch_assoc($query)){
                $name = $result['picture'];
                $altName = explode (".",$name);
                echo " <div class=\"\">
                <div class=\"row no-gutters\">
                    <div class=\"col-md-4\">
                        <img src=\"images/{$result['picture']}\" class=\"card-img\" alt=\"$altName[0]\" width=\"200\" height=\"250\">
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body  \">
                        <div class=\"product-item\">
                            <form method=\"post\" action=\"products.php\" enctype=\"multipart/form-data\" class=\"form-group\">
                                <input type=\"hidden\" name=\"id\" value=\"{$result['id_product']}\">
                                <h5 class=\"card-title\" name='title'>{$result['title']}</h5>
                                <p class=\"card-text border-danger\" name='description' >{$result['description']}</p>
                                <p class=\"card-text border-danger\" >Cena: <span name='price'>{$result['price']}</span> dinara</p>
                                <button class=\"btn mt-3 text-white btn-primary\" name=\"addToCart\">Dodaj u korpu</button>
                                <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"1\" />
                            </form>
                         </div>
                        </div>
                        </div>
                     </div>
                 </div>
                             
                 ";

            }
            ?>

    <footer class="site-footer bg-image overlay" style="background-image: url('images/uslugee.jpg')">
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

    <?php
    if(isset($_POST['addToCart'])){
        $userId = $_SESSION['id'];
        $productId = mysqli_real_escape_string ($connect,$_POST['id']);
        $quantity = mysqli_real_escape_string($connect,$_POST['quantity']);
        $sql = "UPDATE cart SET quantity = quantity + '$quantity' WHERE  id_user = '$userId' AND id_product = '$productId'";
        $query = mysqli_query ($connect,$sql);
        if(mysqli_affected_rows($connect) == 0){
            $sql = "INSERT INTO cart(id_user,id_product,quantity) VALUES('$userId','$productId','$quantity')";
            $query = mysqli_query($connect, $sql);
        }
    }
    ?>
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

