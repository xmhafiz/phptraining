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
echo '<br><br>';

// loop within result
// show in tables

echo '<table border="1">';
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['price'] . '</td>';
    echo '</tr>';
}
echo '</table>';
