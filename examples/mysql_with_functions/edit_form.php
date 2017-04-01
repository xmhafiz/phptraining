<?php

// include file
require('database_functions.php');

$connection = connect();

$product_id = $_GET['id'];
// do query
$query = 'SELECT * FROM products WHERE id = ' . $product_id;
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="mysql2.php">Show list</a>
<br><br>

<form method="post" action='update.php'>
    Product Name:<br>
    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
    <input type="text" name="product_name" value="<?php echo $row['name']; ?>"><br>
    Product Price:<br>
    <input type="text" name="product_price" value="<?php echo $row['price']; ?>"><br>
    <button type="submit">Save</button>
</form>
