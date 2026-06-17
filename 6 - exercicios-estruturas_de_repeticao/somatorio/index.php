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

    Faça um programa que calcule o somatório de 1 até uma constante e exiba o resultado na tela. 

    */

    const limite = 100;
    $somatorio = 0;
    
    for ($i = 1; $i <= limite; $i++) {
        $somatorio += $i;
    }
    
    echo "O somatório de 1 até " . limite . " é: " . $somatorio;

    ?>

    </h1>
</body>
</html>