<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Banco POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ContaBanco.php';
        require_once 'Usuario.php';

        $usuario1 = new Usuario();
        $usuario1->setNome("Jubileu");
        $usuario1->setSobrenome("da Silva");
        $usuario1->setGenero("Homem");
        $usuario1->setDataNascimento("19/10/2005");

        $usuario2 = new Usuario();
        $usuario2->setNome("Creuza");
        $usuario2->setSobrenome("da Silva");
        $usuario2->setGenero("Homem");
        $usuario2->setDataNascimento("19/10/2010");

        // 1. Criando a conta do Jubileu (Conta Corrente)
        $p1 = new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono($usuario1->getNome());
        $p1->setNumConta(1111);

        // 2. Criando a conta da Creuza (Conta Poupança)
        $p2 = new ContaBanco();
        $p2->abrirConta("CP");
        $p2->setDono($usuario2->getNome());
        $p2->setNumConta(2222);

        // 3. Realizando operações
        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100); // Creuza saca 100
        
        // 4. Pagando mensalidade
        $p1->pagarMensal(); // CC paga 12
        $p2->pagarMensal(); // CP paga 20

        // 5. Tentando fechar conta com saldo (Vai dar erro)
        $p1->fecharConta();

        // 6. Exibindo o estado final dos objetos
        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>