<?php

// include file
require('database_functions.php');

$connection = connect();

$id = $_POST['product_id'];
$name = $_POST['product_name'];
$price = $_POST['product_price'];


// do query
$query = 'UPDATE products SET name="' . $name . '", price="' . $price . '" WHERE id=' . $id;
$result = mysqli_query($connection, $query);

if ($result) {
    echo 'Successfully update record<br>';
    echo '<a href="mysql2.php">Show list</a>';
}
else {
    echo mysqli_error($connection);
}
