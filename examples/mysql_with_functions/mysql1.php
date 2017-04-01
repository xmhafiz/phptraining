<?php

// include file
require('database_functions.php');

$connection = connect();

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
