<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto 1</title>
</head>
<body>
    <center>
        <h1>Variáveis</h1>
        <p>Declarar variaveis com "$"</p>
        <p><?php 
        $nome = "Ana";
        $sobrenome = "Chaparin";

        echo"". $nome ." ". $sobrenome ."";
        ?></p>
        <p>Para declarar constantes em php é igual js</p>
        <p><?php 
        $idade = 0x1A; // valor em hexadecimal
        $casado = false;
        $canal = "cursoo";
        $ano = date("Y");
        $peso = 70.50;
        const curso = "ti";
        echo "Int " . $idade . "\ Float ". $peso ."\ Boolean ". $casado ."";?></p>
        <p>
            <?php 
                //função que mostra tipo da variavel
                var_dump($idade, $casado, $peso, $casado);
            ?>
        </p>
        <p>
            <?php 
                //Aspas duplas interpretam o q estiver dentro
                echo "Nome: $nome //";
                //Aspas simples não interpretam
                echo ' Nome: $nome';
            ?>
        </p>
        <p>String Heredoc:</p>
        <p>
            <?php
            //Serve para quebrar texto sem ser com \n, mas n funciona mt 
                //echo <<< TESTE
                  //  Olá leitores que gostam de $curso!
                    //    Tudo bem com vocês?
                      //  anoo de $ano
                    //Abraços! \u{1F596}
                //TESTE;
            ?>
        </p>
        <p>String Nowdoc:</p>
        <p>
            <?php
            //Serve para quebrar texto sem ser com \n, mas n funciona mt 
                //echo <<< 'TESTE'
                //    Olá leitores que gostam de $curso!
                //        Tudo bem com vocês?
                //        anoo de $ano
                //    Abraços! \u{1F596}
                //TESTE;
            ?>
        </p>
        <a href="formulario.html"><button>Próxima página</button></a>
    </center>
</body>
</html>