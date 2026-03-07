<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidor de número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Medidor de número</h1>

<form method="get">
    <p>Digite o número:</p>
    <input type="number" step="any" name="number">
    <button name="analisar">Analisar</button>
</form>

<?php 

if(isset($_GET["analisar"])){

    $numero = $_GET["number"];

    $inteiro = intval($numero);
    $fracionario = $numero - $inteiro;

    echo "<p>Número digitado: $numero</p>";
    echo "<p>Parte inteira: $inteiro</p>";
    echo "<p>Parte fracionária: $fracionario</p>";
}

?>

<a href="superGlobais.php">
<button>Próxima página</button>
</a>

</body>
</html>