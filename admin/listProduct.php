<?php require_once "../includes/db_config.php" ;
if (isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == 0) {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

$sql = "SELECT * FROM product";
$query = mysqli_query ($connect,$sql);
?>
<div class="container mt-5">
    <?php
    while($result = mysqli_fetch_assoc($query)){
        $name = $result['picture'];
        $altName = explode (".",$name);
        echo"
     <div class=\"row\">
        <div class=\"col-sm-4 col-md-12 col-lg-4\">
            <form method=\"post\" action=\"updateProduct.php\">
                <img src=\"../images/{$result['picture']}\"  alt=\"$altName[0]\" width=\"250\" height=\"300\"><br>
        </div>
        <div class=\"col-sm-8 col-md-6 col-lg-8\">
                <strong>Proizvod: </strong>{$result['title']}<br>
                <strong>Opis: </strong>{$result['description']}<br>
                <strong>Cena: </strong>{$result['price']}<br>
                <input type=\"hidden\" name=\"id\" value=\"{$result['id_product']}\" >
                <button class=\"btn btn-primary mt-3\"  name=\"update\">UPDATE</button>
                <button class=\"btn btn-primary mt-3\"  name=\"delete\">DELETE</button>
            </form>
        </div>
     </div>
     <hr>
";
    }
    ?>
</div>
