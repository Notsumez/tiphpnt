<?php 
    include("conn/connect.php");
    // Selecionando tudo da tabela tipos ordenado por rotulo 
    $lista_tipos = $conn->query('select * from tbtipos order by rotulo_tipo;');
    $rows_tipos = $lista_tipos->fetch_all();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <title>Menu Público</title>
</head>
<body>
    <!-- Abre a barra de navegação  -->
    <nav class="fixed navbar fixed-top navbar-light" id="menu_publico">
        <div class="container-fluid">
            <!-- abre agrupamento mobile  -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                    <span class="sr-only-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" >
                    <img src="images/BRANERS.png" width="12%" style="border-radius: 50%; margin: 5px;" alt="Logotipo">
                </a>
            </div>
            <!-- fecha agrupamento mobile  -->
            <!-- nav direita  -->
            <div class="collapse navbar-collapse" id="menupublico">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.php" id="menupublicotxt">
                            <span class="glyphicon glyphicon-home" ></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#produtos" id="menupublicotxt" style="font-size: 12pt;">Produtos</a>
                    </li>
                    <!-- Dropdown  -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="menupublicotxt" style="font-size: 12pt;">
                            Tipos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" id="dropdownmenup">
                            <?php foreach($rows_tipos as $row){?>
                            <li><a href="produtos_por_tipo.php?id_tipo=<?php echo $row[0]?>" id="menupublicotxt"><?php echo $row[2]?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                        <!-- fim do Dropdown  -->
                    <li>
                        <a href="sobre.php"  id="menupublicotxt" style="font-size: 12pt;">Sobre</a>
                    </li>
                    <li>
                        <a href="index.php#contato" id="menupublicotxt" style="font-size: 12pt;">Contato</a>
                    </li>
                    <!-- formulário de busca  -->
                    <form action="produtos_busca.php" method="get" name="form-busca" id="form-busca" class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="search" name="buscar" id="buscar" size="9" class="form-control" aria-label="search" placeholder="Buscar produto" required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- fim do formulário de busca  -->
                    <li>
                        <a class="vermelho" href="faca_reserva.php" id="menupublicotxt" style="font-size: 12pt;">Reservas</a>
                    </li>
                    <li class="active">
                        <a href="admin/index.php">
                            <span class="glyphicon gyphicon-user" id="menupublicotxt" style="font-size: 12pt;">Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
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