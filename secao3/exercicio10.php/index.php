<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuadas de 1 a 5</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #fefefe;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 15px;
            padding: 20px;
            width: 220px;
            box-shadow: 4px 4px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .title {
            text-align: center;
            color: white;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .item {
            background-color: #f0f0f0;
            margin: 4px 0;
            padding: 6px 10px;
            border-radius: 8px;
            text-align: center;
            color: #333;
            font-weight: bold;
        }
        
        .t1 .title { background-color: #e74c3c; }
        .t2 .title { background-color: #f1c40f; }
        .t3 .title { background-color: #2ecc71; }
        .t4 .title { background-color: #3498db; }
        .t5 .title { background-color: #9b59b6; }
    </style>
</head>
<body>

    <h1>Tabuadas de 1 a 5 </h1>

    <div class="container">
        <?php
        for ($num = 1; $num <= 5; $num++) {
            echo "<div class='card t$num'>";
            echo "<div class='title'>Tabuada do $num</div>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $num * $i;
                echo "<div class='item'>$num x $i = $resultado</div>";
            }

            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
