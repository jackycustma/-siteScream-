<?php
$dados = $dadosJogos->$codigo;
?>
<div class="banner">
    <img src="<?= $dados->banner ?>" alt="<?= $dados->banner ?>" class="w-100">
</div>
<div class="container">
    <h1 class="text-center"><?= $dados->nome ?></h1>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="w-100">
        </div>
        <div class="col-12 col-md-9">
            <p>
                <?= $dados->descricao ?> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maiores nobis rem excepturi cupiditate. Expedita vel aliquid vero explicabo est totam dolores inventore ullam possimus, natus reprehenderit optio cupiditate! Earum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat aspernatur rerum ullam iusto fugit laboriosam, possimus, reiciendis nulla veniam molestias esse soluta dolores quisquam illo, dolor similique facere tempora. Sapiente?


            </p>


        </div>
    </div>
    <h2 class="text-center"></h2>
    <a href="<?php echo $dados->jogar ?>" class="btn d-grid gap-2 col-3 mx-auto btn-lg">JOGUE AGORA</a>


    <div class="row">
    <div class="col-12 col-md-3">
            <img src="<?= $dados->foto ?>" alt="<?= $dados->cargo ?>" class="w-100">
        </div>

    </div>
    <div class="col-12 col-md-9">
        <h2>
        <?= $dados->ceo ?> 
        </h2>
            <p>
                <?= $dados->cargo ?> 

            </p>


 
 


</div>