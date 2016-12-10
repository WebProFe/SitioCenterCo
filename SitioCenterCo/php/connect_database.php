<?php

// Created a variable to save the connection.
$connection = mysqli_connect('localhost', 'bombasticgoods', 'Fernandit0', 'SitioCenter');

// Check if the conncetion to the database has been established.
    if(!$connection){
        die("No connection was established");
    }
?>
