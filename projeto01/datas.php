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
        <h1>Exemplos de data hora</h1>
        <p>Podemos chamar a função "date(d/M/Y)" para datas</p>
        <p><?php echo "Hoje é dia " . date(format: "d/M/Y")?></p>
        <p>Podemos chamar a função "date(G:i:s) para horas"</p>
        <p><?php 
        // configurando time zone para horario de sp
        date_default_timezone_set( "America/Sao_Paulo");
        echo "e hora atual é " . date(format: "G:i:s T")?> </p>
        <p>Não esquecer que o php concatena com "."</p>
        <p>E faz comentario php com "//"</p>
        <a href="variaveis.php"><button>Próxima página</button></a>
    </center>
</body>
</html>