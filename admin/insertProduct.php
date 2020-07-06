<?php require_once "../includes/db_config.php" ;
if (isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == 0) {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <form method="post" action="insertProduct.php" enctype="multipart/form-data" class="form-group">
                    <label for="title">Proizvod</label>
                    <input type="text" name="title" id="title" class="form-control"><br>
                    <label for="description">Opis</label>
                    <input type="text" name="description" id="description" class="form-control"><br>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="picture" name="picture">
                        <label class="custom-file-label"  for="picture">Choose Picture</label>
                    </div>
                    <label for="price">Cena</label>
                    <input type="text" name="price" id="price" class="form-control"><br>
                    <button class="btn btn-primary btn-block mt-3" type="submit" name="insertData">Insert</button>
                </form>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['insertData'])) {

    $title = mysqli_real_escape_string ($connect,$_POST['title']);
    $description = mysqli_real_escape_string ($connect,$_POST['description']);
    $price = mysqli_real_escape_string ($connect,$_POST['price']);

    $picture = $_FILES['picture'];
    $pictureName = $_FILES['picture']['name'];
    $pictureTmp = $_FILES['picture']['tmp_name'];
    $pictureSize  = $_FILES['picture']['size'];
    $pictureType = $_FILES['picture']['type'];

    if(empty($title) or empty($description) or empty($price) or empty($picture)){
        header ("Location: index.php?error=empty&submit=insert");
        exit();
    }
    if($pictureSize > 10000000 or $pictureType !== 'image/jpeg'){
        header ("Location: index.php?error=errorImage&submit=insert");
        exit();
    }
    $pictureDestination = "../images/".$pictureName;
    $upload = move_uploaded_file($pictureTmp,$pictureDestination);
    if(!$upload){
        header ("Location: index.php?error=errorUpload&submit=insert");
        exit();
    }
    $sql = "INSERT INTO product(title,description,picture,price) VALUES('$title','$description','$pictureName','$price');";
    $query = mysqli_query ($connect,$sql);

    if(mysqli_affected_rows ($connect) < 1){
        header ("Location: index.php?error=errorQuery&submit=insert");
        exit();
    }

    header ("Location: index.php?error=success&submit=insert");
    exit();

}
