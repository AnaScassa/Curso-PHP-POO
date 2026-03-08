<?php 

    include_once("conexao.php");
    session_start();

    $cpf = $_SESSION["cpf"];

    $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        "cpf" => $cpf,
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    $saldo = $usuario["saldo"];
    $nome = $usuario["nome"];

    if ($usuario && $usuario["isAdm"] == "sim") {
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="login-card">

            <div class="logo-area">
                <h1>💳 Caixa Eletrônico</h1>
                <p>Painel do usuário <?php echo "$nome"; ?></p>
            </div>

            <div class="saldo-area">
                <h2>Saldo atual</h2>
                <p class="saldo">
                    <?php 
                    echo "$saldo";
                    ?>
                </p>
            </div>

            <div class="acoes">


                <form class="login-form" method="post">
                    <h3>Sacar dinheiro</h3>

                    <div class="input-group">
                        <label>Valor</label>
                        <input type="number" name="valor_saque" placeholder="Digite o valor">
                    </div>

                    <button class="login-button" name="sacar">
                        Sacar
                    </button>

                </form>


                <form class="login-form" method="post">
                    <h3>Depositar dinheiro</h3>

                    <div class="input-group">
                        <label>Valor</label>
                        <input type="number" name="valor_deposito" placeholder="Digite o valor">
                    </div>

                    <button class="login-button" name="depositar">
                        Depositar
                    </button>

                </form>


                <form class="login-form" method="post">
                    <h3>Consultar extrato</h3>

                    <button class="login-button" name="extrato">
                        Ver extrato
                    </button>

                </form>

            </div>

            <div class="logout-area">
                <a href="logout.php">Sair da conta</a>
            </div>

        </div>

    </div>

<?php

if(isset($_POST["sacar"])){

    $valor = $_POST["valor_saque"];

    if(!empty($valor) && $valor > 0){

        if($saldo >= $valor){

            $novoSaldo = $saldo - $valor;

            $sql = "UPDATE usuarios SET saldo = :saldo WHERE cpf = :cpf";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                "saldo" => $novoSaldo,
                "cpf" => $_SESSION["cpf"]
            ]);

            $sql2 = "INSERT INTO transacoes (cpf, tipo, valor) VALUES (:cpf, 'saque', :valor)";

            $stmt2 = $conn->prepare($sql2);

            $stmt2->execute([
                "cpf" => $_SESSION["cpf"],
                "valor" => $valor
            ]);

            echo "Saque realizado com sucesso";

        }else{
            echo "Saldo insuficiente";
        }

    }

}
?>

</body>

</html>