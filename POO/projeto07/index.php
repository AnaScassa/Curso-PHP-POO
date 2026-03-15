<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Ave.php';
    require_once 'Mamifero.php';
    require_once 'Peixe.php'; 
    require_once 'Reptil.php';
    require_once 'Cachorro.php';

    // Instanciando os animais (Peso, Idade, Membros, Cor)
    $m = new Mamifero(33.5, 5, 4, "Marrom");
    $a = new Ave(0.5, 2, 2, "Amarelo");
    $r = new Reptil(0.3, 1, 4, "Verde");
    $p = new Peixe(0.1, 1, 0, "Cinza");

    echo "<h3>Mamífero:</h3>";
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();

    echo "<h3>Ave:</h3>";
    $a->locomover();
    $a->fazerNinho();

    echo "<h3>Peixe:</h3>";
    $p->locomover();
    $p->soltarBolha();

    echo "<h3>Réptil:</h3>";
    $r->locomover();

    $c = new Cachorro(12.5, 4, 4, "Preto");

    echo "<h1>Testando o Cachorro</h1>";

    // Testando Sobreposição (Override)
    echo "<h3>Som do Cachorro:</h3>";
    $c->emitirSom(); 

    echo "<hr>";

    echo "<h3>Reações do Cachorro:</h3>";
    echo "Frase 'Toma comida': ";
    $c->reagirFrase("Toma comida");

    echo "Frase 'Vem apanhar': ";
    $c->reagirFrase("Vem apanhar");

    echo "Hora (10h da manhã): ";
    $c->reagirHora(10, 0);

    echo "Hora (21h da noite): ";
    $c->reagirHora(21, 0);

    echo "Dono é verdade? ";
    $c->reagirDono(true);

    echo "Idade 10 anos e Peso 5kg: ";
    $c->reagirIdadePeso(10, 5);
    ?>
    </pre>
</body>
</html>