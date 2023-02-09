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
            sigla_tipo = '$sigla_tipo',
            rotulo_tipo = '$rotulo_tipo'
            where id_tipo = $id";
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

    // Selecionar os dados de chave estrangeira (lista de tipos de produto)
    $consulta_fk = "select * from tbtipos order by rotulo_tipo asc";
    $lista_fk = $conn->query($consulta_fk);
    $row_fk = $lista_fk->fetch_assoc();
    $nlinhas = $lista_fk->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Produto - Insere</title>
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
                            <hr>
                            <input type="submit" name="Alterar" class="bt btn-danger btn-block" id="Alterar" value="Alterar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </main>
     <!-- script para a imagem  -->
     <script>
        document.getElementById("imagem_produto").onchange = function() {
            var reader = new FileReader();
            if(this.files[0].size>528385){
                alert("A imagem deve ter no máximo 500KB");
                $("#imagem").attr("src", "blank");
                $("#imagem").hide();
                $("#imagem_produto").wrap('<form>').closest('form').get(0).reset();
            }
            if(this.files[0].type.indexOf("image")==-1){
                alert("Formato Inválido");
                $("#imagem").attr("src", "blank");
                $("#imagem").hide();
                $("#imagem_produto").wrap('<form>').closest('form').get(0).reset();
                $("#imagem_produto").unwrap();
                return false
            }
            reader.onload = function(e){
                document.getElementById("imagem").src = e.target.result
                $("#imagem").show();
            }
            reader.readAsDataURL(this.files[0])
        }
     </script>
</body>
</html>