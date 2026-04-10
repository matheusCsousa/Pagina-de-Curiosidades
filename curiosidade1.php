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
    <h1>Maior Floresta Tropical do Mundo</h1>
    <?php $imagem = "imagens/amazonia.jpg"; ?>
    <img src="<?= htmlspecialchars($imagem) ?>" alt="Foto">
    <p>
        A Amazônia
        é a maior floresta tropical e bacia hidrográfica do mundo, abrangendo nove países e abrigando 10% da biodiversidade conhecida. Com cerca de 390 bilhões de árvores e 30 milhões de espécies, a floresta funciona como um regulador climático global e produz grande parte da chuva da América do Sul.
        Aqui estão algumas das curiosidades mais marcantes sobre a Amazônia:
    </p>
    <p>
        Rio Subterrâneo: Existe um rio subterrâneo, batizado de Hamza, a 4 mil metros de profundidade, com extensão similar ao Rio Amazonas.
        Fertilização pelo Saara: Areia do deserto do Saara atravessa o oceano e fertiliza o solo da Amazônia com minerais.
        Biodiversidade Imensa: Abriga 2.500 espécies de árvores e é lar da Pororoca, onda que pode atingir 4 metros de altura.
        Árvores que "Andam": A espécie Socratea exorrhiza desenvolve novas raízes na direção do sol, deslocando-se de lugar ao longo do tempo.
        Farmácia Natural: Cerca de 25% dos medicamentos modernos têm origem em plantas da Amazônia, mas menos de 1% das plantas medicinais foram testadas.
        Rio Amazonas Gigante: Lança cerca de 175 milhões de litros de água por segundo no Oceano Atlântico.

    </p>
    <p>
        A Amazônia é frequentemente chamada de "pulmão do mundo", mas na verdade funciona mais como um "ar-condicionado" global, absorvendo CO2 e mantendo o clima equilibrado.
    </p>
    <style>
        body { background-color: #f1f8f1; }
        h1 { color: #1b3d2f; border-color: #1b3d2f; box-shadow-color: #1b3d2f; background: #e0e6d6; }
        a { background-color: #27ae60; }
        p { border-left: 5px solid #27ae60; }
    </style>
</body>
</html>
