<?php

// connect to database
// conn = mysqli_connect(mysql ip address, username, password, database name)
$connection = mysqli_connect('localhost', 'root', 'root', 'demodb');

// check if connection error
if (mysqli_connect_errno()) {
    echo 'Connect failed: ' . mysqli_connect_error();
    exit();
}

// do query
$query = 'SELECT * FROM products';
$result = mysqli_query($connection, $query);

// get number of rows
echo 'total rows is: ' . mysqli_num_rows($result);
echo '<br>';

// loop within result
while ($row = mysqli_fetch_assoc($result)) {

    echo '<pre>';
    print_r($row);
}
