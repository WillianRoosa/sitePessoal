<?php
require_once __DIR__ . '/../config.php'; // Importa as configurações e dependências //

use EmailEnv\Email; // Usa a classe de envio de e-mails //

header('Content-Type: application/json'); // Define retorno como JSON //

$data = []; // Array usado na validação if e else //
$destSite = $_ENV['MAIL_FROM_TO'] ?? 'willian.dev2025@gmail.com'; // E-mail do site, Fallback caso não exista //

// Verifica se ação e identificador foram enviados //
if (isset($_POST['acao']) && isset($_POST['identificador'])) {
    $identificador = $_POST['identificador'];
    $emailInput = $_POST['email'] ?? '';

    // Valida o e-mail //
    if (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
        $data = ['sucesso' => false, 'mensagem' => 'E-mail inválido!'];
        echo json_encode($data);
        exit; // Encerra se inválido //
    }

    $email = new Email();

    if ($identificador === 'form-home') {
        // Configura conteúdo do e-mail para cadastro //
        $assunto = 'Novo cadastro no site';
        $corpoHtml = '<p>Um novo usuário se cadastrou com o seguinte e-mail: ' . htmlspecialchars($emailInput) . '</p>';


        // Confirmação do e-mail ao cliente //
        $resultadoCliente = $email->enviar(
            $emailInput, // E-mail do usuário //
            'Cliente', // Nome do destinatário //
            'Confirmação de cadastro!', // Assunto do e-mail //
            '<p>Olá Prezado cliente,<br>Recebemos seu cadastro com sucesso!</p>' // Corpo da mensagem HTML //
        );

        // Envio de notificação ao Admin //
        $resultadoAdmin = $email->enviar(
            $destSite, // E-mail enviado para Adm site //
            'Admin Site', // Nome do Adm site, caso necessário //
            $assunto, // Assunto pré definido na variável acima //
            $corpoHtml // Corpo com a mensagem pré-definida acima //
        );
    } else if ($identificador === 'form-contato') {
        // Configuração do conteúdo do e-mail para contato //
        $assunto = 'Nova mensagem do site Codex Pro';
        $corpoHtml = '';

        // Monta corpo com todos os campos enviados //
        foreach ($_POST as $key => $value) {
            if (!in_array($key, ['acao', 'identificador'])) {
                $corpoHtml .= ucfirst($key) . ': ' . htmlspecialchars($value) . '<hr>';
            }
        }


        $nomeCliente = $_POST['nome'] ?? 'Cliente';

        // Envia confirmação ao cliente //
        $resultadoCliente = $email->enviar(
            $emailInput, // E-mail do usuário //
            $nomeCliente, // Nome do cliente //
            'Confirmação de contato', // Assunto do e-mail //
            '<p>Olá ' . htmlspecialchars($nomeCliente) . ', nossa equipe de suporte recebeu seu e-mail. <br> Retornaremos o mais breve possível.</p>' // Corpo da mensagem //
        );

        // E-mail enviado para o site //
        $resultadoAdmin = $email->enviar(
            $destSite,
            'Willian Rosa',
            $assunto,
            $corpoHtml
        );
    } else {
        // Formulário não reconhecido //
        $data = ['sucesso' => false, 'mensagem' => 'Formulário desconhecido'];
        echo json_encode($data);
        exit; // Encerra se inválido //
    }

    // Verifica se ambos os envios foram bem-sucedidos //
    if ($resultadoCliente === true && $resultadoAdmin === true) {
        $data = ['sucesso' => true, 'mensagem' => 'E-mail enviado com sucesso!'];
    } else {
        $data = ['sucesso' => false, 'mensagem' => 'Erro ao enviar e-mail'];
    }
} else {
    // Caso tenha dados incompletos //
    $data = ['sucesso' => false, 'mensagem' => 'Dados incompletos'];
}

die(json_encode($data)); // Retorna a resposta //
