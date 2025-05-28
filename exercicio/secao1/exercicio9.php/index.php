<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Valor de Pi</title>
</head>
<body>

    <?php
    define("PI", 3.1415926535);

    echo "<h1>Valor de π - Pi</h1>";
    echo "<p><strong>Pi:</strong> " . number_format(PI, 4, ',', '.') . "</p>";
    ?>

</body>
</html>
