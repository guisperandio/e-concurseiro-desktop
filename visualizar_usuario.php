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
    <?php include('topo2.html'); ?>
<div class="container_16" id="wrapper-interna">
  <?php include('coluna_esquerda.html'); ?>
  <div class="grid_8" id="content-middle">

    <div class="box-feed shadow clearfix" id="user-view">
      <div class="user-details clearfix">

        <div class="usuario p75 clearfix" style="position: absolute; top: 19px; left: 34px;">
            <div class="usr-alert">10</div>
            <div class="quarter-circle" style="background-color: transparent"></div>
            <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
        </div>
        <h3 class="usr-name">George Firmino</h3>
        <ul class="clearfix">
          <li>
            <a href="#" class="sprite sprite-perfil">Perfil</a>
          </li>
          <li>
            <a href="#" class="sprite sprite-biblioteca">Perfil</a>
          </li>
          <li>
            <a href="#" class="perfil-porcentagem">75%</a>
          </li>
          <li>
            <a href="#" class="sprite sprite-medalha">Perfil</a>
          </li>
        </ul>
      </div>
      <ul class="nav-user clearfix">
        <li class="adicionar-btn">
          <a href="#"><i class="sprite sprite3 sprite-adicionar"></i><span class="menu-name">Adicionar a minha rede</span></a>
        </li>
        <li class="msg-btn">
          <a href="#"><i class="sprite sprite3 sprite-msg-grande"></i><span class="menu-name">Enviar Mensagem</span></a>
        </li>
        <li class="perfil-btn">
          <a href="#"><i class="sprite sprite3 sprite-perfil-completo"></i><span class="menu-name">Ver perfil completo</span></a>
        </li>
        <li class="amigos-comum">
          <a href="#"><i class="sprite sprite3 sprite-amigos-comum"></i><span class="menu-name">03 amigos em comum</span></a>
        </li>
      </ul>
    </div>

    <?php include('publicacoes.html'); ?>

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
