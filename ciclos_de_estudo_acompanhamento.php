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
    <div class="box-feed clearfix box-app">
      <div class="grid_16 clearfix">
        <h2 class="align-left">Acompanhamento das metas</h2>
        <div class="box-feed clearfix">
          <span class="bluetitle left" style="margin-right: 10px">Ciclo 01</span>
          <i class="sprite sprite-pdf_pq"></i>
          <br><br>
          <p class="metas"><b>Meta estabelecida:</b> 220 horas</p>
          <p class="metas"><b>Início:</b> 00/00/0000</p>
          <p class="metas"><b>Prazo para conclusão:</b> 00/00/0000</p>
        </div>
        <div class="box-feed box-parciais clearfix">
          <span class="bluetitle">Metas parciais</span>
          <div class="grid_6 clearfix left no-margin-left">
            <table class="table-professor table-acompanhamento">
              <tr class="topo">
              <th>Periodo</th>
              <th>Meta</th>
              </tr>
              <tr class="linha odd">
              <td>00/00/0000 a 00/00/0000</td>
              <td>120 Horas</td>
              </tr>
              <tr class="linha">
              <td>00/00/0000 a 00/00/0000</td>
              <td>120 Horas</td>
              </tr>
              </tr>
              <tr class="linha odd">
              <td>00/00/0000 a 00/00/0000</td>
              <td>120 Horas</td>
              </tr>
              <tr class="linha">
              <td>00/00/0000 a 00/00/0000</td>
              <td>120 Horas</td>
              </tr>
              <tr class="topo">
              <th>Total</th>
              <th>152 horas</th>
              </tr>
            </table>
          </div>
          <div class="grid_8 clearfix left">
            <div class="box-alert clearfix left" style="background-color: #31a54a">
              <span class="whitetitle">Parabens!</span>
              <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
            </div>
            <div class="box-alert clearfix left" style="background-color: #e2af00">
              <span class="whitetitle">Atenção!</span>
              <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
            </div>
            <div class="box-alert clearfix left" style="background-color: #c70100">
              <span class="whitetitle">Atenção!</span>
              <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
            </div>
          </div>
        </div>
        <div class="box-feed clearfix">
          <span class="bluetitle">Acompanhamento da execução</span>
          <table class="table-professor table-acompanhamento">
    			  <tr class="topo">
    				<th>Data atual</th>
    				<th>Meta do dia</th>
    				<th>Estudado</th>
    				<th>%atingido</th>
            <th>Meta acumulada</th>
            <th>Estudo acumulado</th>
            <th>%atingido</th>
            <th class="align-left">Situação</th>
    			  </tr>
    			  <tr class="linha odd">
    				  <td>00/00/0000</td>
              <td>152 horas</td>
              <td>135 horas</td>
              <td>72.22%</td>
              <td>120 horas</td>
              <td>100 horas</td>
              <td>25.89%</td>
              <td class="align-left" style="color: #045d17; text-transform: uppercase">Meta cumprida, Parabéns!</td>
    			  </tr>
    			  <tr class="linha">
    				  <td>00/00/0000</td>
              <td>152 horas</td>
              <td>135 horas</td>
              <td>72.22%</td>
              <td>120 horas</td>
              <td>100 horas</td>
              <td>25.89%</td>
              <td class="align-left" style="color: #045d17; text-transform: uppercase">Meta cumprida, Parabéns!</td>
    			  </tr>
            <tr class="linha odd">
              <td>00/00/0000</td>
              <td>152 horas</td>
              <td>135 horas</td>
              <td>72.22%</td>
              <td>120 horas</td>
              <td>100 horas</td>
              <td>25.89%</td>
              <td class="align-left" style="color: #d0b000; text-transform: uppercase">Atraso com possibilidade de recuperação!</td>
            </tr>
            <tr class="linha">
              <td>00/00/0000</td>
              <td>152 horas</td>
              <td>135 horas</td>
              <td>72.22%</td>
              <td>120 horas</td>
              <td>100 horas</td>
              <td>25.89%</td>
              <td class="align-left" style="color: #fe0000; text-transform: uppercase">Atraso prejudicial. Atenção!</td>
            </tr>
    			</table>
        </div>
        <div class="box-feed clearfix">
          <span class="bluetitle">Metas anteriores</span>
          <p>
            - Ciclo 01 <br>
            - Ciclo 02
          </p>
        </div>
		<button class="btn bgr-oceanblue quarter left">Voltar</button>
      </div>


  </div>




  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
