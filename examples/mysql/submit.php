<?php

// connect to database
// conn = mysqli_connect(mysql ip address, username, password, database name)
$hostname = 'localhost';
$database_user = 'root';
$database_password = 'root';
$database_name = 'demodb';

$connection = mysqli_connect($hostname, $database_user, $database_password, $database_name);

// check if connection error
if (mysqli_connect_errno()) {
    echo 'Connect failed: ' . mysqli_connect_error();
    exit();
}

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
