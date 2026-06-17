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

    Faça um programa que imprima uma pirâmide de asteriscos, onde o número de linhas é definido por uma constante.
    Exemplo, para 5 linhas:

    *
    **
    ***
    ****
    *****

    */

    const numero_linhas = 7;
    
    for ($i = 1; $i <= numero_linhas; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>

    </h1>
</body>
</html>