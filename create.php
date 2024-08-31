<?php
    require("./database.php");

    if (isset($_POST['create'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $queryCreate = "INSERT INTO accounts VALUES (NULL, '$username','$password')";
        $sqlCreate = mysqli_query($db, $queryCreate);

        echo '<script>alert("Sucessfully Created!")</script>';
        echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
    }else {
        echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';

    }
?>