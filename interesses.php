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
      <h4>O que encontro nesta página?</h4>
      <p>
Aqui você definirá as publicações que serão exibidas no seu feed de notícias.
Serão exibidas as publicações dos concurseiros e professores que fazem parte da sua rede. </br> Além disso, ao definir os temas que são do seu interesse, as publicações de outros concurseiros e professores também serão exibidas, sempre que qualquer um dos seus interesses fizer parte da publicação.
      </p>
    </div>

    <div class="box-interesses clearfix div-interesses">
      <h5>Defina seus interesses no formulário abaixo</h5>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Concurso dos sonhos</span>
        <input type="text" placeholder="Concurseiro sem rumo definido" class="left" style="padding: 12px 10px;"/>
        <button class="btn btn-oceanblue btn-ok left">OK</button>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Tipos de publicação</span>
        <p class="left no-margin-top">
          Selecione abaixo os tipos de publicação que irão aparecer no seu feed de notícias.
        </p>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
        <span class="select-option"><i class="sprite sprite-select"></i><label>Todos</label></span>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Interesses</span>
        <p class="left no-margin-top">
          Indique abaixo os seus interesses específicos. Isso permitirá que publicações de outros
usuários sejam exibidas para você, sempre que os interesses forem comuns.
        </p>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Áreas</span>
        <input type="text" placeholder="Texto sendo digitado" class="left"/>
        <i class="sprite sprite-plus"></i>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Concursos</span>
        <input type="text" placeholder="Texto sendo digitado" class="left"/>
        <i class="sprite sprite-plus"></i>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Matérias</span>
        <input type="text" placeholder="Texto sendo digitado" class="left"/>
        <i class="sprite sprite-plus"></i>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Bancas</span>
        <input type="text" placeholder="Texto sendo digitado" class="left"/>
        <i class="sprite sprite-plus"></i>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Interesses Vinculados</span>
        <div class="interesses">
          <div class="interesse i0 clearfix">
            <span class="text-interesse left">Dicas de estudo</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0 clearfix">
            <span class="text-interesse left">Auditor Fiscal da Receita Federal</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0 clearfix">
            <span class="text-interesse left">Direito Administrativo</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0 clearfix">
            <span class="text-interesse left">Atos Administrativos</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
        </div>
      </div>
      <div class="box-interesse clearfix">
        <span class="title-interesse no-margin-bottom">Publicações Oficiais</span>
        <span class="select-option pub_oficiais"><i class="sprite sprite-select"></i></span>
        <p style="font-size: 12px !important; line-height: 1 !important; color: #8c8c8c !important">
          Desejo ver no meu feed de notícias as publicações do PAPO DE CONCURSEIRO, canal oficial
da rede sobre concursos públicos, com dicas, entrevistas, vídeos, aulões, eventos ao vivo e
muito mais.
        </p>
      </div>
      <button class="btn btn-blue btn-save left">SALVAR</button>
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
