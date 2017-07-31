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
<?php include('estilos.html'); ?>
</head>
<body>
<?php include('topo.html'); ?>

<div class="container_16" id="wrapper-interna">
  <?php include('coluna_esquerda.html'); ?>
  <div class="grid_8" id="content-middle">
    <span class="subtitle">Localizar concursos Por:</span>
    <ul id="expand-list" class="clearfix expand-big no-margin-top">
      <li>
        <a href="#" class="expand">Área</a>
      </li>
      <li>
        <a href="#" class="list expand">Região</a>
      </li>
      <li>
        <a href="#" class="list expand">Situação</a>
      </li>
    </ul>
    <div class="search" style="margin: 0; position: relative; width: 100%">
      <input placeholder="Procurar curso" type="text" style="width: 269px;">
      <i class="sprite sprite-lupa" style="width: 27px;height: 27px;background-position: -232px -279px;position: absolute;top: 14px;left: 253px;"></i>
    </div>


    <div class="box-interesses clearfix mapa-concursos" style="margin-top: 70px">

      <div class="box-area clearfix">
        <div class="top clearfix">
          <button class="btn half left" style="background-color: #57ae38 !important">Inscrições Abertas</button>
          <p class="block right center-text">
            <b>125.000</b> vagas em<br> <b>68</b> concursos
          </p>
        </div>
        <div class="content clearfix">
          <ul>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
          </ul>
        </div>
        <a href="#" class="right block ver-todos" style="color: #1e9ec5">ver todos</a>
      </div>

      <div class="box-area clearfix">
        <div class="top clearfix">
          <button class="btn btn-oceanblue half left">Previstos</button>
          <p class="block right center-text" style="color: #1a678f !important">
            <b>125.000</b> vagas em<br> <b>68</b> concursos
          </p>
        </div>
        <div class="content clearfix">
          <ul>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
          </ul>
        </div>
        <a href="#" class="right block ver-todos" style="color: #1e9ec5">ver todos</a>
      </div>

      <div class="box-area clearfix">
        <div class="top clearfix">
          <button class="btn bgr-oceanblue half left">Em Andamento</button>
          <p class="block right center-text" style="color: #1e9ec5 !important">
            <b>125.000</b> vagas em<br> <b>68</b> concursos
          </p>
        </div>
        <div class="content clearfix">
          <ul>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
            <li>
              <a href="#">Nome do concurso cadastrado no admin  <span class="num-vagas">(78 vagas)</span></a>
            </li>
          </ul>
        </div>
        <a href="#" class="right block ver-todos" style="color: #1e9ec5">ver todos</a>
      </div>
    </div>

  </div>
  <!-- end .grid_6 -->
  <div class="grid_4" id="content-right">
    <div class="box-direita" id="ead">
      <span class="title-box">Estude online com os professores da rede!</span>
      <p>Siga os professores do seu interesse e acesse os melhores conteúdos e cursos, PDF ou videoaulas. Estude com foco e qualidade, sem sair de casa!</p>
      <i class="sprite sprite-professore">Professores</i>
      <button class="btn btn-ok btn-cursos"><i class="sprite sprite-cursos"></i><span class="btn-text">Cursos Online</span></button>
    </div>

    <div class="box-direita" id="concurso">
      <span class="title-box">Acompanhe aqui o status de cada concurso!</span>
      <p>Autorizações, publicações de editais, datas das provas, etc.</p>
      <button class="btn btn-warning btn-concurso full"><i class="sprite sprite-mapa"></i><span class="btn-text">Mapa dos concursos</span></button>
    </div>

    <div class="box-direita" id="papo">
      <span class="title-box">Papo de concurseiro</span>
      <p>Conheça o canal oficial do e-concurseiro, com muitas dicas, entrevistas e eventos ao vivo.</p>
      <button class="btn btn-orange btn-papo full"><i class="sprite sprite-papo"></i><span class="btn-text">Papo de concurseiro</span></button>
    </div>

    <div class="anuncio small">
      <h4>Anúncio Patrocinado</h4>
      <div class="banner-patrocinio" style="background-image: url('banners/banner.jpg')"></div>
      <span class="name-anunciantes">Nome do anunciante</span>
      <span class="site-anunciante">www.nomedoanunciante.com.br</span>
      <p class="text-anunciantes">
        Texto do anúncio com quantidade limitada de caracteres, de modo que ocupe até 2 linhas de texto.
      </p>
    </div>

    <div class="box-direita" id="anuncie">
      <i class="sprite sprite-anuncie"></i>
      <p class="anuncie">
        ANUNCIE NA REDE SOCIAL DOS CONCURSOS PÚBLICOS E APAREÇA PARA MILHARES DE CONCURSEIROS DE TODO O PAÍS.
      </p>
      <a href="#" class="anuncie-aqui">Clique aqui e conheça nossos planos e vantagens!</a>
    </div>

    <div class="anuncio small">
      <h4>Anúncio Patrocinado</h4>
      <div class="banner-patrocinio" style="background-image: url('banners/banner.jpg')"></div>
      <span class="name-anunciantes">Nome do anunciante</span>
      <span class="site-anunciante">www.nomedoanunciante.com.br</span>
      <p class="text-anunciantes">
        Texto do anúncio com quantidade limitada de caracteres, de modo que ocupe até 2 linhas de texto.
      </p>
    </div>
  </div>
  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
