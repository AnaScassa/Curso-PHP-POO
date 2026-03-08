<?php

    include_once("conexao.php");
    session_start();

    include("cadastro.html");

    if(isset($_POST["cadastrar"])){
        $nome = trim($_POST["nome"]);
        $cpf = trim($_POST["cpf"]);
        $senha = trim($_POST["senha"]);
        $confirmarSenha = trim($_POST["confirmarSenha"]);


        if(empty($nome) || empty($cpf) || empty($senha) || empty($confirmarSenha)){
            echo "<p>Preencha tudo</p>";
        }else{
            if($senha == $confirmarSenha){
                try{
                    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                    $isAdm = "nao";
                    $saldo = 0;
                    $sql = "INSERT INTO usuarios (nome, senha, saldo, isAdm, cpf) VALUES (:nome, :senha, :saldo, :isAdm, :cpf)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([
                        'nome' => $nome,
                        'senha' => $senhaHash, 
                        'saldo' => $saldo,
                        'isAdm' => $isAdm,
                        'cpf' => $cpf,
                    ]);
                    header("Location: index.php");
                    exit();

                }catch(PDOException $e) {
                    echo "ERRO: ". $e->getMessage();
                }
            }else{
                echo "<p>As senhas não estão iguais</p>";
            }
        }

    }
?>