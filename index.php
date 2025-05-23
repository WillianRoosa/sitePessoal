<?php
ini_set('display_errors', 1); // Ativa a exibição de erros //
ini_set('display_startup_errors', 1); // Ativa a exibição de erros ocorridos durante a inicialização do PHP //
error_reporting(E_ALL); // Define o nível de reporte dos erros //
include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Site Pessoal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH ?>estilo/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>../sitePessoal/img/logomarca.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <meta charset="UTF-8">
</head>

<body>
    <base base="<?php echo INCLUDE_PATH; ?>" />
    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            break;

        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>
    <header>
        <div class="center"> <!-- Center usado para trabalhar com design responsivo -->
            <div class="logo left"><img src="<?php echo INCLUDE_PATH; ?>img/logomarca.png"></div> <!-- Logo site -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div> <!-- Clear -->
        </div> <!-- Div Center -->
    </header>

    <main>
        <?php // script PHP para válidação de existência da página //
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            // Caso não encontrar à página apresentará erro abaixo //
            if ($url != 'sobre' && $url != 'servicos') {
                $pagina404 = true;
                include('pages/error-404.php');
            } else {
                include('pages/home.php');
            }
        };
        ?>
    </main>

    <footer <?php if (isset($pagina404) && $pagina404 === true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>CodexPro - Todos os direitos reservados</p>
        </div> <!-- Center -->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php
    if ($url == 'home' || $url == '') {
    ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <?php
    if ($url == 'contato') {
    ?>
        <script src="pages/contato.php"></script>
    <?php } ?>
</body>

</html>