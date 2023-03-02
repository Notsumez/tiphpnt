<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Insere</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
    <h2><span class="glyphicon glyphicon-save-file"></span>Área de Pedido</h2>
        <br>
            <form action="faca_reserva_envia.php" name="form_reserva" id="form_reserva" method="post">
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="nome_reserva" placeholder="Digite seu nome completo" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-qrcode"></span>
                            </span>
                            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite o seu CPF" oninput="mascara(this)" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" name="email_reserva" placeholder="Digite o seu email" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-plus"></span>
                            </span>
                            <input type="number" name="acompanhantes_reserva" placeholder="Digite a quantidade de acompanhantes" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-dashboard"></span>
                            </span>
                            <input type="date" name="data_reserva" placeholder="Digite a data da reserva" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                        <p>
                            <button class="btn btn-danger btn-block" aria-label="enviar" role="button">
                                Enviar
                                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </main>
        <br>
        <script type="text/javascript"> 
            function mascara(i){
            var v = i.value;
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número                
                i.value = v.substring(0, v.length-1);
                return;
                }
                i.setAttribute("maxlength", "14");
                if (v.length == 3 || v.length == 7) i.value += ".";
                if (v.length == 11) i.value += "-";
                }
        </script>
    </body>
</html>