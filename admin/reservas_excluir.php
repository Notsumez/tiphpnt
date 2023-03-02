<?php 
    include '../conn/connect.php';
    if(isset($_GET['id'])){
        $conn->query("UPDATE pedido_reserva SET id_status = 5 WHERE id = ".$_GET['id']);
        header("location: reservas_lista.php");
    }
    
    
    

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'PHPMailer/src/Exception.php';
    // require 'PHPMailer/src/PHPMailer.php';
    // require 'PHPMailer/src/SMTP.php';
    
    // // Instância da classe
    // $mail = new PHPMailer(true);


    // try {
    // // Configurações do servidor
    // $mail->isSMTP();        //Devine o uso de SMTP no envio
    // $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    // $mail->Username   = 'branerscarners@outlook.com';
    // $mail->Password   = '1234braners';

    // // Criptografia do envio SSL também é aceito
    // $mail->SMTPSecure = 'STARTTLS';

    // // Informações específicadas pelo Google
    // $mail->Host = 'smtp.office365.com';
    // $mail->Port = 587;
    
    // // Define o remetente
    // $mail->setFrom('branerscarners@outlook.com', 'Braners');
    
    // // Define o destinatário
    // $mail->addAddress($row);
    
    // // Conteúdo da mensagem
    // $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    // $mail->Subject = 'Contato de: '.$_POST['nome_contato']. ' email: '. $_POST['email_contato'];
    // $mail->Body = $_POST['comentario_contato']; 

    //     // Enviar
    //     $mail->send();
    //     header("location: admin/reservas_lista.php.");
    //     }

    //     catch (Exception $e)
    //     {
    //         echo "Mensagem não enviada! Erro: {$mail->ErrorInfo}";
    //     }
?>