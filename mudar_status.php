<?php


$json = file_get_contents('tarefa.json');
$jsonArray = json_decode($json, true);

$nomeTarefa = $_POST['nome_tarefa'];
$jsonArray[$nomeTarefa]['completa'] = !$jsonArray[$nomeTarefa]['completa'];

file_put_contents('tarefa.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');