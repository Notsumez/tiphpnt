<?php 
    include "conn/connect.php";
    $idTipo = $_GET['id_tipo'];
    $listaPorTipo = $conn->query("select * from vw_tbprodutos where id_tipo_produto = $idTipo;");
    $rowPorTipo = $listaPorTipo->fetch_assoc();
    $numRows = $listaPorTipo->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>busca por tipo</title>
</head>
<body class="fundofixo">
    <?php include 'menu_publico.php';?>
    <div class="container">
        <!-- mostrar se a consulta retornar vazio -->
        <?php if($numRows == 0){?>
            <h2 class="breadcrumb text-center" id="textoProdDes">
                <a href="javascript:window.history.go(-1)" class="btn btnVoltar" style="border: 1px solid white;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                Não há produtos cadastrados para o tipo selecionado.
            </h2>
        <?php }?>
        <!-- Mostrar se a consulta retornou produtos  -->
        <?php if($numRows>0){?>
            <h2 class="breadcrumb text-center" id="textoProdDes">
                <a href="javascript:window.history.go(-1)" class="btn btnVoltar" style="border: 1px solid white;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <p>Produtos do tipo: <b style="color: #AF2319;"><?php echo $rowPorTipo['rotulo_tipo']?></b></p>
            </h2>
            <div class="row">
                <?php do {?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="produto_detalhes.php?id_produto=<?php echo $rowPorTipo['id_produto'];?>">
                                <img src="images/<?php echo $rowPorTipo['imagem_produto'];?>" class="img-responsive img-rounded">
                            </a>
                            <div class="caption">
                                <h3 class="text-danger">
                                    <strong><?php echo $rowPorTipo['descri_produto'];?></strong>
                                </h3>
                                <p class="text-warning">
                                    <strong><?php echo $rowPorTipo['rotulo_tipo'];?></strong>
                                </p>
                                <p class="text-left">
                                    <strong><?php echo mb_strimwidth($rowPorTipo['resumo_produto'],0,42,'...');?></strong>
                                </p>
                                <p>
                                    <button class="btn btn-default disabled" role="button">
                                        <?php echo "R$ ".number_format($rowPorTipo['valor_produto'],2,',','.');?>
                                    </button>
                                    <a href="produto_detalhes.php?id_produto=<?php echo $rowPorTipo['id_produto'];?>">
                                        <span class="hidden-xs">Saiba mais....</span>
                                        <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }while ($rowPorTipo = $listaPorTipo->fetch_assoc());?>
            </div>
        <?php }?>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).on('ready', function(){
        $(".regular").slick({
            dots: true,
            Infinity: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick/slick.min.js"></script>
</html>