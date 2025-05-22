<?php
// Define o caminho do site //
define('INCLUDE_PATH', 'http://localhost/sitePessoal/');

// Carrega o autoload do composer - Responsável por carregar o PHPMailer e outras dependências // 
require 'classes/vendor/autoload.php';

// Inclui a classe de e-mail criada no E-mail.php //
require_once 'classes/Email.php';

use EmailEnv\Email; // Usa a classe Email do namespace EmailEnv //

$email = new Email(); // Instanceia a classe Email //

$resultado = $email->enviar(
    'willian.dev2025@gmail.com', // E-mail do destinatário //
    'Willian Rosa', // Nome do destinatário //
    'Teste de envio de E-mail', // Assunto //
    '<p> Este é um <strong>teste</strong> de envio.</p>' // Corpo do e-mail em HTML //
);

// Exibe mensagem com base no resultado //
if ($resultado === true) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo $resultado; // Exibe o erro retornado
}
