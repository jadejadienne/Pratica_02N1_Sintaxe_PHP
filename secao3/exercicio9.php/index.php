<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ciclo de Produção</title>
</head>
<body>

    <h1>Ciclo de Produção</h1>

    <?php
    $itens = ["Peça A", "Peça B", "Peça C", "Peça D", "Peça E", "Peça F", "Peça G"];

    $quantidadeProduzida = 0;
    $indice = 0;

    while ($quantidadeProduzida < 5) {
        if (isset($itens[$indice])) {
            echo "<p>Produzindo: <strong>{$itens[$indice]}</strong> — Quantidade atual: <strong>$quantidadeProduzida</strong></p>";
            $quantidadeProduzida++;
        } else {
            echo "<p>Não há mais itens para produzir.</p>";
            break;
        }
        $indice++;
    }

    echo "<h3>Produção finalizada. Quantidade total produzida: <strong>$quantidadeProduzida</strong></h3>";
    ?>

</body>
</html>
