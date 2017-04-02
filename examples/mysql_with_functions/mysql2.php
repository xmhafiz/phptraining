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
// end php
?>


<table border="1">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><a href="edit_form.php?id=<?php echo $row['id'] ?>">Edit</a></td>
        <td><a href="delete_form.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
    <?php endwhile; ?>
</table>

<br><br>
<a href="form.php">Add product</a>
