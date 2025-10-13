<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
    <?php
        $arquivo = "json/dados_clientes.json";

        $resposta = file_get_contents($arquivo);
        $dados = json_decode($resposta, true);

        function dadosCliente($cliente){
        echo "
            <h1> Dados do Cliente </h1>
            <p>Nome :: ". $cliente['nome']."</p>";
        echo"<p>Idade:: ".$cliente['idade']."</p>";
        echo"<p>Profissao:: ".$cliente['profissão']."</p>";
        echo"<p>Cidade:: ".$cliente['cidade']."</p>";
        }

        dadosCliente($dados['cliente1'])
    ?>
        
    </body>
</html>