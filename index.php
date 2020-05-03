<?php
    $afazeres = [];
    if(file_exists('tarefa.json')){
        $json = file_get_contents('tarefa.json');
        $afazeres = json_decode($json, true);

    } else{


    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="nova_lista.php" method="post">
    <input type="text" name="tarefa" placeholder="Entre com sua tarefa">
    <button>Nova Tarefa</button>


</form>
<br>

<?php foreach ($afazeres as $nomeAfazer => $afazere): ?>
<div style="margin-bottom: 20px;">
    <input type="checkbox" <?= $afazere['completo']? 'cheked' : '' ?>>
    <?= $nomeAfazer; ?>
    <form action="deletar.php" method="POST">
        <input type="hidden" name="nome_tarefa" value="<?= $nomeAfazer; ?>">
        <button>Apagar</button>
    </form>

</div>
<?php endforeach; ?>
</body>
</html>
