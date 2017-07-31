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

<div class="container_16 app-pages interna-ciclos" style="padding-top: 101px !important;">

  <div class="grid_16 clearfix" id="content-middle">
    <i class="passo-image" style="background-image: url('img/fnd_ciclos03.png')"></i>
    <div class="box-feed clearfix box-app ciclos">
      <div class="grid_15 clearfix center" style="margin-left: 240px !important">
        <h2 class="center-text">Definição de matérias</h2>
        <p class="warning center-text">
        <b>ATENÇÃO!</b><br>
        Após a conclusão desta etapa não será possivel alterar esses dados para modificar os ciclos gerados. Qualquer alteração dessas informações após a geração irá cancelar os ciclos e reiniciar todo o processo.
        </p>
		<p class="normal center-text">Por isso, leia atentamente cada campo a ser preenchido e responda de acordo com a suia necessidade e/ou tempo que você já estuda para o concurso desejado.
        <h3 class="bigtitle align-left no-margin">Quantidade de matérias no primeiro ciclo</h3>
		<span class="smalldesc">Indique a quantidade de matérias que você deseja começar estudando no ciclo atual</span>
    <div class="publicacao" style="position: absolute;right: 255px;top: 242px;">
      <div class="select-option">
        <select class="sprite4 sprite-seta_option no-margin" style="padding: 12px 8px !important;
width: 127px !important; background-position: -887px -440px !important;
border: 0;
background-color: #eaeaea;">
          <option>
            25
          </option>
          <option>
            Teste
          </option>
        </select>
      </div>
    </div>

    <br><br>
		<h3 class="bigtitle align-left no-margin">Nivel de conhecimento e ordem das matérias</h3>
		<span class="smalldesc">Indique a quantidade de matérias que você deseja começar estudando no ciclo atuak</span>
    <br>
		<p class="warning no-margin" style="font-size: 14px !important">Clique e arraste as matérias para ordená-las de acordo com sua necessidade de estudo.</p>
		<div class="box-interesse">
          <table class="table-professor definicao-materias">
			  <tr class="topo btn-oceanblue">
				<th class="transparent"></th>
				<th class="quarter align-left">Matéria</th>
				<th class="align-left">Nivel de conhecimento</th>
			  </tr>
			  <tr class="rowspan">
				<td rowspan="5">Matérias do </br> 1º ciclo</td>

			  </tr>
        <tr class="linha" style="background-color: #1e9ec5 !important; color: #fff !important">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha" style="background-color: #1e9ec5 !important; color: #fff !important">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha" style="background-color: #1e9ec5 !important; color: #fff !important">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha" style="background-color: #1e9ec5 !important; color: #fff !important">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>


        <tr class="rowspan">
        <td rowspan="5" style="background-color: #aaa">Matérias do </br> 1º ciclo</td>

        </tr>
        <tr class="linha gray">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha gray">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha gray">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>
        <tr class="linha gray">
          <td class="align-left">Portugues</td>
        <td class="align-left"><input type="radio" id="lin1"/><label>Básico/Nunca estudou</label><input type="radio" id="lin1"/><label>Intermediário</label><input type="radio" id="lin1"/><label>Avançado</label></td>
        </tr>


			</table>
        </div>
		<button class="btn bgr-oceanblue quarter left">Voltar</button>
		<button class="btn btn-oceanblue quarter right">Salvar</button>
      </div>


  </div>




  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
