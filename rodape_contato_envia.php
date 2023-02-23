<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    // Instância da classe
    $mail = new PHPMailer(true);


    try {
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'branerscarners@outlook.com';
    $mail->Password   = '1234braners';

    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'STARTTLS';

    // Informações específicadas pelo Google
    $mail->Host = 'smtp.office365.com';
    $mail->Port = 587;
    
    // Define o remetente
    $mail->setFrom('branerscarners@outlook.com');
    
    // Define o destinatário
    $mail->addAddress($_POST['email_contato'], $_POST['nome_contato']);
    
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Assunto';
    $mail->Body    = 'Este é o corpo da mensagem <b>Olá em negrito!</b>';
    $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    
    // Enviar
    $mail->send();
    echo 'A mensagem foi enviada!';
}

catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>