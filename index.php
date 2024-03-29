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
    <main>
        <div class="fundo_banner">
            <?php include 'menu_publico.php'; ?>
            <?php include 'banner_inicio.php'; ?>
        </div>
        <div class="container-fluid">
            <?php include 'produtos_destaque.php'; ?>
            <a name="ofertas">&nbsp;</a>
            <?php include 'ofertas.php';?>
            <a name="produtos">&nbsp;</a>
            <?php include 'produtos_geral.php'; ?>
            <footer class="panel-footer" style="background: none;">
                <a name="contato"></a>
                <?php include 'rodape.php'; ?>
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
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                navbar.classList.add('navbar-fixed', 'navbar-scroll');
            } else {
                navbar.classList.remove('navbar-fixed', 'navbar-scroll');
            }
        });
    </script>
</html>