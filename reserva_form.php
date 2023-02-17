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
                            <input type="text" name="cpf_reserva" placeholder="Digite o seu CPF" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="text" name="email_reserva" placeholder="Digite o seu email" aria-describedby="basic-addon1" class="form-control" required>
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
    </body>
</html>