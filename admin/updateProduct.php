<?php require_once "../includes/db_config.php" ;
if (isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == 0) {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

if(isset($_POST['update'])) {

    $id = mysqli_real_escape_string ($connect, $_POST['id']);
    $sql = "SELECT * FROM product WHERE id_product = $id;";
    $query = mysqli_query ($connect, $sql);
    $result = mysqli_fetch_assoc ($query);
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4 offset-2">
                <img class="img-fluid" src="../images/<?= $result['picture']?>" width="250" height="300">
            </div>
            <div class="col-sm-4">
                <form method="post" action="updateProduct.php" enctype="multipart/form-data" class="form-group">
                    <label for="title">Proizvod</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $result['title'] ?>"><br>
                    <label for="description">Opis</label>
                    <input type="text" name="description" id="description" class="form-control" value="<?= $result['description'] ?>"><br>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="picture" id="picture">
                        <label class="custom-file-label" for="picture">Choose Picture</label>
                    </div>
                    <label for="price">Cena</label>
                    <input type="text" name="price" id="price" class="form-control" value="<?= $result['price']?>">
                    <input type="hidden" name="id" value="<?=$result['id_product']?>">
                    <button class="btn btn-primary btn-block mt-3" type="submit" name="updateData">Insert</button>
                </form>
            </div>
        </div>
    </div>
    <?php
}

if(isset($_POST['updateData'])){

    $id = mysqli_real_escape_string ($connect,$_POST['id']);
    $title = mysqli_real_escape_string ($connect,$_POST['title']);
    $description = mysqli_real_escape_string ($connect,$_POST['description']);
    $price = mysqli_real_escape_string ($connect,$_POST['price']);


    $picture = $_FILES['picture'];
    $pictureName = $_FILES['picture']['name'];
    $pictureTmp = $_FILES['picture']['tmp_name'];

    if($pictureTmp != ''){

        $pictureDestination = "../images/".$pictureName;
        $upload = move_uploaded_file($pictureTmp,$pictureDestination);

        if(!$upload){
            header ("Location: index.php?error=errorUpload&submit=list");
            exit();
        }
        $sql = "UPDATE product SET title = '$title',description = '$description',picture = '$pictureName',price = '$price' WHERE id_product = '$id';";
    }else{
        $sql = "UPDATE product SET title = '$title',description = '$description',price = '$price' WHERE id_product = '$id';";
    }


    $query = mysqli_query ($connect,$sql);

    if(mysqli_affected_rows ($connect) < 1){
        header ("Location: index.php?error=errorQuery&submit=list");
        exit();
    }

    header ("Location: index.php?error=success&submit=list");
    exit();

}else if(isset($_POST['delete'])){

    $id = mysqli_real_escape_string ($connect,$_POST['id']);
    $sql = "DELETE FROM product WHERE id_product=$id;";
    $query = mysqli_query ($connect,$sql);
    if(mysqli_affected_rows ($connect) < 1){
        // var_dump($id);
        header ("Location: index.php?error=errorQuery&submit=list");
        exit();
    }

    header ("Location: index.php?error=success&submit=list");
    exit();

}