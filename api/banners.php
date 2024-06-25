<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/glow/imagens/";

    $banners[0] = array("nome"=>"Helpsauro","imagem"=>"{$path}HelpSaurobanner.png","id_game"=>1);
    $banners[1] = array("nome"=>"Wars tars","imagem"=>"{$path}bannerwarstar.png","id_game"=>2);
    $banners[2] = array("nome"=>"The Last of Brs","imagem"=>"{$path}tlwbanner.png","id_game"=>3);

    echo json_encode($banners);