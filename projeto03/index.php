<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
    
    <div class="containerFormulario">
        <div class="formulario">
            <div class="titulo">
                <p>Cadastrar produtos</p>
            </div>
            <div class="perguntas">
                <form method="post" class="form1">
                 <input type="text" name="in1" placeholder="Nome do Produto" required>
                <input type="number" step="0.01" name="in2" placeholder="Preço" required>
                <input type="text" name="in3" placeholder="Descrição" required>
                    <select name="in4" id="in4" required class="perguntas">
                    <option value="" disabled selected hidden>Categoria</option>
                    <option value="eletronico">Eletronicos</option>
                    <option value="moda">Moda e Acessórios</option>
                    <option value="lazer">Esportes e Lazer</option>
                    <option value="outros">Outros</option>
                </select>
                <input type="file"  name="in5" class="filebtn" >
                <button type="submit" name="submit_produto" class="botao">Salvar Produto</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    // Caminho do arquivo JSON
    $jsonFilePath = 'produtos.json';

    // Função para ler produtos do arquivo JSON
    function getProdutosFromJson($filePath) {
        if (!file_exists($filePath)) {
            return []; 
        }

        $jsonData = file_get_contents($filePath);
        $produtosArray = json_decode($jsonData, true);

        return is_array($produtosArray) ? $produtosArray : [];
    }

    // função para salvar produtos no arquivo JSON
    function saveProdutosToJson($filePath, $produtosArray) {
        $jsonData = json_encode($produtosArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        return file_put_contents($filePath, $jsonData);
    }

    // verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_produto'])) {
        $nome = htmlspecialchars($_POST['in1'] ?? 'Não informado');
        $preco = htmlspecialchars($_POST['in2'] ?? '0');
        $descricao = htmlspecialchars($_POST['in3'] ?? 'Não informada');
        $categoria = htmlspecialchars($_POST['in4'] ?? 'Não informada');

        // cria novo produto
        $novoProduto = [
            'nome' => $nome,
            'preco' => $preco,
            'descricao' => $descricao,
            'categoria' => $categoria
        ];

        // aqui quebra o css se for muito grande o tanto decaractere. ent controlo para o usuario nao colocar muito
        if(strlen($nome) > 20 || strlen($descricao) > 20){
            echo "<div class='message' >";
            echo "<p>Produto com nome ou descrição com muitos caractéres. Faça novamente!</p>";
            echo "</div>";
        }else{
        // Lê produtos existentes
        $produtos = getProdutosFromJson($jsonFilePath);

        // Adiciona novo produto
        $produtos[] = $novoProduto;

        // Salva no arquivo
        if (saveProdutosToJson($jsonFilePath, $produtos)) {
            echo "<div class='message' >";
            echo "<p>Produto <strong>'$nome'</strong> salvo com sucesso!</p>";
            echo "<ul>";
            echo "<li><strong>Preço</strong>: R$ " . number_format((float)$preco, 2, ',', '.') . "</li>";
            echo "<li><strong>Descrição</strong>: $descricao</li>";
            echo "<li><strong>Categoria</strong>: $categoria</li>";
            echo "</ul>";
            echo "</div>";
        } else {
            echo "<div class='message' >";
            echo "<p>❌ Erro ao salvar o produto no arquivo JSON.</p>";
            echo "</div>";
        }
        }
       
    }
?>
     
   <style>
    .message{
    width: auto;
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    }

    .message p{
        color: black;
        font-size: 20px
    }
    
    .message li{
     font-size: 18px;
    }

    
   </style>


</body>

</html>
