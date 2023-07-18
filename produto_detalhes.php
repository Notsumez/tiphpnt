<?php 
include 'conn/connect.php';
$idproduto = $_GET['id_produto'];
$lista = $conn->query("select * from vw_tbprodutos where id_produto like '%$idproduto%';");
$row_detalhes =  $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Detalhes - <?php echo $row_detalhes['descri_produto'];?></title>
</head>
<body class="fundofixo">
<?php include 'menu_publico.php'?>
    <div class="container">
        <!-- Top para voltar -->
        <h2 class="breadcrumb text-center" id="textoProdDes">
            <a href="javascript:window.history.go(-1)" class="btn btnVoltar" style="border: 1px solid white;">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>                
            Detalhes de <b style="color: #AF2319;"><?php echo $row_detalhes['descri_produto'];?></b>
        </h2>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="thumbnail">
                    <div style="display: flex; justify-content: center; margin: 10px;" class="octosquare">
                        <img src="images/<?php echo $row_detalhes ['imagem_produto']?>" class="img-responsive img-rounded" width="50%">
                        <div class="caption text-center">
                            <h3 style="color: #AF2319;">
                                <strong><?php echo $row_detalhes ['descri_produto']?></strong>
                            </h3>
                            <p style="color: #E6B53B;">
                                <strong><?php echo $row_detalhes ['rotulo_tipo']?></strong>
                            </p>
                            <p class="text-center" style="font-size: 15pt;">
                                <?php echo $row_detalhes ['resumo_produto'];?>
                            </p>
                            <p>
                                <button class="btn_Animado">
                                    <span>Adicionar ao Churrasco</span>
                                </button>
                            </p>
                        </div>
                    </div>
                    <p>
                        <button class="btn btn-default disable" role="button" style="cursor: default">
                            <?php echo "R$ ".number_format($row_detalhes['valor_produto'],2,",",".");?>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>  
    <?php include 'rodape.php';?>
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