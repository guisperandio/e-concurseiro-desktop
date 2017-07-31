<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>e-concurseiro</title>
    <?php include('estilos_app.html'); ?>
</head>

<body>
    <?php include('topo_ciclos.html'); ?>

    <div class="container_16 app-pages interna-ciclos" id="">

        <div class="grid_16 clearfix" id="content-middle">
            <i class="passo-image" style="background-image: url('img/fnd_ciclos02.png')"></i>
            <div class="box-feed clearfix box-app ciclos">
                <div class="grid_12 clearfix center label-gd">
                    <h2 class="center-text">Horas de estudo individual</h2>
                    <p class="warning center-text">
                        Atenção! O e-concurseiro irá ajuda-lo a controlar e organizar o seu estudo individual. Por isso, trabalhamos sempre com as informações referentes ao seu estudo pessoal, ou seja, desconsiderando os estudos feitos em cursos presenciais. <br>                        <br> Por isso, ao responder as perguntas, considere apenas o estudo individual, realizado na sua residencia ou em bibliotecas, por exemplo.
                    </p>
                    <p class="center-text normal">Quantas horas por dia, em média, você dedicara a sua preparação?</p>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Segunda-feira</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Terça-feira</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Quarta-feira</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Quinta-feira</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Sexta-feira</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Sabado</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label>Domingo</label>
                        <input type="text" class="small input-time" placeholder="00:00">
                    </div>
                    <div class="box-interesse clearfix center horas-box">
                        <label class="time-label">Total de horas da semana</label>
                        <input type="text" class="small input-time bgr-oceanblue" placeholder="00:00">
                    </div>
                    <i class="sprite sprite4 sprite-seta_esquerda_app left"></i>
                    <i class="sprite sprite4 sprite-seta_direita_app right"></i>
                </div>


            </div>




            <!-- end .grid_6 -->

        </div>
        <!-- end .container_12 -->
        <?php include('scripts.html'); ?>
</body>

</html>
