<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes em PHP</title>
</head>
<body>
    <h1>
    <?php 
    /*

    Faça um programa que imprima a tabuada do número 7, de 1 a 10. 
    Utilize estruturas de repetição para isso.

    */

    const numero = 7;
    
    for ($i = 1; $i <= 10; $i++) {
        echo numero . " x " . $i . " = " . (numero * $i) . "<br>";
    }

    $i = 1;
    while ($i <= 10) {
        echo numero . " x " . $i . " = " . (numero * $i) . "<br>";
        $i++;
    }

    ?>

    </h1>
</body>
</html>