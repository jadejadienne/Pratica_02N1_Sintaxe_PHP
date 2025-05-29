<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>

    <?php
    // Estado civil informado (C, S, D ou O)
    $estadoCivil = "S"; 

    echo "<h1>Cadastro de Usuário</h1>";
    echo "<p><strong>Código informado:</strong> $estadoCivil</p>";
    
    switch (strtoupper($estadoCivil)) {
        case "C":
            echo "<p>Estado Civil: Casado(a)</p>";
            break;
        case "S":
            echo "<p>Estado Civil: Solteiro(a)</p>";
            break;
        case "D":
            echo "<p>Estado Civil: Divorciado(a)</p>";
            break;
        case "O":
            echo "<p>Estado Civil: Outro</p>";
            break;
        default:
            echo "<p>Estado civil inválido. Informe C, S, D ou O.</p>";
            break;
    }
    ?>

</body>
</html>
