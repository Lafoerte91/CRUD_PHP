<?php   
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$products = mysqli_query($connect, "insert into products(title, description, price) values('$title', '$description', '$price')");

header("Location: /CRUD_PHP/");
