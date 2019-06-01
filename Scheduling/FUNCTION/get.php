<?php
include_once '../CONNECTION/connection.php';

$query = "SELECT * FROM todo";
$encode = array();
$array = array();
$result = mysqli_query($conn, $query);
while ($fetchData = mysqli_fetch_assoc($result)) {
    $id_todo = $fetchData['id_todo'];
    $todo = $fetchData['todo'];
    $date = $fetchData['date'];

    $array[] = array('id_todo' => $id_todo, 'todo' => $todo, 'date' => $date);
}

$encode['dataToDo'] = $array;

$open = fopen('../JSON/get.json', 'w');
fwrite($open, json_encode($encode));
fclose($open);
?>