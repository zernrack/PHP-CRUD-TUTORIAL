<?php
require("./database.php");

// Will check if edit button is clicked
if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
}

// Will check if update button is clicked
if (isset($_POST['update'])){
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE accounts SET username = '$updatedUsername' password = '$updatedPassword' WHERE id = '$updateId'";
    $sqlUpdate = mysqli_query($db, $queryUpdate);

    echo '<script>alert("Sucessfully Updated!")</script>';
        echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-update.css">
    <title>UPDATE USER</title>
</head>

<body>
    <main>
        <form class="update-main" action="/php-crud-tutorial/update.php" method="post">
            <h3>UPDATE USER</h3>
            <input type="text" name="updateUsername" placeholder="Enter your username..." value="<?php echo $editUsername?>" required />
            <input type="password" name="updatePassword" placeholder="Enter your password..." value="<?php echo $editPassword?>" required />
            <input type="submit" name="update" value="UPDATE" />
            <input type="hidden" name="updateId" value="<?php echo $editId ?>" />
        </form>
    </main>
</body>

</html>