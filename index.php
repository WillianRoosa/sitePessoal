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
    <?php
    require_once __DIR__ . '/config.php'; // Carrega as configurações e dependências //

    use EmailEnv\Email; // Usa o Namespace da classe de e-mail //

    $destSite = $_ENV['MAIL_FROM_TO'];

    // Verifica se o formulário foi enviado //
    if (isset($_POST['acao']) && $_POST['identificador'] === 'form_home') {
        if ($_POST['email'] != '') { // Verifica se o e-mail não está vazio //

            $emailInput = $_POST['email']; // Armazena o e-mail enviado pelo usuário //

            if (filter_var($emailInput, FILTER_VALIDATE_EMAIL)) { // Valida se o e-mail está no formato correto //

                $assunto = 'Novo cadastro no site';
                $corpoHtml = '<p> Um novo usuário se cadastrou com o seguinte e-mail: ' . htmlspecialchars($emailInput) . '</p>';

                $email = new Email(); // Intancia da classe de envio de e-mail //

                // Envia e-mail de confirmação para o cliente //
                $resultado = $email->enviar(
                    $emailInput, // E-mail do usuário //
                    'Cliente', // Nome do destinatário //
                    'Confirmação de cadastro !!!', // Assunto do e-mail //
                    '<p>Olá Prezado Cliente, <br> Recebemos seu cadastro com sucesso!</p>' // Corpo da mensagem HTML //
                );

                // Aqui envia para o e-mail do site, quando um usuário se cadastrar //
                $resultado = $email->enviar(
                    $destSite, // E-mail enviado para Adm site //
                    'Adin Site', // Nome do Adm site, caso necessário //
                    $assunto, // Assunto pré definido na variável acima //
                    $corpoHtml // Corpo com a mensagem pré-definida acima //
                );

                // Verifica se o envio foi bem sucedido //
                if ($resultado === true) {
                    echo '<script> alert("E-mail enviado com sucesso!");</script>';
                } else {
                    echo '<script> alert("Erro ao enviar e-mail: ' . $resultado . '");</script>';
                }
            } else {
                echo '<script>alert("Não é um e-mail válido!")</script>';
            }
        } else {
            echo '<script>alert("Campos vazios não são permitidos!")</script>';
        }
    } else if (isset($_POST['acao']) && $_POST['identificador'] === 'form_contato') {
        $assunto = 'Nova mensagem do site Codex Pro';
        $corpoHtml = '';

        // Monta o corpo da mensagem com todos os campos enviados //
        foreach ($_POST as $key => $value) {
            if ($key !== 'acao' && $key !== 'identificador') { // Ignora campos de controle
                $corpoHtml .= ucfirst($key) . ": " . htmlspecialchars($value) . "<hr>";
            }
        }

        $emailInput = $_POST['email']; // Captura o e-mail do cliente //

        if (filter_var($emailInput, FILTER_VALIDATE_EMAIL)) { // Valida se o e-mail está no formato correto //

            $email = new Email(); // Instancia da classe de envio de e-mail //

            $resultado = $email->enviar(
                $emailInput, // E-mail do usuário //
                $_POST['nome'], // Nome do cliente //
                'Confirmação de contato', // Assunto do e-mail //
                '<p>Olá ' . htmlspecialchars($_POST['nome']) . ', nossa equipe de suporte recebeu seu e-mail. <br> Retornaremos o mais breve possível.</p>' // Corpo da mensagem //
            );

            // E-mail para o site //
            $resultado = $email->enviar(
                $destSite, // E-mail enviado ao Adm site //
                'Admin Site', // Nome do Adm site, caso necessário //
                $assunto, // Assunto do e-mail pré definido na variável acima //
                $corpoHtml // Corpo da mensagem preenchido na tela de contato //
            );

            // Verifica se o envio foi bem-sucedido
            if ($resultado === true) {
                echo '<script> alert("E-mail enviado com sucesso!");</script>';
            } else {
                echo '<script> alert("Erro ao enviar e-mail: ' . $resultado . '");</script>';
            }
        }
    }
    ?>

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