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
<?php include('estilos_app_resolucao.html'); ?>
</head>
<body>
<?php include('topo_resolucao.html'); ?>

<div class="container_16 app-pages" >

  <div class="grid_14 center clearfix" id="content-middle">
    <div class="box-feed clearfix box-app">
      <div class="banner-resolucao"></div>
      <span class="questoes-info">600.000 questões de concursos</span>
      <p class="center p-title">
        Bem-vindo(a) ao aplicativo de resolução de questões. Nele é possível resolver e comentar questões, além de aprender por meio dos comentários de professores e outros concurseiros.
      </p>
      <div class="input-box" style="position: relative; width: 622px; margin: 0 auto;">
        <input type="text" placeholder="Procurar questoes" class="input-search"/>
        <i class="sprite sprite-lupa lupa-icon"></i>
      </div>

      <p class="center-text">
        Para encontrar rapidamento uma questão, digite parte do enunciado no quadro acima.
      </p>
      <p class="div-p clearfix center">
        <button class="btn btn-oceanblue left quarter">Montar Simulado</button>
        <button class="btn bgr-oceanblue right quarter no-margin-right">Ver minhas estatísticas</button>
      </p>

    </div>
  </div>

  <div class="overlay block resolucao">
      <div class="box-feed clearfix shadow">
        <i class="logo-sem-nome center" style="margin-bottom: 20px !important"></i>
        <div class="box-sobre clearfix">
          <h2 class="bigtitle align-left">SOBRE o APP Resolução de Questões</h2>
          <p>
            O aplicativo Resolução de Questões é parte integrante do e-concurseiro, a primeira rede social dos concursos públicos.
            <br /><br />
            Por meio do aplicativo, que é totalmente gratuito para o usuário, é possível resolver questões, montar simulados utilizando vários filtros, comentar as questões e fazer anotações, aprender com os comentários de outros concurseiros e de professores,  acompanhar seu desempenho e comparar com outros usuários, entre outras inúmeras funcionalidades.
          </p>
        </div>
        <div class="box-sobre clearfix">
          <h2 class="bigtitle align-left">Idealizadores e fundadores</h2>
          <div class="box-photo" style="background-image: url('img/george_avatar.png')">
            <span class="nome-box">George Firmino</span>
          </div>

          <div class="box-photo" style="background-image: url('img/nilton_avatar.png')">
            <span class="nome-box">Nilton Melo</span>
          </div>
        </div>
        <div class="box-sobre clearfix">
          <h2 class="bigtitle align-left">Desenvolvimento e TI</h2>
          <div class="box-photo" style="background-image: url('img/alexander_avatar.png')">
            <span class="nome-box">Alexander Melo</span>
          </div>
        </div>
        <p class="center-text" style="font-size: 18px">
          e-concurseiro é marca registrada da WeConnect Social Networks
        </p>
      </div>
  </div>
  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
