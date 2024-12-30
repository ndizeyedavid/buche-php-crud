<?php
include "connect.php";

$id = $_GET['id'];

$fetch = mysqli_query($con, "SELECT * FROM users WHERE id='{$id}'");
$data = mysqli_fetch_assoc($fetch);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <form method="post">
        <input type="hidden" value="<?php echo $id ?>" name="id">

        First Name: <input type="text" name="fname" value="<?php echo $data['fname']; ?>">
        <br><br>
        Last Name: <input type="text" name="lname" value="<?php echo $data['lname']; ?>">
        <br><br>
        Password: <input type="text" name="password" value="<?php echo $data['password'] ?>">
        <br><br>
        <input type="submit" value="Update" name="update">
    </form>
</body>

</html>


<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];

    $update = mysqli_query($con, "UPDATE users set fname='{$fname}', lname='{$lname}', password='{$password}' WHERE id='{$id}'");

    if ($update) {
        header("location: read.php");
    } else {
        echo "failed to update";
    }
}
?>