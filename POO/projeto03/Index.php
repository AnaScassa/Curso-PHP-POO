<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto03</title>
</head>
<body>
    <h1>Projeto controle remoto</h1>
    <?php
        require_once('ControleRemoto.php');
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->menosVolume();
        $c->play();
        $c->abrirMenu();
        $c->fecharMenu();
        $c->pause();
        $c->abrirMenu();
    ?>
</body>
</html>