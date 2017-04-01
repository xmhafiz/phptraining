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
<p>Are you sure want to deleted?</p>
<form method="post" action='delete.php'>
    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
    <button type="submit">Yes</button>
</form>
