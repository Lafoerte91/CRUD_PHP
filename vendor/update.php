<?php   
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$products = mysqli_query($connect, "update products set title='$title', description='$description', price='$price' where id='$id'");

header("Location: /CRUD_PHP/");