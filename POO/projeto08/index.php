<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício POO - Vídeo e Usuário</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        pre { background: #222; color: #7fdbff; padding: 15px; border-radius: 8px; overflow-x: auto; }
        h2 { color: #333; }
    </style>
</head>
<body>

    <?php
        require_once 'Usuario.php';
        require_once 'Video.php';

        $u[0] = new Usuario("Ana", 20, "F", "ana_dev");
        $u[1] = new Usuario("Carlos", 50, "M", "carlinhos50");

        $v[0] = new Video("Aula 01 de PHP");
        $v[1] = new Video("Aula 02 de POO");

        $v[0]->play();
        $v[0]->like();
        $u[0]->viuMaisUm();

        echo "<h2>Status dos Vídeos</h2>";
        echo "<pre>";
        print_r($v);
        echo "</pre>";

        echo "<h2>Status dos Usuários</h2>";
        echo "<pre>";
        print_r($u);
        echo "</pre>";
    ?>

</body>
</html>