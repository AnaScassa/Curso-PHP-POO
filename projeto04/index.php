<?php

include_once("conexao.php");
session_start();

include("login.html");

if(isset($_POST["entrar"])){
    $cpf = trim($_POST["cpf"]);
    $senha = trim($_POST["senha"]);
    if(empty($cpf) || empty($senha)){
        echo "<p>Erro, cpf ou senha incorretos</p>";
    }else{
        try{
            $sql = "SELECT * FROM usuarios WHERE cpf = :cpf AND senha = :senha";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                'cpf' => $cpf,
                'senha' => $senha
            ]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if($usuario){
                if($usuario['isAdm'] == "sim"){
                    header("Location: adm.php");
                    exit();
                }else if($usuario['isAdm'] == "nao"){
                    header("Location: caixa.php");
                    exit();
                }
            }else{
                echo "<center><p>CPF ou senha inválidos</p></center>";
            }
        }catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>  