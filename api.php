<?php
 // imposto l'header che avvisa del contenuto json
header('Content-Type: application/json');

$todoList = file_get_contents("dati.json");

$todoListDati = json_decode($todoList, true);

if(isset($_POST['newTask'])){
    $todoListDati[] = $_POST['newTask'];
    file_put_contents("dati.json", json_encode($todoListDati));
}

$todoList = json_encode($todoListDati);

echo $todoList;

?>