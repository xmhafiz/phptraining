<?php

function connect() {
    // connect to database
    // conn = mysqli_connect(mysql ip address, username, password, database name)
    $connection = mysqli_connect('localhost', 'root', 'root', 'demodb');

    // check if connection error
    if (mysqli_connect_errno()) {
        echo 'Connect failed: ' . mysqli_connect_error();
        exit();
    }

    return $connection;
}
