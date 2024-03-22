<?php  
  require_once './config/connect.php';

  $product_id = $_GET['id'];
  $product = mysqli_query($connect, "select * from products where id='$product_id'");
  $product = mysqli_fetch_assoc($product);
  $comments = mysqli_query($connect, "select * from comments where product_id='$product_id'");
  $comments = mysqli_fetch_all($comments);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
</head>
<body>

  <h2>Title: <?= $product['title'] ?></h2>
  <h2>Price: <?= $product['price'] ?></h2>
  <p>Описание: <?= $product['description'] ?></p>

  <form action="./vendor/create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <textarea name="body" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Add comment</button>
  </form>

  <h3>Comments</h3>
  <ul>
    <?php foreach ($comments as $comment) { ?>
      <li><?= $comment[2] ?></li>
    <?php } ?>
  </ul>
</body>
</html>