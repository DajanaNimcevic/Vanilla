<?php require_once "../includes/db_config.php" ;
if (isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == 0) {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string ($connect,$_POST['id']);
    $sql = "DELETE FROM cart WHERE id_product='$id' AND id_user = '$_SESSION[id]'";
    $query = mysqli_query ($connect,$sql);
    if(mysqli_affected_rows ($connect) < 1){
        // var_dump($id);
        header ("Location: index.php?error=errorQuery&submit=list");
        exit();
    }
    header ("Location: index.php?error=success&submit=list");
    exit();

}