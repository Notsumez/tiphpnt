<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    $lista = $conn->query("SELECT * FROM pedido_reserva pr JOIN status s ON pr.id_status = s.id");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Reservas - Lista</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="fundofixo"> 
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger" >Lista de Pedidos de Reservas </h2>
        <table class="table table-hover table-condensed tb-opacidade bg-danger"> 
            <thead>
                <th class="hidden">ID</th>
                <th>NOME COMPLETO</th>
                <th>CPF</th>
                <th>DATA DO PEDIDO</th>
                <th>DATA DA RESERVA</th>
                <th>STATUS</th>
                <th>
                    <a href="produtos_insere.php" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">ADICIONAR MESA</span>
                    </a>
                </th>
            </thead>
            <tbody> <!-- início corpo da tabela -->
           	<!-- início estrutura repetição -->
                <?php do { ?>
                    <tr>
                        <td class="hidden">
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['nome_completo']; ?>
                            <span class="visible-xs"></span>
                            <span class="hidden-xs"></span>
                        </td>
                        <td>
                            <?php echo $row['cpf']; ?>
                        </td>
                        <td>
                            <?php echo date('d/m/Y', strtotime($row['data_inicial'])); ?>
                        </td>
                        <td>
                            <?php echo $row['data_final']; ?>
                        </td>
                        <td>
                            <?php 
                                if ($row['status']=='Confirmado') { 
                                    echo '<span class="glyphicon glyphicon-ok text-info" aria-hidden="true"></span>';
                                }else{
                                    if ($row['status']=='Cancelado'){
                                        echo '<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>';
                                    }else {
                                        echo '<span class="glyphicon glyphicon-refresh text-success" aria-hidden="true"></span>';
                                    }
                                }
                            ?> 
                        </td>
                        <td>
                            <a href="reserva_edita.php?id=<?php echo $row['id']; ?>" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">EDITAR</span>
                            </a>
                            <button 
                                data-nome="<?php echo $row['nome_completo']; ?>" 
                                data-id="<?php echo $row['id']; ?>"
                                class="delete btn btn-xs btn-block btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                                <span class="hidden-xs">RECUSAR</span>
                            </button>
                        </td>
                    </tr>
                <?php } while($row = $lista->fetch_assoc()) ?>
            </tbody><!-- final corpo da tabela -->
        </table>
    </main>
    <!-- inicio do modal para excluir... -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Enviar para <span class="nome text-danger"></span></h3>
                    <form action="<?php $rows['email']; ?>" name="form_motivo_recusa" id="form_motivo_recusa" method="post">
                        <textarea name="motivo_recusa" cols="30" rows="5" placeholder="Digite o motivo da recusa" aria-describedby="basic-addon3" 
                        class="form-control" required></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-success delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-danger" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); //busca o nome com a descrição (data-nome)
        var id = $(this).data('id'); // busca o id (data-id)
        //console.log(id + ' - ' + nome); //exibe no console
        $('span.nome').text(nome); // insere o nome do item na confirmação
        $('a.delete-yes').attr('href','reservas_excluir.php?id='+id); //chama o arquivo php para excluir o produto
        $('#modalEdit').modal('show'); // chamar o modal
    });
</script>

</html>