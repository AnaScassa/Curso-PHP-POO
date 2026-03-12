<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto06 - Herança PHP</title>
</head>
<body>
    <pre>
    <?php
    require_once('Pessoa.php');
    require_once('Professor.php');
    require_once('Funcionario.php');
    require_once('Aluno.php');

    $p1 = new Pessoa("Pedro", 18, "M");
    $p2 = new Aluno("Maria", 20, "F", 1111, "Informática");
    $p3 = new Professor("Claudio", 45, "M", "Matemática", 2500.50);
    $p4 = new Funcionario("Fabiana", 32, "F", "Estoque");

    $p2->setCurso("Administração"); 
    $p3->receberAumento(500.20);    
    $p4->mudarTrabalho();           
    $p1->fazerAniversario();         

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
    </pre>
</body>
</html>