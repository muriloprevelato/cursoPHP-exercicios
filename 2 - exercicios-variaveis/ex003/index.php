<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regras para nomes</title>
</head>
<body>
    <h1>
        <?php 
        /*
        Regras para identificadores de variáveis:
            1. Variáveis sempre começam com $
            2. Segundo caracter pode ser uma letra ou também um _ 
            3. São permitidos letras (minúsculas e maiúsculas) e números, além do símbolo _.
            4. Acentos em caracteres são permitidos (mas não recomendados, não é uma boa prática).
            5. Linguagem case sensitive -> faz diferenciação entre letras minúsculas e maiúsculas.
            6. Palavras reservadas não podem ser usadas.
        
        Recomendação:
            - Nomes claros / autoexplicativos.

        Exercício -> Ache o erro nos 3 casos seguintes:
        */

        // Caso 1:
        $nome = "Jorge";
        echo "Bem vindo, $Nome"; // Erro: PHP é case sensitive. $Nome != $nome.
        // Correção: echo "Bem vindo, $nome";

        // Caso 2:
        idade = 25; // Erro: faltou o $ na declaração da variável.
        print "$nome tem $idade anos";
        // Correção: $idade = 25;

        // Caso 3:
        $1numero = 35.2; // Erro: identificadores não podem começar com número.
        echo "Número definido $1numero";
        // Correção: $numero1 = 35.2;
        ?>
    </h1>
</body>
</html>