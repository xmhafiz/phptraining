<?php

// include file
require('database_functions.php');

$connection = connect();

// do query
$query = 'SELECT * FROM products';
$result = mysqli_query($connection, $query);

// get number of rows
echo 'total rows is: ' . mysqli_num_rows($result);
echo '<br><br>';

// loop within result
// show in tables

echo '<table border="1">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['price'] . '</td>';
    echo '<td> <a href="edit_form.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '</tr>';
}
echo '</table>';
?>

<br><br>
<a href="form.php">Add product</a>
