<?php 
    include 'conn/connect.php';
    $lista = $conn->query("select * from tbprodutos where id_tipo_produto = 10;");
    $row_produtos = $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Ofertas - Braners Carners</title>
</head>
<body>
    <main>
    <?php if($num_linhas>0){ ?>
        <h2 class="breadcrumb text-center alert-danger">
                <strong>NÃO PERCA ESSA OPORTUNIDADE ÚNICA!!!</strong>
            </h2>
        <div class="fundo-ofertas position-relative">
            <div class="posicao-btn">
                <button class="btn btn-danger position-absolute bottom-0 end-0 btn-lg tamanhobtn">FAÇA SUA RESERVA</button>
            </div>
        </div>
        <?php }?>
    </main>
</body>
</html>