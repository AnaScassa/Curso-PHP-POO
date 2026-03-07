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

        $url = "https://api.hgbrasil.com/finance";
        $data = json_decode(file_get_contents($url), true);

        $dolar = $data["results"]["currencies"]["USD"]["buy"];

        $valor = $real / $dolar;

        echo "<p>R$ $real equivalem a $ " . number_format($valor,2) . " dólares</p>";
    }

    ?>

    <a href="desafio05.php"><button>Próxima página</button></a>
</body>
</html>