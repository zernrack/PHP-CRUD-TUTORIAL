<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'php-crud-tutorial';

$db = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {
    echo "Error: Unable to connect to mysql <br>";
    echo "Message:" . mysqli_connect_error() . "<br>";
}
