<?php

namespace EmailEnv; // Define o namespace da aplicacão. //

use PHPMailer\PHPMailer\PHPMailer; // Importa a classe principal do PHPMailer. //
use PHPMailer\PHPMailer\Exception; // Importa a classe de exceção do PHPMailer. //

class Email
{
    private PHPMailer $mailer; // Atributo privado para armazenar a instância do PHPMailer. //

    public function __construct()
    {
        // Instância do PHPMailer. //
        $this->mailer = new PHPMailer(true);

        // Config básicas de SMPT //
        $this->mailer->isSMTP(); // Define o uso do SMPT //
        $this->mailer->Host = getenv('MAIL_HOST'); // Servidor SMPT //
        $this->mailer->SMTPAuth = true; // Habilita a autenticação SMPT //
        $this->mailer->Username = getenv('MAIL_USERNAME'); // Seu Email //
        $this->mailer->Password = getenv('MAIL_PASSWORD'); // Senha ou App password //
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Criptografia TLS 
        $this->mailer->Port = getenv('MAIL_PORT'); // Porta de envio //

        // Define quem está enviando o e-mail //
        $this->mailer->setFrom(
            $_ENV['MAIL_FROM_ADDRESS'],
            $_ENV['MAIL_FROM_NAME']
        );

        // Configurações adicionais //
        $this->mailer->CharSet = 'UTF-8'; // Define o charset para UTF-8 //
        $this->mailer->isHTML(true); // Habilita o envio de e-mail em HTML //
    }

    /**
     * Método responsável pelo disparo de e-mail
     * 
     * @param string $destinatarioEmail - E-mail do destinatário
     * @param string $destinatarioNome - Nome do destinatário
     * @param string $assunto - Assunto do e-mail
     * @param string $corpoHtml - Corpo do e-mail em HTML
     * @param string $corpoAlternativo - Corpo alternativo (Texto Puro)
     * @return bool|string - True se enviado, ou String com erro
     */

    public function enviar(
        string $destinatarioEmail,
        string $destinatarioNome,
        string $assunto,
        string $corpoHtml,
        string $corpoAlternativo = ''
    ): bool|string {
        try {
            $this->mailer->clearAllRecipients(); // Limpa destinatários anteriores //
            $this->mailer->addAddress($destinatarioEmail, $destinatarioNome); // Adiciona o disnatário //
            $this->mailer->Subject = $assunto; // Define o assunto //
            $this->mailer->Body = $corpoHtml; // Definen o corpo em HTML //
            $this->mailer->AltBody = $corpoAlternativo ?: strip_tags($corpoHtml); // Corpo alternativo sem HTML //

            $this->mailer->send(); // Tenta enviar //
            return true;
        } catch (Exception $e) {
            return "Erro ao enviar e-mail " . $this->mailer->ErrorInfo;
        }
    }
}
