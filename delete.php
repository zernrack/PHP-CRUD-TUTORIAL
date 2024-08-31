<?php
require('./database.php');

if (isset($_POST['delete'])) {
    $deleteId = $_POST['deleteId']; //This references on the index.php name=deleteId

    $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
    $sqlDelete = mysqli_query($db, $queryDelete);

    echo '<script>alert("Sucessfully Deleted!")</script>';
    echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
} else {
    echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
}
