<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <?php 
        echo "Tipos primitivos em PHP -> Brincando com inteiros<br>";
        /*
        No PHP, podemos representar os inteiros de algumas formas
        1. Decimal -> Direto. Ex: $num = 15;
        2. Binário -> Usando o 0b antes. Ex: $num = 0b1111;
        3. Hexadecimal -> Usando o 0x antes. Ex: $num = 0xF;
        4. Octal -> Usando o 0 antes; Ex: $num = 017;

        Desafio: tente adivinhar as três saídas!
        */

        $n1 = 0b110010;
        $n2 = 0x3C;
        $n3 = 010;

        echo "Primeira saída: $n1\n<br>";
        echo "Segunda saída: $n2\n<br>";
        echo "Terceira saída: $n3\n<br>";
        // <br> pular linha no navegador!
    
    ?>
</body>
</html>