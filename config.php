<?php
// Define o caminho do site //

define('INCLUDE_PATH', 'http://localhost/sitePessoal/');

// Carrega o autoload do composer - Responsável por carregar o PHPMailer e outras dependências // 
require_once __DIR__ . '/vendor/autoload.php';

// Carrega as variáveis de ambiente do DotEnv // 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Validação das variáveis obrigatórias //
require_once __DIR__ . '/classes/validateEnv.php';
validateEnv([
    'MAIL_HOST',
    'MAIL_PORT',
    'MAIL_USERNAME',
    'MAIL_PASSWORD',
    'MAIL_FROM_ADDRESS',
    'MAIL_FROM_NAME'
]);

// Inclui a classe de e-mail criada no E-mail.php //
require_once __DIR__ . '/classes/Email.php';
