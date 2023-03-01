<?php 
    include 'conn/connect.php';

    if($_POST){
        $nome = $_POST['nome_reserva'];
        $cpf = $_POST['cpf_reserva'];
        $email = $_POST['email_reserva'];
        $acompanhantes = $_POST['acompanhantes_reserva'];
        $data = $_POST['data_reserva'];
        

        $insere = "INSERT INTO pedido_reserva 
        (nome_completo, cpf, email, acompanhantes, data_inicial, id_status)
        VALUES
        ('$nome','$cpf','$email','$acompanhantes','$data','4')
        ";
        $resultado = $conn->query($insere);
        // Após a gravação bem sucedida do produto, volta (atualiza) para lista
        if(mysqli_insert_id($conn)){
            header("location: index.php");
        } 
    }
?>

