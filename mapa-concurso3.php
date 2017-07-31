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
    <div class="publicacao clearfix">
      <span class="subtitle">Localizar concursos Por:</span>
    </div>
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

    <div class="box-feed clearfix" id="published-indicacao">
      <fieldset class="clearfix">
        <input type="text"  placeholder="Procurar concurso" class="interesses"/> <i class="sprite sprite-plus"></i>
      </fieldset>
    </div>


    <div class="box-interesses clearfix mapa-concursos">
      <h5 class="bigtitle">Nome da área selecionada</h5>
      <div class="box-interesse clearfix " style="margin: 0 !important">
        <span class="subtitle no-margin-bottom">Filtrar Por:</span>
        <ul id="expand-list" class="clearfix expand-big expand-font-menor no-margin-top">
          <li>
            <a href="#" class="expand">Todos</a>
          </li>
          <li>
            <a href="#" class="list expand">Inscrições Abertas</a>
          </li>
          <li>
            <a href="#" class="list expand">Previstos</a>
          </li>
          <li>
            <a href="#" class="list expand">Em adandamento</a>
          </li>
          <li>
            <a href="#" class="list expand">Finalizados</a>
          </li>
        </ul>
      </div>
      <div class="box-concurso clearfix box-concurso2">
        <h6>Nome do curso cadastrado no admin</h6>
        <div class="more-details">
          <i class="sprite sprite-details_pq"></i>
          <span class="menu-name">Detalhes</span>
        </div>
      </div>
      <div class="box-concurso clearfix box-concurso2">
        <h6>Nome do curso cadastrado no admin</h6>
        <div class="more-details">
          <i class="sprite sprite-details_pq"></i>
          <span class="menu-name">Detalhes</span>
        </div>
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
