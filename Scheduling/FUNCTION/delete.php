<?php
include_once '../CONNECTION/connection.php';

if (isset($_GET["deleteId"])) {
    $deleteId = $_GET["deleteId"];
}

$query = mysqli_query($conn, "DELETE FROM todo WHERE id_todo='$deleteId'");

?>