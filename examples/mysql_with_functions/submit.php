<?php

// include file
require('database_functions.php');

$connection = connect();

$name = $_POST['product_name'];
$price = $_POST['product_price'];


// do query
$query = 'INSERT INTO products (name,price) VALUES ("' . $name . '",' . $price . ')';
$result = mysqli_query($connection, $query);

if ($result) {
    echo 'Successfully added new record<br>';
    echo '<a href="mysql2.php">Show list</a>';
}
else {
    echo mysqli_error($connection);
}
