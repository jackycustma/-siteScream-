<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://abacate/glow/imagens/";

    $equipe[1] = array("nome"=>"","cargo"=>"","foto"=>"{$path}.jpg");
    $equipe[2] = array("nome"=>"","cargo"=>"","foto"=>"{$path}.jpg");
    $equipe[3] = array("nome"=>"","cargo"=>"","foto"=>"{$path}.jpg");
    $equipe[4] = array("nome"=>"","cargo"=>"","foto"=>"{$path}.jpg");

    echo json_encode($equipe);
    // erro 404 de teste o intuito dessa pag é nao funcionar