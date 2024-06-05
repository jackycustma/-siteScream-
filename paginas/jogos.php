<?php
    //recuperar os dados da api
    $dadosApi = file_get_contents("http://localhost/marvel/api/filmes.php");
    $dadosApi = json_decode($dadosApi);

    foreach($dadosApi as $dados) {
        echo "<p>{$dados->id} - {$dados->nome} <br> {$dados->original}</p>";
    }