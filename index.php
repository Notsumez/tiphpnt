<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Braners Carners</title>
</head>
<body class="fundofixo">

<?php include 'menu_publico.php'; ?>
    <a name="home">&nbsp;</a>
    <main>
        <div class="espaco"></div>
        <?php include 'carousel.php'; ?>
        <div class="container-fluid">
            <a name="destaques">&nbsp;</a>
            <?php include 'produtos_destaque.php'; ?>
            <a name="ofertas">&nbsp;</a>
            <?php include 'ofertas.php';?>
            <a name="produtos">&nbsp;</a>
            <?php include 'produtos_geral.php'; ?>
            <footer class="panel-footer" style="background: none;">
                <?php include 'rodape.php'; ?>
                <a name="contato"></a>
            </footer>
        </div>
    </main>
    
</body>
    <!-- link para bootstrap  -->
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