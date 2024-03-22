<?php 
require_once '../config/connect.php';

$id = $_POST['id'];
$body = $_POST['body'];

mysqli_query($connect, "insert into comments(product_id, body) values('$id', '$body')");

header('Location: /CRUD_PHP/product.php?id=' . $id);