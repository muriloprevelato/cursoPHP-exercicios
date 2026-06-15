<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitivity em PHP</title>
</head>
<body>
    <h1>
        <?php
        /*
            Exercício -> Qual é a saída esperada nesse exercício?
            Lembre-se: PHP é case sensitive!
        */

        $Nome = "Mariana";
        $nome = "Júlia";

        print "Saída 1: $Nome"; // Imprime "Mariana"
        print "<br>Saída 2: $nome"; // Imprime "Júlia" — $Nome e $nome são variáveis diferentes!
        ?>
    </h1>
</body>
</html>