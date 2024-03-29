<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Sobre a Braners Carners</title>
</head>
<body style="background-color: #2b2b2b;">
    <?php include 'menu_publico.php';?>
    <!-- Seção Principal - Sobre a Braners -->
    <main class="container container-fluid">
        <div class="text-center" style="color: white;">
            <h2><b>O que é a Braners Carners?</b></h2> 
            <br>
            <div style="display: flex;">
                <div>
                    <img src="images/giga_chad.jpg" width="250px" alt="Fundador da Braners Carners (Ficitício)" style="border-radius: 20px;"> 
                </div>
                <div style="margin: 15px;" class="txtSobre">
                    <p>
                        Surgida em 2021 como projeto integrador do curso de Técnico em Informática do Senac Itaquera, 
                        a Braners Carners é uma aplicação web desenvolvida para uma Churrascaria Fictícia com o 
                        intuíto de aprimorar e testar as habilidades dos alunos individualmente. 
                        Segue uma história fictícia sobre a casa de carnes:
                    </p>  
                    <p>A Braners Carners é uma churrascaria que ganhou vida em 2021, como um projeto integrador do curso de Técnico em Informática do Senac Itaquera. Seu dono, Sr. Antônio (homem na foto ao lado), sempre foi apaixonado por carnes e decidiu realizar seu sonho de ter um negócio próprio.
                        Desde jovem, Antônio acompanhava seu pai nas festas de família, onde o churrasco era o protagonista. Ele aprendeu a arte de preparar carnes suculentas, dominando técnicas de tempero e churrasqueira. Essa paixão pelas brasas e sabores se tornou sua marca registrada.
                        Com a experiência adquirida ao longo dos anos e o desejo de proporcionar uma experiência única aos amantes de carne, Antônio decidiu abrir a Braners Carners. Ele queria criar um ambiente acolhedor, onde as pessoas pudessem desfrutar de carnes de alta qualidade em um ambiente agradável e descontraído.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <br>
    <hr width="88%">
    <br>
    <!-- Seção Missão, Visão e Valores (MVV) -->
    <section>
        <div>
            <div style="display: flex; justify-content: center; margin-right: 55px; margin-left: 55px;">
                <div class="text-center" style="margin-right: 20px;">
                    <img src="images/missao.svg" width="80px" alt="">
                    <h2 style="color: white;">MISSÃO</h2>
                    <p style="color: white;">Entregar o melhor atendimento e alimento sobre carnes para o <br> 
                    seu churrasco.</p>
                </div>
                <div class="text-center" style="margin-right: 20px;">
                    <img src="images/visao.svg" width="80px" alt="">
                    <h2 style="color: white;">VISÃO</h2>
                    <p style="color: white;">Transformar a sua experiência o melhor possível, de modo que <br> 
                        mude o seu ver de um churrasco.</p>
                </div>
                <div class="text-center">
                    <img src="images/valores.svg" width="80px" alt="">
                    <h2 style="color: white;">VALORES</h2>
                    <p style="color: white;">Responsabilidade profissional, qualidade e rapidez.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <hr width="88%">
    <br>
    <!-- Seção Trabalhe Conosco -->
    <section>
        <div class="text-center" style="color: white;">
            <div style="display: flex; justify-content: center; margin-left: 50px; margin-right: 50px;">
                <div class="txtSobre" style="margin-right: 20px;">
                    <div style="display: flex; justify-content: center;">
                        <img src="images/funcionaro.jpg" width="50%" style="border-radius: 20px;" alt="Funcionario Cortando Carne">
                        <div style="margin-left: 20px; display: flex; justify-content: center; flex-direction: column;">
                            <div>
                                <h2><b>Trabalhe Conosco</b></h2> 
                                <br>
                            </div>
                            <p>Quer fazer parte do delicioso mundo do churrasco, entretendo e servindo os clientes da melhor forma possível? Deixe seus dados e faça parte da nossa equipe! Você também receberá um treinamento de nosso mestre churrasqueiro para compreender as melhores técnicas de como fazer um churrasco de alta qualidade.</p>
                            <button class="btnSaibaMais" onclick="RedirePagForm()">
                                <span>SAIBA MAIS...</span>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <?php include 'rodape.php';?>
</body>
    <!-- Script para redirecionar para o formulário -->
    <script>
        function RedirePagForm() {
            window.location.href = "Form_Novo_Func.php";
        }
    </script>
</html>