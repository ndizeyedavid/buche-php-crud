<?php

include "connect.php";

if (isset($_POST['create'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pswd = $_POST['password'];

    $insert = mysqli_query($con, "INSERT INTO users(fname, lname, password) VALUES('{$fname}', '{$lname}', '{$pswd}')");

    if ($insert) {
        header("location: form.html");
    } else {
        echo "Failed to insert user";
    }
}
