<?php
include_once '../CONNECTION/connection.php';

if (isset($_GET["todo"]) && !empty($_GET["todo"])) {
    $todo = $_GET["todo"];
    $query = mysqli_query($conn, "INSERT INTO todo VALUES(NULL,'$todo',CURRENT_TIMESTAMP)");
}
?>