<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Temperatura</title>
</head>
<body>

    <?php
    $temperatura = -8; 

    echo "<h1>Classificação de Temperatura</h1>";
    echo "<p><strong>Temperatura registrada:</strong> $temperatura °C</p>";

    if ($temperatura > 0) {
        echo "<p><strong> Classificação: </strong> Positiva </p>";
    } elseif ($temperatura < 0) {
        echo "<p><strong> Classificação: </strong> Negativa </p>";
    } else {
        echo "<p><strong> Classificação: </strong> Zero </p>";
    }
    ?>

</body>
</html>
