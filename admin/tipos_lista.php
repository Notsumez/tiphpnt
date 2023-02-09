<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    $lista = $conn->query("select * from tbtipos");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tipos - Lista</title>
</head>
<body class="fundofixo"> 
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger" >Lista de Tipos </h2>
        <table class="table table-hover table-condensed tb-opacidade bg-danger"> 
            <thead>
                <th class="hidden">ID</th>
                <th>SIGLA</th>
                <th>ROTULO</th>
                <th>
                    <a href="tipos_insere.php" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">ADICIONAR</span>
                    </a>
                </th>
            </thead>

            <tbody> <!-- início corpo da tabela -->
           	<!-- início estrutura repetição -->
                <?php do { ?>
                    <tr>
                        <td class="hidden">
                            <?php echo $row['id_tipo']; ?>
                        </td>
                        <td>
                            <?php echo $row['sigla_tipo']; ?>
                        </td>
                        <td>
                            <?php echo $row['rotulo_tipo']?>    
                        </td>
                        <td>
                            <a href="tipos_atualiza.php?id_tipo=<?php echo $row['id_tipo']; ?>" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">ALTERAR</span>
                            </a>
                    </tr>
                <?php } while($row = $lista->fetch_assoc()) ?>
            </tbody><!-- final corpo da tabela -->
        </table>
</body>
</html>