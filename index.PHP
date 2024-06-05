<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScreamGames</title>
    <meta name="description" content="Site de Jogos Online">
    <meta name="keywords" content="Jogos, diversão, online, Games">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/logo2.jpeg">
 
</head>

<body>
    <header class="header">
        <a href="index.php" title="ScreamGames" class="header-logo">
            <img src="imagens/logo2.png" alt="ScreamGames">
        </a>

        <nav class="header-menu">
            
            <ul>
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=sobre">
                        Catálogo
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=filme">
                        Registre-se
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
           
            $pagina = $_GET["pagina"] ?? "home";

           
            $pagina = "paginas/{$pagina}.php";

          
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }

        ?>
    </main>

    <footer class="footer">
        <p>  Todos os direitos reservados - Desenvolvido por Jacqueline Custma</p>
    </footer>
</body>
</html>