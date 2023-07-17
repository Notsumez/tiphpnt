<?php 
    include('conn/connect.php');

    // Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['buscar'])) {
    // Obtém o termo de busca do formulário
    $termoBusca = $_GET['buscar'];
    $consulta = $conn->query("SELECT * FROM vw_tbprodutos WHERE descri_produto LIKE '%".$termoBusca."%'");
    $resultado = $consulta->fetch_assoc();
    $num_linhas = $consulta->num_rows;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Busca por Palavra</title>
</head>
<body class="fundofixo">
    <?php include('menu_publico.php');?>

    <?php if($num_linhas == 0){?>
        <h2 class="breadcrumb text-center" id="textoProdDes">Resultados para <b style="color: #AF2319;"><?php echo $termoBusca;?></b></h2>
        <p class="text-center" style="color: white; font-size: 15pt;">Este Não é um produto. Verifique a Ortografia.</p>
    <?php }?>
    
    <?php if($num_linhas>0){?>
            <h2 class="breadcrumb text-center" id="textoProdDes">
                <p>Resultados para <b style="color: #AF2319;"><?php echo $termoBusca;?></b></p>
            </h2>
            <div class="row">
                <?php do {?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="produto_detalhes.php?id_produto=<?php echo $resultado['id_produto'] ?>">
                                <img src="images/<?php echo $resultado['imagem_produto']?>" class="img-responsive img-rounded">
                            </a>
                            <div class="caption text-left">
                                <h3 style="color: #AF2319;">
                                    <strong><?php echo $resultado['descri_produto'];?></strong>
                                </h3>
                                <p style="color: #E6B53B;">
                                    <strong><?php echo $resultado['rotulo_tipo'];?></strong>
                                </p>
                                <p class="text-left">
                                    <?php echo mb_strimwidth($resultado['resumo_produto'],0,42,'...');?>
                                </p>
                                <p>
                                    <button class="btn btn-default disable" role="button" style="cursor: default">
                                        <?php echo "R$ ".number_format($resultado['valor_produto'],2,",",".");?>
                                    </button>
                                    <a href="produto_detalhes.php?id_produto=<?php echo $resultado['id_produto'] ?>">
                                        <span class="hidden-xs">Saiba Mais...</span>
                                        <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }while($resultado = $consulta->fetch_assoc());?>
            </div>
        <?php }?>
</body>
</html>