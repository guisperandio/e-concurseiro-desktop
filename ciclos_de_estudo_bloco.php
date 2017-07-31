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

<div class="container_16 app-pages interna-ciclos" >

  <div class="grid_16 clearfix" id="content-middle">
    <i class="passo-image" style="background-image: url('img/fnd_ciclos04.png')"></i>
    <div class="box-feed clearfix box-app ciclos">
      <div class="grid_12 clearfix center">
        <h2 class="center-text">Blocos de Estudos</h2>

        <p class="center-text normal">
			Você deverá dividir o conteudo teórico de cada matéria em blocos teoricos dos assuntos você irá estudar. Recomendamos que cada bloco tenha de 2 a 5 assuntos a serem estudados.
			<br/><br/>
			A cada bloco teorioco que voce criar, iremos inserir blocos de revisão, sugerindo a quantidade de horas e de resolução de questões, com indicação do numero de questões a serem resolvidas.
        </p>
		<span class="bigtitle" style="margin: 20px 0; display: block; text-align: left">Matérias</span>
        <div class="box-interesse no-margin-top">
          <table class="table-professor">
			  <tr class="topo" style="background-color: #1a678f">
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
				<td><i class="sprite sprite-editar_gray"></i></td>
				<td><i class="sprite sprite-alert_red"></i></td>
			  </tr>
			  <tr class="linha">
				<td>Saude e segurança do trabalho</td>
				<td>15</td>
				<td>15</td>
				<td>05</td>
				<td>05</td>
				<td><i class="sprite sprite-editar_gray"></i></td>
        <td><i class="sprite sprite-alert_red"></i></td>
			  </tr>

			</table>
        </div>
      </div>


  </div>

  <div class="overlay block blocos-cadastrados">
    <div class="box-feed clearfix shadow">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <span class="bigtitle center">Blocos cadastrados para nome da matéria</span>
      <br/><br/>
      <button class="btn bgr-oceanblue half left" ><i class="sprite sprite-plus white-icon"></i><span class="menu-name">Cadastrar novo bloco</span></button>
      <div class="box-interesse clearfix" style="margin-top: 50px">

          <div class="bloco-title" style="background-color: #1a678f">Blocos</div>
          <div class="box-aula bgr-gray clearfix">
              <span class="bigtitle left">Bloco 1 - Teoria</span>

              <i class="sprite sprite-excluir_blue right"></i>
              <i class="sprite sprite2 sprite-aulas right"></i>
          </div>
          <div class="box-aula aula-child clearfix bgr-graydark">
            <span class="bigtitle left">Revisão 10h - Blocos: 1</span>
          </div>
          <div class="box-aula aula-child clearfix bgr-gray">
            <span class="bigtitle left">Resoluções de 20 questões - Blocos: 1</span>
          </div>
    </div>
  </div>


  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
