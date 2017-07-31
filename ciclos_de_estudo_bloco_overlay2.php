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

<div class="container_16 app-pages" id="wrapper-interna">

  <div class="grid_16 clearfix" id="content-middle">
    <div class="box-feed clearfix box-app ciclos" style="background-image: url('img/fnd_ciclos2.png')">
      <div class="grid_12 clearfix center">
        <h2 class="bigtitle center-text">Blocos de Estudos</h2>

        <p class="center-text normal">
			Você deverá dividir o conteudo teórico de cada matéria em blocos teoricos dos assuntos você irá estudar. Recomendamos que cada bloco tenha de 2 a 5 assuntos a serem estudados.
			<br/><br/>
			A cada bloco teorioco que voce criar, iremos inserir blocos de revisão, sugerindo a quantidade de horas e de resolução de questões, com indicação do numero de questões a serem resolvidas.
        </p>
		<span class="bigtitle">Matérias</span>
        <div class="box-interesse">
          <table class="table-professor">
			  <tr class="topo">
				<th class="align-left">Materia</th>
				<th>Blocos</th>
				<th>Teoria</th>
				<th>Revisão</th>
				<th>Questões</th>
				<th>Editar</th>
				<th>Alertas</th>
			  </tr>
			  <tr class="linha odd">
				<td>Saude e segurança do trabalho</td>
				<td>15</td>
				<td>15</td>
				<td>05</td>
				<td>05</td>
				<td><i class="sprite sprite4 sprite-pdf_app"></i></td>
				<td><i class="sprite sprite4 sprite-pdf_app"></i></td>
			  </tr>
			  <tr class="linha">
				<td>Saude e segurança do trabalho</td>
				<td>15</td>
				<td>15</td>
				<td>05</td>
				<td>05</td>
				<td><i class="sprite sprite4 sprite-pdf_app"></i></td>
				<td><i class="sprite sprite4 sprite-pdf_app"></i></td>
			  </tr>

			</table>
        </div>
      </div>


  </div>

  <div class="overlay block blocos-cadastrados">
    <div class="box-feed clearfix shadow">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <span class="bigtitle center">Selecione os assuntos do bloco</span>

      <div class="box-interesse clearfix overflow">
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label></span>
      </div>
      <div class="left terco clearfix info-blocos">
        <p>Informe quantas horas você dedicará à revisão após concluir o estudo teórico desses assuntos</p>
        <input type="text" class="small input-time center-text" placeholder="00:00" style="font-size: 16px">
      </div>
      <button class="btn bgr-oceanblue quinto right">Cadastrar</button>

    </div>
  </div>


  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
