<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutadores</title>
</head>
<body>
    <?php
        include_once('Lutador.php');
        include_once('Luta.php');

        $l = array();
        
        $l[0] = new Lutador("Ana", 20, "Brasil", 1.72, 3, 2, 1, 85);
        $l[1] = new Lutador("Carlos", 28, "EUA", 1.80, 10, 3, 2, 85);
        $l[2] = new Lutador("João", 25, "Portugal", 1.75, 8, 4, 1, 68);
        $l[3] = new Lutador("Pedro", 30, "Argentina", 1.82, 12, 2, 0, 90);
        $l[4] = new Lutador("Lucas", 22, "Brasil", 1.70, 5, 3, 1, 66);
        $l[5] = new Lutador("Miguel", 27, "México", 1.78, 9, 5, 2, 77);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[0], $l[1]);
        $UEC01->lutar();

        $l[0]->status();
        $l[1]->status();
    ?>
</body>
</html>