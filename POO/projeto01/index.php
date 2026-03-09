<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto01</title>
</head>
<body>
    <?php
        require_once('Caneta.php');

        //criando objeto c1 que recebe a classe Caneta
        //recebe os atributos e metodos
        $c1 = new Caneta("BIC", 0.5);
        $c2 = new Caneta("Moodelo", 1.0);

        echo "<br>Eu tenho uma caneta {$c1 -> getModelo()} de ponta {$c1 -> getPonta()}<br><br>";

            if (isset($_GET["tampa"])) {
                if ($_GET["tampa"] == "destampar") {
                    $c1->destampar();
                } else {
                    $c1->tampar();
                }
            } else {
                $c1->tampar(); 
            }

            $proximoEstado = (isset($_GET["tampa"]) && $_GET["tampa"] == "destampar") ? "tampar" : "destampar";

            $c1->rabiscar();
            echo "<br><br>";
            print_r($c1);
            echo "<br><br>";
            print_r($c2);
        ?>

        <br><br>
        <form method="get">
            <button name="tampa" value="<?php echo $proximoEstado; ?>">
                <?php echo $proximoEstado; ?>
            </button>
        </form>
</body>
</html>