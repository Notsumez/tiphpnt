<?php 
    include '../conn/connect.php';

    $data = new DateTime();
    if ($_POST) {
        $nome_completo = $_POST['nome_reserva'];
        $email = $_POST['email_reserva'];
        $cpf = $_POST['cpf_reserva'];
       
        
    }
?>