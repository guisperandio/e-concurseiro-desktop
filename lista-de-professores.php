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
<style>
  .expand-big li a{
    font-size: 15px !important
  }
</style>
<div class="container_16" id="wrapper-interna">
  <?php include('coluna_esquerda.html'); ?>
  <div class="grid_8" id="content-middle">
    <div class="box-interesses clearfix">
      <h5 class="bigtitle">Conheça os professores da rede</h5>

      <div class="search" style="margin: 0; position: relative; width: 100%">
        <input placeholder="Buscar por nome ou matéria" type="text" style="width: 269px;">
        <i class="sprite sprite-lupa" style="width: 27px;height: 27px;background-position: -232px -279px;position: absolute;top: 14px;left: 253px;"></i>

      </div>
      <div class="box-interesse clearfix">
        <span class="subtitle" style="margin-bottom: 0 !important">Ordenar Por:</span>
        <ul id="expand-list" class="clearfix expand-big" style="margin-top: 0 !important">
          <li>
            <a href="#" class="expand">Nome</a>
          </li>
          <li>
            <a href="#" class="list expand">Avaliação dos alunos</a>
          </li>
          <li>
            <a href="#" class="list expand">Nível</a>
          </li>
          <li>
            <a href="#" class="list expand">Reputação na rede</a>
          </li>
        </ul>
      </div>

      <div class="box-interesse clearfix">

        <div class="box-lista-professor clearfix shadow">
          <div class="channel-info">
            <div class="usuario p75 clearfix small" style="position: relative; top: -3px; left: 4px;">
                <div class="quarter-circle" style="background-color: transparent"></div>
                <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
            </div>
            <h3 class="usr-name">George Firmino</h3>
            <span class="usr-nivel">Nível 5</span>
            <span class="attribuicoes clearfix"><span class="menu-name">Direito Tributário, Legislação Tributária, Coaching</span></span>
          </div>
          <div class="pag-option clearfix margin-btns-pq">
            <button class="btn bgr-yellow btn-meus_cursos"><i class="sprite sprite2 sprite-btn_cursos"></i><span class="menu-name">Cursos</span></button>
            <button class="btn btn-blue btn-follow"><i class="sprite sprite2 sprite-follow"></i><span class="menu-name">Seguir</span></button>
            <button class="btn btn-blue btn-msg"><i class="sprite sprite2 sprite-msg-pq"></i><span class="menu-name">Mensagem</span></button>
            <button class="btn btn-blue btn-eventos"><i class="sprite sprite6 sprite-pagina"></i><span class="menu-name">Página</span></button>
          </div>
          <i class="sprite sprite5 sprite-minus_gd"></i>
        </div>

        <div class="box-lista-professor clearfix shadow expandido professor">
          <div class="info-numbers clearfix">
              <span class="box-number no-padding-left"><b>10.123</b> seguidores</span>
              <span class="box-number"><b>58</b> eventos</span>
              <span class="box-number"><b>234</b> vídeos</span>
              <span class="box-number"><b>234</b> vídeos</span>
              <span class="box-number no-padding-right"><b>234</b> vídeos</span>
          </div>
          <div class="avaliacao-alunos clearfix">
              <span class="attribuicoes clearfix"><i class="sprite sprite2 sprite-avaliacao"></i><span class="menu-name">350 avaliações de alunos</span></span>
              <ul class="clearfix">
                  <li>
                      <a href="#" class="no-margin-left">
                          <span class="avaliacao-name">Média Geral</span>
                          <span class="avaliacao-nota geral"><span class="vertical-align">8,2</span></span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <span class="avaliacao-name">Qualidade</span>
                          <span class="avaliacao-nota"><span class="vertical-align">10</span></span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <span class="avaliacao-name">Pontualidade</span>
                          <span class="avaliacao-nota"><span class="vertical-align">6,4</span></span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <span class="avaliacao-name">Fórum</span>
                          <span class="avaliacao-nota"><span class="vertical-align">6,4</span></span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="no-margin-right">
                          <span class="avaliacao-name">Aceitação</span>
                          <span class="avaliacao-nota aceitacao"><span class="vertical-align">100%</span></span>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="text-info">
              <h5 class="clearfix"><i class="sprite sprite2 sprite-sobre"></i><span class="menu-name">Sobre George Firmino</span></h5>
              <p>
                  Pellentesque vel nisl accumsan, mattis odio non, sodales est. Ut in nulla facilisis, pretium turpis at, ullamcorper urna. Cras non dictum libero, at condimentum felis. Morbi id dictum tellus. Vestibulum vel neque et enim dignissim finibus. In sit amet
                  rhoncus lectus, vitae vehicula felis. Sed facilisis, nisi sed laoreet viverra
                  <br />
                  <br /> Pellentesque vel nisl accumsan, mattis odio non, sodales est. Ut in nulla facilisis, pretium turpis at, ullamcorper urna. Cras non dictum libero, at condimentum felis. Morbi id dictum tellus. Vestibulum vel neque et enim dignissim
                  finibus. In sit amet rhoncus lectus, vitae vehicula felis. Sed facilisis, nisi sed laoreet viverra
              </p>
          </div>
        </div>

      </div>

      <div class="box-interesse clearfix">

        <div class="box-lista-professor clearfix shadow">
          <div class="channel-info">
            <div class="usuario p75 clearfix small" style="position: relative; top: -3px; left: 4px;">
                <div class="quarter-circle" style="background-color: transparent"></div>
                <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
            </div>
            <h3 class="usr-name">George Firmino</h3>
            <span class="usr-nivel">Nível 5</span>
            <span class="attribuicoes clearfix"><span class="menu-name">Direito Tributário, Legislação Tributária, Coaching</span></span>
          </div>
          <div class="pag-option clearfix margin-btns-pq">
            <button class="btn bgr-yellow btn-meus_cursos"><i class="sprite sprite2 sprite-btn_cursos"></i><span class="menu-name">Cursos</span></button>
            <button class="btn btn-blue btn-follow"><i class="sprite sprite2 sprite-follow"></i><span class="menu-name">Seguir</span></button>
            <button class="btn btn-blue btn-msg"><i class="sprite sprite2 sprite-msg-pq"></i><span class="menu-name">Mensagem</span></button>
            <button class="btn btn-blue btn-eventos"><i class="sprite sprite6 sprite-pagina"></i><span class="menu-name">Página</span></button>
          </div>
          <i class="sprite sprite5 sprite-plus_gd"></i>
        </div>
        <div class="text-info">
            <h5 class="clearfix"><i class="sprite sprite2 sprite-sobre"></i><span class="menu-name">Sobre George Firmino</span></h5>
            <p>
                Pellentesque vel nisl accumsan, mattis odio non, sodales est. Ut in nulla facilisis, pretium turpis at, ullamcorper urna. Cras non dictum libero, at condimentum felis. Morbi id dictum tellus. Vestibulum vel neque et enim dignissim finibus. In sit amet
                rhoncus lectus, vitae vehicula felis. Sed facilisis, nisi sed laoreet viverra
                <br />
                <br /> Pellentesque vel nisl accumsan, mattis odio non, sodales est. Ut in nulla facilisis, pretium turpis at, ullamcorper urna. Cras non dictum libero, at condimentum felis. Morbi id dictum tellus. Vestibulum vel neque et enim dignissim
                finibus. In sit amet rhoncus lectus, vitae vehicula felis. Sed facilisis, nisi sed laoreet viverra
            </p>
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
