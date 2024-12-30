<?php

include "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = mysqli_query($con, "DELETE FROM users WHERE id='{$id}'");

    if ($delete) {
        header("location: read.php");
    } else {
        echo "failed to delete user";
    }
}
