<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
    <style>
        body {
            background-color: #001d3d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .calculadora {
            background-color: #003566;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            color: #f0f0f0;
            text-align: center;
        }

        .calculadora h1 {
            margin-bottom: 20px;
        }

        .campo {
            width: 100px;
            padding: 10px;
            margin: 5px;
            border-radius: 8px;
            border: none;
            background-color: #ffc300;
            color: #000;
            font-size: 18px;
        }

        .botao {
            width: 220px;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background-color: #ffd60a;
            color: #000;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botao:hover {
            background-color: #fef9ef;
        }

        .resultado {
            background-color: #ffc300;
            color: #001d3d;
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="calculadora">
        <h1>Calculadora de Somar </h1>

        <form method="POST">
            <input class="campo" type="number" name="num1" placeholder="Número 1" required>
            <br>
            <input class="campo" type="number" name="num2" placeholder="Número 2" required>
            <br>
            <input class="botao" type="submit" value="Somar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            function somar($a, $b) {
                return $a + $b;
            }

            $resultado = somar($num1, $num2);

            echo "<div class='resultado'>Resultado: $num1 + $num2 = $resultado</div>";
        }
        ?>
    </div>

</body>
</html>
