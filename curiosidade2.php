<?php
$xml = simplexml_load_file("curiosidade2.xml");

if ($xml === false) {
    die("Erro ao carregar o arquivo XML.");
}

$intro = (string) $xml->intro;
$conclusao = (string) $xml->conclusao;
$items = $xml->item;
$imagem = (string) $xml->imagem;
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
    <h1>O Caça F-39 Gripen Brasileiro</h1>
    <img src="<?= htmlspecialchars($imagem) ?>" alt="F-39 Gripen">

    <p><?= htmlspecialchars(trim($intro)) ?></p>

    <?php foreach ($items as $item): ?>
        <p>
            <strong><?= htmlspecialchars((string) $item->titulo) ?></strong>
            <?= htmlspecialchars((string) $item->texto) ?>
        </p>
    <?php endforeach; ?>

    <p><?= htmlspecialchars(trim($conclusao)) ?></p>

    <style>
        body {
            background-color: #eaf0f6;
        }
        h1 {
            color: #1a3a5c;
            border-color: #1a3a5c;
            background: #d6e4f0;
            box-shadow: 6px 6px 0px #1a3a5c;
        }
        a {
            background-color: #2e7bbf;
        }
        p {
            border-left: 5px solid #2e7bbf;
        }
    </style>
</body>
</html>
