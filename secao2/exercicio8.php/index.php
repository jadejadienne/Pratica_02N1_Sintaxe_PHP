<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preferência de Cor</title>
</head>
<body>

    <?php

    $cor = "Amarelo"; 

    echo "<h1>Configuração de Tema</h1>";
    echo "<p><strong>Cor escolhida:</strong> $cor</p>";

    switch (strtolower($cor)) {
        case "vermelho":
            echo "<p>Você escolheu o tema Vermelho.</p>";
            break;
        case "azul":
            echo "<p>Você escolheu o tema Azul.</p>";
            break;
        case "verde":
            echo "<p>Você escolheu o tema Verde.</p>";
            break;
        default:
            echo "<p>Cor não disponível. Tema padrão aplicado: Azul.</p>";
            break;
    }
    ?>

</body>
</html>
