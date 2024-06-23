<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGAMES</title>
    <meta name="description" content="Sua página de Games gratuitos">
    <meta name="keywords" content="games, jogos, lançamentos">

    <base href="http://localhost/glow/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icon.png">
</head>

<body>
    <?php

    $url = "http://localhost/glow/api/games.php";

    $dadosApi = file_get_contents($url);

    $dadosJogos = json_decode($dadosApi);


    ?>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/icon.png" alt="glow">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($dadosJogos as $dados) {
                                echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">

                    </a>
                    <a href="contato" title="Contato" class="btn btn-login">
                        <i class="bi bi-person-bounding-box"></i>
                        FEEDBACK
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php

        $pagina = "home";

        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";

            $pagina = explode("/", $pagina);

            $codigo = $pagina[1] ?? NULL;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
    </main>

    <footer class="footer">
        <p class="text-center">
            <strong>GLOWGAMES - Sua Loja de Games Pirats</strong>
        </p>
        <p class="text-center">
            Desenvolvido por Jacqueline Custma
        </p>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>