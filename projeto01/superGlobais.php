<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto 1</title>
</head>
<body>
    <main>
        <a href="formularioRetroalimentado.php">
            <button>Próxima página</button>
        </a>
        <p>GET Recebe variavel pela url</p>
        <p>POST recebe variavel pelo form</p>
        <form method="post">
            <input type="text" name="texto">
            <button name="enviar">Enviar</button>
        </form>
        <pre>
            <?php 
                setcookie("dia-da-semana","SEGUNDA", time() +3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Super global GET</h1>";
                var_dump($_GET);

                if(isset($_POST["enviar"])) {
                    echo "<h1>Super global POST</h1>";
                    var_dump($_POST);
                }

                echo "<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST); 

                echo "<h1>Super global COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super global SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Super global ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Super global SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Super global GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>