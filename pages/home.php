<?php
$url = "http://localhost/glow/api/banners.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div id="carouselExample" class="carousel slide" data-aos="fade">
            <div class="carousel-inner">
                
                <?php
                foreach ($dadosBanner as $dados) {
                ?>
                    <div class="carousel-item active">
                        <a href="game/<?= $dados->id_game ?>">
                            <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                        </a>
                        
                    </div>

                <?php
                }
                ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <h1 class="text-center">
               <strong>
               Lançamentos do Mês
               </strong>
            </h1>
            <?php

            ?>

            <div class="row">
                <?php
                foreach ($dadosJogos as $dados) {
                ?>
                    <div class="col-12 col-md-3">
                        <div class="card" data-aos="fade-up">
                            <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="card-img-top">
                            <div class="card-text text-center">
                                <p><strong><?= $dados->nome ?></strong></p>
                                <p>
                                    <a href="game/<?= $dados->id ?>" title="sobre do Jogo" class="btn-home ">
                                        Acesse agora

                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>