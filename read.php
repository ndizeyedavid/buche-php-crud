<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        $fetch = mysqli_query($con, "SELECT * FROM users");

        $count = 1;
        while ($row = mysqli_fetch_assoc($fetch)) {
        ?>
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>