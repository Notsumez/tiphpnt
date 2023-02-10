<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){
        $id_tipo = $_POST['id_tipo'];
        $sigla = $_POST['sigla_tipo'];
        $rotulo = $_POST['rotulo_tipo'];

        $id = $_POST['id_tipo']; 

        $updateSql = "UPDATE tbtipos
            set id_tipo = '$id_tipo',
            sigla_tipo = '$sigla',
            rotulo_tipo = '$rotulo'
            where id_tipo = $id;";
        $resultado = $conn->query($updateSql);
        if($resultado){
            header('location: tipos_lista.php');
        }
    }

    if($_GET){
        $id_form = $_GET['id_tipo'];
    } else {
        $id_form = 0;
    }
    $lista = $conn->query("select * from tbtipos where id_tipo = $id_form");
    $row = $lista->fetch_assoc();
    $numRow = $lista->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Tipos - Atualiza</title>
</head>
<body>
     <?php include 'menu_adm.php'; ?>
     <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="tipos_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Alterando Tipos
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="tipos_atualiza.php" method="post" name="form_tipo_atualiza" enctype="multipart/form-data" id="form_tipo_atualiza">
                        
                        <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo $row['id_tipo'] ?>">

                        <label for="sigla_tipo">Sigla:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a Sigla do tipo" maxlength="100" value="<?php echo $row['sigla_tipo']; ?>" required>
                            </div>
                            <label for="rotulo_tipo">Rotulo:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o rotulo do Tipo" maxlength="100" value="<?php echo $row['rotulo_tipo']; ?>" required>
                            </div>
                            <br>
                            
                            <input type="submit" name="alterar" class="bt btn-danger btn-block" id="alterar" value="Alterar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </main>
</body>
</html>