<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Participantes</title>
</head>
<body>

    <h1>Lista de Participantes</h1>

    <?php
    $participantes = [
        "Jadienne",
        "Thalia",
        "Matheus",
        "Eduarda",
        "Geovanna",
        "Amanda",
        "Pedro",
        "João",
        "Asmin",
        "Lucas"
    ];

    echo "<ul>";
    foreach ($participantes as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
