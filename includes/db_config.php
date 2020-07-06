<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "wellness";
$connect = mysqli_connect($host,$username,$password,$database);
if(!$connect){
    header("Location: error.php");
    die();
}