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
    <h1>Resultado do formulario:</h1>

    <?php 
    //REQUEST é a junção do post e get
        var_dump($_REQUEST);
        
        // "??" é um operador que se nao tiver nome vai a outra opção
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

        echo "<p>Olá ${nome} ${sobrenome}"

    ?>
    <a href="expressaoAritmetica.php"><button>Próxima página</button></a>
    </center>
</body>
</html>