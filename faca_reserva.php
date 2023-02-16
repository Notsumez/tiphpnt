<?php 
    include 'conn/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Faça Sua Reserva</title>
</head>
<body class="fundofixo" ng-app="meuapp" ng-controller="controlador">
<?php include 'menu_publico.php'?>
    <div class="container">
        <!-- Top para voltar -->
        <h2 class="breadcrumb alert-danger">
            <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>                
            Leia com Atenção!
        </h2>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="thumbnail" >
                    <h2 class="text-center"><span class="glyphicon glyphicon-warning-sign"></span> REGRAS DE PEDIDO DE RESERVAS</h2>
                    <br>
                    <h4>&nbsp;• Toda e qualquer reserva deve ser realizada com no mínimo 48 horas de antecendencia e no máximo 90 dias.</h4>
                    <h4>&nbsp;• É permitido apenas 1 (um) pedido de reserva por um mesmo CPF.</h4>
                    <h4>&nbsp;• O Cliente deve passar seu nome completo, CPF e o email para confirmar a reserva.</h4>
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                        <div ng-show="!exibir"><button ng-click="minhaFuncao()" class="btn btn-success position-absolute bottom-0 end-0 btn-lg"><span class="glyphicon glyphicon-thumbs-up"></span> Aceitar as regras</button></div>
                    </div>
                    <br>
                    <br>
                    <div ng-show="exibir" class="text-center">
                        <hr>
                        <?php include 'reserva_insere.php' ?>
                    </div>
                    <script>
                        var app = angular.module('meuapp',[]);
                        app.controller('controlador',function($scope){
                            $scope.exibir = false;
                        $scope.minhaFuncao = function(){
                            $scope.exibir = !$scope.exibir;
                            }
                        $scope.minhaFuncao = function() {
                            $scope.exibir = !$scope.exibir;
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div> 
    <?php include 'rodape.php';?>
</body>
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
