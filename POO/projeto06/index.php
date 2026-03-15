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
    require_once('Professor.php');
    require_once('Funcionario.php');
    require_once('Aluno.php');
    require_once('Visitante.php');
    require_once('AlunoBolsista.php');

    $p2 = new Aluno("Maria", 20, "F", 1111, "Informática");
    $p3 = new Professor("Claudio", 45, "M", "Matemática", 2500.50);
    $p4 = new Funcionario("Fabiana", 32, "F", "Estoque");
    $v1 = new Visitante("Juvenal", 33, "M");
    $b1 = new AlunoBolsista("Ana", 12, "F", true, 2222, "Informatica" );

    $p2->setCurso("Administração"); 
    $p3->receberAumento(500.20);    
    $p4->mudarTrabalho();  
    $p2->pagarMensalidade(); echo "<br>";        
    $b1->pagarMensalidade(); echo "<br>";        
    $b1->renovarBola(); 

    print_r($p2);
    print_r($p3);
    print_r($p4);
    print_r($v1);
    print_r($b1);
    ?>
    </pre>
</body>
</html>