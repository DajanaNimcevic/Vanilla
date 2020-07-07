<?php require_once "../includes/db_config.php" ;
if (isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == 0) {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

$sql = "SELECT * FROM cart c JOIN user u ON c.id_user = u.id_user JOIN product p ON c.id_product = p.id_product WHERE date_order IS NOT NULL ORDER BY date_order DESC";
$query = mysqli_query ($connect,$sql);
?>/';
<div class="container mt-5">
    <?php
    $total_price = 0;
    $current_date_order = NULL;
    while($result = mysqli_fetch_assoc($query)){
//        var_dump($result);
        $new_date_order = $result['date_order'];
        if($new_date_order == $current_date_order) {
            $name = $result['picture'];
            $altName = explode(".", $name);
            $cena = $result['price'] * $result['quantity'];
            $total_price += $cena;
            echo "
     <div class=\"row\">
        <div class=\"col-sm-4 col-md-12 col-lg-4\">
            <form method=\"post\" action=\"updateOrders.php+\">
                <img src=\"../images/{$result['picture']}\"  alt=\"$altName[0]\" width=\"250\" height=\"300\"><br>
        </div>
        <div class=\"col-sm-8 col-md-6 col-lg-8\">
                <strong>Proizvod: </strong>{$result['title']}<br>
                <strong>Količina: </strong>{$result['quantity']}<br>
                <strong>Cena: </strong>{$result['price']}<br>
                <input type=\"hidden\" name=\"id\" value=\"{$result['id_product']}\">
                <!-- <button class=\"btn btn-primary mt-3\"  name=\"delete\">DELETE</button>-->
            </form>
        </div>
     </div>
     <hr>
";
        }
        else{
            if($total_price!=0){
                echo "<span style='border-bottom: 5px solid darkorange;'><strong>Ukupna cena porudžbine је: $total_price dinara</strong></span><br>";
            }
            $total_price=0;
            $current_date_order = $new_date_order;
            $username = $result['username'];
            echo "Porudžbina za korisnika <strong>$username</strong> poručena na dan: $current_date_order";
            echo "<hr>";

            $name = $result['picture'];
            $altName = explode(".", $name);
            $cena = $result['price']*$result['quantity'];
            $total_price += $cena;
            echo "
         <div class=\"row\">
            <div class=\"col-sm-4 col-md-12 col-lg-4\">
                <form method=\"post\" action=\"updateProduct.php\">
                    <img src=\"../images/{$result['picture']}\"  alt=\"$altName[0]\" width=\"250\" height=\"300\"><br>
            </div>
            <div class=\"col-sm-8 col-md-6 col-lg-8\">
                    <strong>Proizvod: </strong>{$result['title']}<br>
                    <strong>Količina: </strong>{$result['quantity']}<br>
                    <strong>Cena: </strong>{$result['price']}<br>
                    <input type=\"hidden\" name=\"id\" value=\"{$result['id_product']}\">
                   <!-- <button class=\"btn btn-primary mt-3\"  name=\"delete\">DELETE</button>-->
                </form>
            </div>
         </div>
         <hr>
";
        }

     }
    echo "<span style='border-bottom: 5px solid darkorange;'><strong>Ukupna cena porudžbine је: $total_price dinara</strong></span><br>";

    ?>
</div>
