<?php 
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "delete from products where id='$id'");

header("Location: /CRUD_PHP/");