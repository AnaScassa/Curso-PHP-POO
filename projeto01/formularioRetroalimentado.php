<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto 1</title>
</head>
<body>
    <h1>Formulario RetroAlimentado</h1>
    <br>
    <?php 
        //Capturando os dados do Formulárioo Retroalimentado
        //o action do form envia os dados para a url
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
        $resultado = $valor1 + $valor2;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" value="<?=$valor1?>">
            <label for="v1">Valor 2</label>
            <input type="number" name="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Soma: </h2>
        <?php 
        echo "A soma de $valor1 + $valor2 = $resultado"
        ?>
    </section>
</body>
</html>