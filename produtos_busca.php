<?php 
    include('conn/connect.php');

    // Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['buscar'])) {
    // Obtém o termo de busca do formulário
    $termoBusca = $_GET['buscar'];

    // Prepara a consulta SQL para buscar os produtos com base no termo de busca
    $consulta = $conn->prepare('SELECT * FROM tbprodutos WHERE descri_produto LIKE ?');
    $termoBusca = '%' . $termoBusca . '%';
    $consulta->bind_param('s', $termoBusca);

    // Executa a consulta SQL
    $consulta->execute();

    // Obtém o resultado da consulta
    $resultado = $consulta->get_result();

    // Exibe os produtos encontrados
    while ($produto = $resultado->fetch_assoc()) {
        echo 'ID: ' . $produto['id_produto'] . '<br>';
        echo 'Descrição: ' . $produto['descri_produto'] . '<br>';
        echo 'Resumo: ' . $produto['resumo_produto'] . '<br>';
        echo 'Valor: R$ ' . $produto['valor_produto'] . '<br>';
        echo 'Imagem: <img src="' . $produto['imagem_produto'] . '" alt="' . $produto['descri_produto'] . '"><br>';
        echo 'Destaque: ' . $produto['destaque_produto'] . '<br>';
        echo '<hr>';
    }
    $num_linhas = $consulta->num_rows;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca por Palavra</title>
</head>
<body>
    <?php include('menu_publico.php');?>
    
</body>
</html>