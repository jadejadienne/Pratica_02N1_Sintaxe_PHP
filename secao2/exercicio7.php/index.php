<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alerta Climático</title>
</head>
<body>

    <?php

    $temperatura = 27; 

    echo "<h1>Alerta Climático</h1>";
    echo "<p><strong>Temperatura atual:</strong> {$temperatura}°C</p>";

    if ($temperatura < 0) {
        echo "<p><strong>Alerta:</strong> Alerta de Gelo!</p>";
    } elseif ($temperatura >= 0 && $temperatura <= 15) {
        echo "<p><strong>Alerta:</strong> Clima Ameno</p>";
    } elseif ($temperatura > 15 && $temperatura <= 25) {
        echo "<p><strong>Alerta:</strong> Clima Agradável</p>";
    } else {
        echo "<p><strong>Alerta:</strong> Atenção: Calor Extremo!</p>";
    }
    ?>

</body>
</html>
