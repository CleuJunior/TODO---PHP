<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$tarefas = $_POST['tarefa'] ?? " ";
$tarefas = trim($tarefas);

if ($tarefas) {
    if (file_exists('tarefa.json')) {
        $json = file_get_contents('tarefa.json');
        $jsonArray = json_decode($json, true);
    } else {
        $jsonArray = [];

    }

    $jsonArray[$tarefas] = ["completo" => false];
    file_put_contents('tarefa.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

}

header('Location: index.php');