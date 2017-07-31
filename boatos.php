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
        Em HISTÓRIAS DE SUCESSO você encontrará os relatos de aprovados, narrando suas trajetórias até a aprovaçao.<br />
Você também pode publicar sua história. Basta clicar no botão abaixo.
      </p>
      <button class="btn btn-indicar btn-cleanblue">Publicar</button>
    </div>

    <div class="box-feed clearfix block no-padding" id="published-indicacao">
      <fieldset class="clearfix">
        <span class="title-text">Filtrar Informações/Boatos</span>

        <span class="label">Concursos</span>
        <input type="text"  placeholder="Texto sendo digitado" class="interesses"/> <i class="sprite sprite-plus"></i>
        <span class="label">Concursos</span>
        <input type="text"  placeholder="Texto sendo digitado" class="interesses"/> <i class="sprite sprite-plus"></i>
      </fieldset>
      <fieldset class="clearfix">

        <span class="title-text">Interesses vinculados</span>
        <div class="interesses">
          <div class="interesse i0">
            <span class="text-interesse left">Dicas de estudo</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Auditor Fiscal da Receita Federal</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Direito Administrativo</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Atos Administrativos</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
        </div>
      </fieldset>
      <button class="btn btn-blue btn-voltar left quarter">Buscar</button><span class="qtd-encontrada">(2.500 publicações encontradas)</span>
    </div>

    <ul id="expand-list" class="clearfix">
      <li>
        <a href="#" class="expand">Expandir publicações</a>
      </li>
      <li>
        <a href="#" class="list expand">Exibir tipo lista</a>
      </li>
    </ul>

    <div class="box-feed shadow clearfix">
      <div class="box-top">
        <span class="box-title clearfix"><i class="sprite sprite-boato"></i><span class="title-publicacao">Informação confirmada</span><span class="data-publicacao-list">00/00/0000</span></span>
        <i class="sprite sprite3 sprite-open_white expand-publish"></i>


        <span class="box-denuncia right"><i class="sprite sprite-denuncia"></i><span class="menu-name denuncia">Denunciar Publicação</span></span>
        <i class="sprite sprite-favorito right"></i>
      </div>
      <div class="box-content">
        <div class="feed-details clearfix">
          <div class="usuario p75 clearfix small" style="position: relative">
            <div class="usr-alert">10</div>
            <div class="quarter-circle"></div>
            <span class="usr-img" style="background-image: url('img/user.png');"></span>
          </div>
          <div class="user-details">
            <h3 class="usr-name">George Firmino <i class="sprite sprite-plus_pq right"></i></h3>
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
          <div class="feed-info">
            <span class="publish-up">Publicado em 25/10/2015 19:25</span>
            <span class="publish-accepted">Esta publicação tem 98,5% de aceitação.</span>
          </div>
        </div>
        <div class="feed-text clearfix">
          <h2>Titulo da publicação, caso exista</h2>
          <p class="feed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo. Duis sollicitudin, sapien nec facilisis fringilla, magna nunc ultricies purus, maximus feugiat risus sapien in tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In laoreet mi nulla, sit amet condimentum metus aliquet vel. Vivamus odio mi, varius vitae lacus et, posuere pulvinar purus. Nunc mattis risus et commodo scelerisque.
          </p>
          <span class="expand">expandir</span>
        </div>
        <div class="feed-tags">
          <span>TAGS: bibliografia, Auditor Fiscal, Direito Administrativo</span>
        </div>
      </div>
      <div class="box-approve">
        <div class="box-button button-aprovar quarter">
            <button class="btn btn-ok btn-aprova"><i class="sprite sprite-aprovar"></i><span class="menu-name">Aprovar</span></button>
            <span>Você e <br /><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-reprovar quarter">
            <button class="btn btn-danger btn-reprovar"><i class="sprite sprite-reprovar"></i><span class="menu-name">Reprovar</span></button>
            <span>Você e <br /><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-share quarter">
            <button class="btn btn-blue btn-share"><i class="sprite sprite-share"></i><span class="menu-name">Compartilhar</span></button>
            <span>Você e <br /><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-comment quarter">
            <button class="btn btn-alert btn-comment"><i class="sprite sprite-comentar"></i><span class="menu-name">Comentar</span></button>
            <span>Você e <br /><b>1.200 Aprovaram</b></span>
        </div>
      </div>
      <div class="publish-details-list">
        <span class="details-container">por <b>George Firmino</b> - <span class="perfil">Professor</span> - <span class="nivel"> Nível 10</span> - <span class="porcentagem">75%</span></span>
        <span class="desapprove-list"><i class="sprite sprite3 sprite-close_blue2"></i>1.234</span>
        <span class="desapprove-list"><i class="sprite sprite3 sprite-accepted_blue"></i>1.234</span>
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
