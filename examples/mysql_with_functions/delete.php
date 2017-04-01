<?php

// include file
require('database_functions.php');

$connection = connect();

$id = $_POST['product_id'];

// do query
$query = 'DELETE FROM products WHERE id=' . $id;
$result = mysqli_query($connection, $query);

if ($result) {
    echo 'Successfully delete record<br>';
    echo '<a href="mysql2.php">Show list</a>';
}
else {
    echo mysqli_error($connection);
}
