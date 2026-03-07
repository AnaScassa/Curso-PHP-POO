<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto 1</title>
</head>
<body>
    <h1>Desafio01</h1>
    <p>Digite seu numero: </p>
    <form method="get">
        <input type="number" name="num">
        <button type="submit">Enviar</button>
    </form>
    <?php
        // esse if só é executado se o usuario enviar o forms
        if(isset($_GET["num"])){

            $numero = $_GET["num"];
            $numMais = $numero + 1;
            $numMenos = $numero - 1;

            echo "<p>O número era $numero | Maior: $numMais | Menor: $numMenos</p>";
        }
    ?>

    <a href="desafio02.php"><button>Próxima página</button></a>
</body>
</html>