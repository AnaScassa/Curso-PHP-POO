<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Expressao Aritmética</h1>
    <p>primeiro resolve a potencia</p>
    <p>depois multiplicação, divisão e módulo(a que tiver mais para a esquerda)</p>
    <p>depois soma e subtração</p>
    <p>(** = potencia)</p>
    <p>-------------------------------------------------------------------------------------</p>
    <h1>Função Aritmética</h1>
    <p>Função abs() retorna valor absoluto:</p>
    <?php $r = abs(-500);
    echo "<p> O valor absoluto de -500 é: $r"; ?>
    <p>A fução "base_convert()" converte qualquer numero para binario:</p>
    <?php $r = base_convert(1011, 2, 16);
    echo "<p> O valor binario de 1011 é: $r"; ?>
    <p>As funções "ceil()" = arredonda para cima</p>
    <p>As funções "floor()" = arredonda para baixo</p>
    <p>As funções "round()" = arredonda normal</p>
    <p>A função "intdiv() da a resposta inteira de uma divisão:" </p>
    <?php $r = intdiv(5, 2);
    echo "<p> O valor inteiro da divisão entre 5/2 é: $r"; ?>
    <p>A função min() mostra o valor menor e o max() mostra o maior valor</p>
    <p>Função "pi()" devolve o valor de pi ou "M_PI"</p>
    <p>Funções trigonometricas sin(), cos(), tg()</p>
    <p>Função raiz quadrada sqrqt()</p>

    <a href="desafio01.php"><button>Próxima página</button></a>

</body>
</html>

<!-- Desafio01: usuario falar um numero e pc devolver 1 numero maior e 1 menor -->
<!-- Desafio02: sorteador de números -->
<!-- Desafio03: Conversor de moedas -->
<!-- Desafio04: Conversor de moedas consumindo API -->
<!-- Desafio05: Analisador de número real, analisar qual parte do numero é real e qual n é -->