<?php
// Koneksi.php

function connect()
{
    //Adjust the SQL based on your SQL Server (i.e. PhpMyAdmin)
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'perpustakaan';

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}