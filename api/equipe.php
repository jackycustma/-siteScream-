<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/glow/imagens/";

    $equipe[1] = array(
        "nome"=>"Jacqueline Custma",
        "cargo"=>"Desenvolvedora do site Custma Games e Glow Games",
        "foto"=>"{$path}jacqueline.jpeg");
    
    $equipe[2] = array(
        "nome"=>"Elaine Da Silva",
        "cargo"=>"Desenvolvedora de Sites e do jogo Walka",
        "foto"=>"{$path}elaine.jpeg");

    $equipe[3] = array(
        "nome"=>"Vanderléia Ribeiro",
        "cargo"=>"Desenvolvedora de Sites e do jogo BUG FROM HELL",
        "foto"=>"{$path}vanderleia.jpeg");

    $equipe[4] = array(
        "nome"=>"Everton Cordeiro",
        "cargo"=>"Desenvolvedor de Sites e do jogo Ninja Frog",
        "foto"=>"{$path}everton.jpeg");

    $equipe[5] = array(
        "nome"=>"Vinicius Cavalcanti",
        "cargo"=>"Desenvolvedor de Sites e do jogo The Last Words",
        "foto"=>"{$path}vinicius.jpeg");

    $equipe[6] = array(
        "nome"=>"Caua De Castro Muniz",
        "cargo"=>"Desenvolvedor de Sites e do jogo Forest",
        "foto"=>"{$path}caua.jpeg");

    $equipe[4] = array(
        "nome"=>"Paulo Verdramini Schanam",
        "cargo"=>"Desenvolvedor de Sites e do jogo Warstars",
        "foto"=>"{$path}paulo.jpeg");

    echo json_encode($equipe);

    // erro 404 de teste o intuito dessa pag é nao funcionar