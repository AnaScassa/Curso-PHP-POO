<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto 1</title>
</head>
<body>
    <h1>Conversor de moedas</h1>
    <form method="get">
        <p>Digite o número em real para devolver em dólar</p>
        <input type="number" name="number">
        <button name="converter">converter</button>
    </form>

    <?php 
        if(isset($_GET["converter"])){
            $real = $_GET["number"];
            $dolar = 5.24;
            $valor = $real / $dolar;

            echo "<p>O valor ficou: $valor </p>";
        }
    ?>

    <a href="desafio04.php"><button>Próxima página</button></a>
</body>
</html>