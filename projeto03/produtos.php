    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="produtos.css">
</head>
<body>

    <?php
    $jsonFilePath = 'produtos.json';

    function getProdutosFromJson($filePath) {
        if (file_exists($filePath)) {
            $jsonData = file_get_contents($filePath);
            $produtos = json_decode($jsonData, true);
            return is_array($produtos) ? $produtos : [];
        }
        return [];
    }
    ?>


    <div class="containerMenu">
        <div class="menu">
            <div class="containerImg">
                <img src="loja.png" alt="">
            </div>
            <div class="opcoes">
                <a href="index.php"><p>Cadastrar</p></a>
                <a href="produtos.php"><p>Produtos</p></a>
            </div>
        </div>
    </div>

    <div class="containerProdutos">
    <div class="produtos">
        <div class="containerProdutoTudo">
            <div class="tituloProduto">
                <p>Eletrônicos:</p>
            </div>
            <div class="containerCadaProduto">
                <?php
                $produtos = getProdutosFromJson($jsonFilePath);
                $temEletronicos = false;

                if (!empty($produtos)) {
                    foreach ($produtos as $produto) {
                        if (
                            isset($produto['categoria']) &&
                            strtolower($produto['categoria']) === 'eletronico'
                        ) {
                            $temEletronicos = true;
                            echo '<div class="cadaProduto">';
                            echo '  <div class="nomeProdto"><p>Nome: ' . htmlspecialchars($produto['nome']) . '</p></div>';
                            echo '  <div class="precoProduto"><p>Preço: R$ ' . htmlspecialchars($produto['preco']) . '</p></div>';
                            echo '  <div class="descricaoProduto"><p>Descrição: ' . htmlspecialchars($produto['descricao']) . '</p></div>';
                            echo '</div>';
                        }
                    }
                }

                if (!$temEletronicos) {
                    echo '<p style="font-size: 20px; padding: 20px;">Nenhum produto eletrônico cadastrado ainda.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <div class="containerProdutos">
    <div class="produtos">
        <div class="containerProdutoTudo">
            <div class="tituloProduto">
                <p>Moda e Acessórios:</p>
            </div>
            <div class="containerCadaProduto">
                <?php
                $produtos = getProdutosFromJson($jsonFilePath);
                $temEletronicos = false;

                if (!empty($produtos)) {
                    foreach ($produtos as $produto) {
                        if (
                            isset($produto['categoria']) &&
                            strtolower($produto['categoria']) === 'moda'
                        ) {
                            $temEletronicos = true;
                            echo '<div class="cadaProduto">';
                            echo '  <div class="nomeProdto"><p>Nome: ' . htmlspecialchars($produto['nome']) . '</p></div>';
                            echo '  <div class="precoProduto"><p>Preço: R$ ' . htmlspecialchars($produto['preco']) . '</p></div>';
                            echo '  <div class="descricaoProduto"><p>Descrição: ' . htmlspecialchars($produto['descricao']) . '</p></div>';
                            echo '</div>';
                        }
                    }
                }

                if (!$temEletronicos) {
                    echo '<p style="font-size: 20px; padding: 20px;">Nenhum produto eletrônico cadastrado ainda.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="containerProdutos">
    <div class="produtos">
        <div class="containerProdutoTudo">
            <div class="tituloProduto">
                <p>Esportes e Lazer:</p>
            </div>
            <div class="containerCadaProduto">
                <?php
                $produtos = getProdutosFromJson($jsonFilePath);
                $temEletronicos = false;

                if (!empty($produtos)) {
                    foreach ($produtos as $produto) {
                        if (
                            isset($produto['categoria']) &&
                            strtolower($produto['categoria']) === 'lazer'
                        ) {
                            $temEletronicos = true;
                            echo '<div class="cadaProduto">';
                            echo '  <div class="nomeProdto"><p>Nome: ' . htmlspecialchars($produto['nome']) . '</p></div>';
                            echo '  <div class="precoProduto"><p>Preço: R$ ' . htmlspecialchars($produto['preco']) . '</p></div>';
                            echo '  <div class="descricaoProduto"><p>Descrição: ' . htmlspecialchars($produto['descricao']) . '</p></div>';
                            echo '</div>';
                        }
                    }
                }

                if (!$temEletronicos) {
                    echo '<p style="font-size: 20px; padding: 20px;">Nenhum produto eletrônico cadastrado ainda.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="containerProdutos">
    <div class="produtos">
        <div class="containerProdutoTudo">
            <div class="tituloProduto">
                <p>Outros:</p>
            </div>
            <div class="containerCadaProduto">
                <?php
                $produtos = getProdutosFromJson($jsonFilePath);
                $temEletronicos = false;

                if (!empty($produtos)) {
                    foreach ($produtos as $produto) {
                        if (
                            isset($produto['categoria']) &&
                            strtolower($produto['categoria']) === 'outros'
                        ) {
                            $temEletronicos = true;
                            echo '<div class="cadaProduto">';
                            echo '  <div class="nomeProdto"><p>Nome: ' . htmlspecialchars($produto['nome']) . '</p></div>';
                            echo '  <div class="precoProduto"><p>Preço: R$ ' . htmlspecialchars($produto['preco']) . '</p></div>';
                            echo '  <div class="descricaoProduto"><p>Descrição: ' . htmlspecialchars($produto['descricao']) . '</p></div>';
                            echo '</div>';
                        }
                    }
                }

                if (!$temEletronicos) {
                    echo '<p style="font-size: 20px; padding: 20px;">Nenhum produto eletrônico cadastrado ainda.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>