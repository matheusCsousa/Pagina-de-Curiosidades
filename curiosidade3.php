<?php
$json = file_get_contents("curiosidade3.json");

if ($json === false) {
    die("Erro ao carregar o arquivo JSON.");
}

$dados = json_decode($json, true);

if ($dados === null) {
    die("Erro ao interpretar o JSON.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel="stylesheet" href="style.css">
    <title>Curiosidades</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h1><?= htmlspecialchars($dados["titulo"]) ?></h1>
    <img src="<?= htmlspecialchars($dados["imagem"]) ?>" alt="Foto">

    <p><?= htmlspecialchars($dados["intro"]) ?></p>

    <?php foreach ($dados["curiosidades"] as $item): ?>
        <p>
            <strong><?= htmlspecialchars($item["titulo"]) ?></strong>
            <?= htmlspecialchars($item["texto"]) ?>
        </p>
    <?php endforeach; ?>

    <p><?= htmlspecialchars($dados["conclusao"]) ?></p>

    <style>
        body {
            background-color: #f5f0ff;
        }
        h1 {
            color: #4a235a;
            background-color: #ebdef0;
            border-color: #4a235a;
            box-shadow: 6px 6px 0px #4a235a;
        }
        a[href="index.php"] {
            background-color: #8e44ad;
        }
        a[href="index.php"]:hover {
            background-color: #7d3c98;
        }
        p {
            border-left: 5px solid #8e44ad;
        }
    </style>
</body>
</html>
