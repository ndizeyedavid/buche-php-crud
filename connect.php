<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "buche_crud";

$con = mysqli_connect($hostname, $user, $password, $database);

if (!$con) {
    die("Connection failed");
}
