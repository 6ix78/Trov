<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "investorm";

$conn = mysqli_connect( $server, $username, $password, $db_name);

if(!$conn) {
    echo "Connection Failed";
}