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
    Variáveis (constantes, também) com PHP -> Conceitualmente, as variáveis em php são bem como em qualquer outra linguagem.
    Aqui temos uma mudança sintática, de declaração.

    Para a declaração de variável usamos o $. Constante sinalizamos com a palavra reservada const.
    Diferente de outras linguagens, não precisamos explicitar o tipo da variável.

    Variáveis em php são armazenadas na memória do servidor.

    Durante o código ou execução podemos mudar nossas variáveis.
    CONSTANTES não podem ser modificadas.

    Interessante destacar que o símbolo '=' deve ser entendido como "atribuição" / "recebe".

    Por convenção, constantes em PHP são escritas em MAIÚSCULAS (UPPERCASE).

    Exercício -> Declarar variáveis que representam o nome de uma pessoa e uma constante para o dia de seu nascimento.
    Imprimir de diferentes formas.
    */

    $nome = "Jorginho";
    $sobrenome = "da Silva";
    const DIA_DO_NASCIMENTO = 20;

    echo "Muito prazer, $nome $sobrenome";
    echo "<br>Nasceu no dia " . DIA_DO_NASCIMENTO;

    echo "<br>"; // Pula linha no navegador.
    // Outra maneira: usando o operador de concatenação (.) -> Como se fosse um " + "

    echo "Muito prazer, " . $nome . " " . $sobrenome;

    $nome = "Marcos";
    $sobrenome = "Toninho";

    echo "<br>Muito prazer, $nome $sobrenome";
    
    ?>

    </h1>
</body>
</html>