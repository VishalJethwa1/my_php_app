<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myapp";

$connection = mysqli_connect($servername, $username, $password, $database);

if(!$connection) {
    die("Connection Failed: ".mysqli_connect_error());
}

?>