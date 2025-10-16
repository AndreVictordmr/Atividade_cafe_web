<?php

function pegarEndereco($cep){
    $url ="https://brasilapi.com.br/api/cep/v1/$cep";
    $dados = file_get_contents($url);
    $endereco = json_decode($dados,true);

    echo "<div>";
    echo "<h1>Endereço Pessoal</h1>";
    echo "<p><b>Cep: </b>". $endereco['cep'] ."</p>";
    echo "<p><b>Rua: </b>". $endereco['street'] ."</p>";
    echo "<p><b>Bairro: </b>". $endereco['neighborhood'] ."</p>";
    echo "<p><b>Cidade: </b>". $endereco['city'] ."-". $endereco['state'] ."</p>";
    echo "</div>";

}