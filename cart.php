<?php
require("includes/db_config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Vanilla | Korpa</title>
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
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/korpica.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
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

    <div class="cart">
        <?php
            $total_price = 0;
            ?>
        <form method='post' action='cart.php'>
            <table class="table">
                <tbody>

                <tr>
                    <td></td>
                    <td class="text-primary">Naziv Proizvoda</td>
                    <td class="text-primary">Količina</td>
                    <td class="text-primary">Cena</td>
                    <td class="text-primary">Ukupno</td>
                </tr>
                <?php
                $sql = "SELECT * FROM cart c JOIN product p ON c.id_product = p.id_product  WHERE id_user = '$_SESSION[id]' AND date_order is NULL";
                $query = mysqli_query($connect,$sql);
                $products = mysqli_fetch_all($query,MYSQLI_ASSOC);
                foreach ($products as $product){
                    ?>
                    <tr>
                        <td>
                            <img src="images/<?php echo "{$product['picture']}";?>" width="100" height="80"  alt="proizvod"/>
                        </td>
                        <td><?php echo $product["title"]; ?><br />
                                <input type='hidden' name='id' value="<?php echo $product["id_product"]?>" />
                                <input type='hidden' name='action' value="remove" />
                                <button type='submit' name='delete' class='remove btn mt-3 text-white btn-primary'>Ukloni iz korpe</button>
                        </td>
                        <td><?php echo $product["quantity"]; ?></td>
                        <td><?php echo $product["price"]; ?></td>
                        <td><?php echo $product["price"]*$product["quantity"]; ?></td>
                    </tr>
                    <?php
                    $total_price += ($product["price"]*$product["quantity"]);
                }
                ?>
                <tr>
                    <td colspan="5" align="right">
                            <strong class="text-primary" ><?php echo $total_price;?> dinara</strong>
                            <button type="submit" name="kupi" class="btn mt-3 text-white btn-primary">Kupi</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
            <?php
        ?>
    </div>

    <div style="clear:both;"></div>



    <footer class="site-footer bg-image overlay" style="background-image: url('images/korpica.jpg')">
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
            <div id="cart" class="row pt-5 mt-5 text-center">
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
    if(isset($_POST['delete'])) {
        $user = $_SESSION['id'];
        $id = mysqli_real_escape_string($connect, $_POST['id']);
        $sql = "DELETE FROM cart WHERE id_product = '$id' AND id_user ='$user' AND date_order IS NULL";
        $query = mysqli_query($connect, $sql);
    }
    if(isset($_POST['kupi'])){
        $user = $_SESSION['id'];
        //$sql = "SELECT * FROM cart where id_user ='$user' and date_order is NULL";
        echo '<script language="javascript">';
        echo 'alert("Uspesno poslata porudzbina!")';
        echo '</script>';
        $sql = "UPDATE cart SET date_order = CURRENT_TIMESTAMP WHERE id_user = '$user' AND date_order IS NULL";
        $result= mysqli_query($connect,$sql);



        /*while ( $row = mysqli_fetch_assoc( $result ) ) {
           $sql2 = "INSERT INTO cartorder(id_user, id_product, quantity) VALUES('$row[id_user]','$row[id_product]','$row[quantity]')";
           $query = mysqli_query($connect,$sql2);
        }
        $sql3= "DELETE FROM cart where id_user = '$user'";
        $query= mysqli_query($connect,$sql3);*/
    }
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>0
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
