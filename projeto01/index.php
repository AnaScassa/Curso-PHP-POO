<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto 1</title>
</head>
<body>
    <center>
        <a href="datas.php"><button>Próxima página</button></a>
        <h1>
            <?php
            echo "Olá mundo, 'echo'! \u{1F30E}";
            ?>
        </h1>
        <h1>
            <?php 
                echo "INFORMAÇÕES";
                phpinfo();
                echo "CRÉDITOS";
                phpcredits();
            ?>
        </h1>
    </center>
</body>
</html>