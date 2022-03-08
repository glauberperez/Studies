
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imparPar</title>
</head>
<body>
    <p>
        6. Desenvolva um programa para calcular a soma de todos os números ímpares de 0 à 20<br>
        e a multiplicação de todos os números pares de 0 à 20.
    </p>
    <?php
        $imparcount = 1;
        $parcount = 1;
        echo("<h1>números impares:</h1>");
        for($i=0;$i!=20;$i++){
            echo(($imparcount=$imparcount+2)."<br>");
        }
        echo("<h1>números pares:</h1>");
        for($i=0;$i!=20;$i++){
            echo(($parcount=$parcount*2)."<br>");
        }
    ?>
</body>
</html>
