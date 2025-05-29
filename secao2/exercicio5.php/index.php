<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha de uma bebida</title>
</head>
<body>

    <?php
    $bebida = "Café"; 

    echo "<h1>Menu da Cafeteria</h1>";
    echo "<p><strong>Bebida selecionada:</strong> $bebida</p>";

    switch (strtolower($bebida)) {
        case "café":
            echo "<p>Você escolheu Café.</p>";
            break;
        case "chá":
            echo "<p>Você escolheu Chá.</p>";
            break;
        case "suco":
            echo "<p>Você escolheu Suco.</p>";
            break;
        default:
            echo "<p>Bebida não disponível.</p>";
            break;
    }
    ?>

</body>
</html>
