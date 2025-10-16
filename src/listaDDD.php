<?php

        $arquivo = "json/dados_clientes.json";

        $resposta = file_get_contents($arquivo);
        $dados = json_decode($resposta, true);

        function dadosCliente($cliente){
        echo "<div>
            <h1> Informaçoes pessoais </h1>
            <p>Nome :: ". $cliente['nome']."</p>";
        echo"<p>Idade:: ".$cliente['idade']."</p>";
        echo"<p>Profissao:: ".$cliente['profissão']."</p>";
        echo"<p>Cidade:: ".$cliente['cidade']."</p></div>";
        }


