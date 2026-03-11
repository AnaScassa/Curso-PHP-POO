<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p = array();
        $p[0] = new Pessoa("João Silva", 25, "M");
        $p[1] = new Pessoa("Maria Souza", 30, "F");

        $l = array();
        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria Souza", 500, $p[1]);
        $l[2] = new Livro("Algoritmos Avançados", "Alan Turing", 800, $p[0]);

        $l[0]->abrir();
        $l[0]->avancarPag();
        $l[1]->abrir();

        echo "<h2>Detalhes dos Livros</h2>";

        $l[0]->detalhes();
        echo "<hr>";
        $l[1]->detalhes();
        echo "<hr>";
        $l[2]->detalhes();

    ?>
</body>
</html>