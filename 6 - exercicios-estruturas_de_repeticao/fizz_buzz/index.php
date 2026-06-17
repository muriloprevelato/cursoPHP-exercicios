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

    Faça um programa que percorra os números de 1 até uma constante limite e imprima
    Fizz para os múltiplos de 3, Buzz para os múltiplos de 5 e FizzBuzz para os múltiplos de ambos.

    */

    const limite = 100;
    
    for ($i = 1; $i <= limite; $i++) {
        if ($i % 3 == 0) {
            echo "Fizz";
        }
        if ($i % 5 == 0) {
            echo "Buzz";
        } 
        echo "<br>";
        
    }
    
    echo "O somatório de 1 até " . limite . " é: " . $somatorio;

    ?>

    </h1>
</body>
</html>