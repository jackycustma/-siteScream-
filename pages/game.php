<?php
    $dados = $dadosJogos->$codigo; 
?>
<div class="banner">
    <img src="<?=$dados->banner?>" alt="<?=$dados->banner?>" class="w-100">
</div>
<div class="container">
    <h1 class="text-center"><?=$dados->nome?></h1>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?=$dados->poster?>" alt="<?=$dados->nome?>" class="w-100">
        </div>
        <div class="col-12 col-md-9">
            <p>
                <?=$dados->descricao?>
            </p>
        </div>
    </div>
    <h2 class="text-center"></h2>
    <a href="<?php echo $dados->jogar ?>" class="btn ">JOGUE AGORA</a>
    
    
</div>