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

<div class="container_16 app-pages" id="alterarhoras">

  <div class="grid_16 clearfix" id="content-middle" style="padding-top: 100px">
    <div class="box-feed clearfix box-app">
		<div class="grid_12 clearfix">
			<h2 class="bigtitle align-left bigbig">Alterar quantidade de horas</h2>
        <p class="warning">
          Atenção! O e-concurseiro irá ajuda-lo a controlar e organizar o seu estudo individual. Por isso, trabalhamos sempre com as informações referentes ao seu estudo pessoal, ou seja, desconsiderando os estudos feitos em cursos presenciais.
        </p>
        <p class="normal">
          Por isso, ao responder as perguntas, considere apenas o estudo individual, realizado na sua residencia ou em bibliotecas, por exemplo.
        </p>
        <p class="warning">Essa alteração irá suspender o ciclo atual e gerar um novo, impactando inclusive nas metas</p>
		<p class="normal">Informe no quadro ao lado quantas horas por dia, em média, você dedicará à sua preparação.

		</div>
      <div class="grid_4 clearfix right no-margin-right" style="margin-bottom: 60px">
        <div class="box-interesse clearfix center">
            <label>Segunda-feira</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Terça-feira</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Quarta-feira</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Quinta-feira</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Sexta-feira</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Sabado</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label>Domingo</label>
            <input type="text" class="small input-time" placeholder="00:00">
        </div>
        <div class="box-interesse clearfix center">
            <label class="time-label">Total de horas da semana</label>
            <input type="text" class="small input-time bgr-oceanblue" placeholder="00:00">
        </div>


      </div>
      </br>
      </br>
      <button class="btn bgr-oceanblue quarter left">Voltar</button>

  </div>




  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
