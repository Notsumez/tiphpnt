<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){
        $id_usuario = $_POST['id_usuario'];
        $login = $_POST['login_usuario'];
        $nivel = $_POST['nivel_usuario'];

        $insereUsu = "INSERT INTO tbusuarios
        (id_usuario, login_usuario, nivel_usuario)
        VALUES
        ('$id_usuario','$login','$nivel')
        ";
        $resultado = $conn->query($insereUsu);
        // Após a gravação bem sucedida do usuario, volta (atualiza) para lista
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
        } 
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Usuarios - Insere</title>
</head>
<body>
     <?php include 'menu_adm.php'; ?>
     <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="usuarios_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Usuarios
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuarios_insere.php" method="post" name="form_usuario_insere" enctype="multipart/form-data" id="form_usuario_insere">
                            <label for="login_usuario">Login:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" class="form-control" placeholder="Digite o nome de login do Usuario" maxlength="100" required>
                            </div>
                            <label for="nivel_usuario">Nivel:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nivel_usuario" id="nivel_usuario" class="form-control" placeholder="Digite o nivel do Usuario" maxlength="100" required>
                            </div>
                            <hr>
                            <input type="submit" name="Inserir" class="bt btn-danger btn-block" id="Inserir" value="Inserir">
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </main>
</body>
</html>