<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto 1</title>
</head>
<body>
    <h1>Sorteador de número</h1>
    <form method="get">
        <p>Sortear número:</p>
        <button name="sortear">sortear</button>
    </form>

    <?php 
    
        if(isset($_GET["sortear"])){
            $numAleatorio = rand(1,100);
            echo "<p>Número aleatório: $numAleatorio</p>";
        }
    ?>

    <a href="desafio03.php"><button>Próxima página</button></a>
</body>
</html>