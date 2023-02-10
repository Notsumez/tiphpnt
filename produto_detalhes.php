<?php 
include 'conn/connect.php';
$idproduto = $_GET['id_produto'];
$lista = $conn->query("select * from vw_tbprodutos where id_produto like '%$idproduto%';");
$row_destaque =  $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Detalhes</title>
</head>
<body class="fundofixo">
<?php include 'menu_publico.php'?>
    <div class="container">
        <!-- Top para voltar -->
        <h2 class="breadcrumb alert-danger">
            <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>                
            Detalhes
        </h2>
            <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="thumbnail">
                            <a href="produto_detalhes.php?id_produto=<?php echo $row_destaque ['id_produto']?>">
                                <img src="images/<?php echo $row_destaque ['imagem_produto']?>" class="img-responsive img-rounded">
                            </a>
                            <div class="caption text-left">
                                <h3 class="text-danger">
                                    <strong><?php echo $row_destaque ['descri_produto']?></strong>
                                </h3>
                                <p class="text-warning">
                                    <strong><?php echo $row_destaque ['rotulo_tipo']?></strong>
                                </p>
                                <p class="text-left">
                                    <?php echo $row_destaque ['resumo_produto'];?>
                                </p>
                                <p>
                                    <button class="btn btn-default disable" role="button" style="cursor: default">
                                        <?php echo "R$ ".number_format($row_destaque['valor_produto'],2,",",".");?>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
    </div>  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min-js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready',function(){
        $(".regular").slick({
            dots: true,
            infinity: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick/slick.min.js"></script>
</html>