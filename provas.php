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
    <div class="publicacao clearfix ">
      <h4>O que encontro nesta página?</h4>
      <p>
Em EDITAIS você podrá baixar editais de concursos anteriores no formato PDF, postados por concurseiros e professores.<br />
Você também poderá postar editais. Basta clicar no botão abaixo.
      </p>
      <button class="btn btn-indicar btn-cleanblue">Publicar</button>
    </div>

    <div class="box-feed box shadow clearfix editais block" id="published-indicacao">
      <span class="arrow-up" style="position: absolute;top: -7px;left: 35px; border-left: 10px solid transparent;
border-right: 10px solid transparent;
border-bottom: 10px solid #fff;"></span>
      <span class="text-alert">Recomendamos cadastrar as provas juntamente com o seu gabarito definitivo, ambos em formato PDF. Para provas aplicadas em etapas (P1, P2..., discursiva), cadastrar cada uma delas, destacando no campo observação.</span>
      <div class="upload clearfix">
        <div class="upload-option clearfix">
          <i class="sprite sprite3 sprite-procurar"></i>
          <i class="sprite sprite-pdf_pq" style="margin-top: 11px;margin-right: 8px; margin-left: 10px;filter: grayscale(1) saturate(18) brightness(1);"></i>
          <span class="nome-arquivo">Edital.PDF</span>
          <div class="status-bar-container" style="margin: 11px 0 0; position: relative;width: 60% !important;left: -30px;">
            <span class="barra-porcentagem">80%</span>
            <div class="status-bar-preenchimento  p4" style="background-color: #004570; "></div>
          </div>
        </div>

        <div class="input-editais clearfix">
            <label>Título. (ex.: P1, P2, Gabarito)</label>
            <input type="text" class="input-edital" style="width: 157px"/>
            <span class="caracteres">20 caracteres</span>
            <button class="btn btn-oceanblue right">Anexar</button>
        </div>


      </div>
      <fieldset class="clearfix">

        <span class="title-text">Arquivos Anexados</span>
        <div class="interesses">
          <div class="interesse i0">
            <span class="text-interesse left">Prova 1.PDF</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Prova 1.PDF</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Prova 1.PDF</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
          <div class="interesse i0">
            <span class="text-interesse left">Prova 1.PDF</span>
            <i class="sprite sprite2 sprite-close_gray"></i>
          </div>
        </div>
      </fieldset>
      <p>
        As publicações devem respeitar os direitos autorais, os demais membros da comunidade e os termos de uso do e-concurseiro.
      </p>
      <button class="btn btn-voltar btn-oceanblue quarter">Voltar</button>
      <button class="btn btn-voltar btn-blue right quarter">Enviar</button>
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
        <span class="box-title clearfix"><i class="sprite sprite-provas_gd"></i><span class="title-publicacao">Provas</span><span class="data-publicacao-list">00/00/0000</span></span>
        <i class="sprite sprite3 sprite-open_white expand-publish"></i>


        <span class="box-denuncia right"><i class="sprite sprite-denuncia"></i><span class="menu-name denuncia">Denunciar Publicação</span></span>
        <i class="sprite sprite-favorito right"></i>
      </div>

      <div class="box-content">
        <div class="feed-details clearfix">
          <div class="user-details">
            <div class="usr-img-status">
              <div class="c100 p75 small">
                  <span class="usr-img" style="background-image: url('../img/user.png');"></span>
              </div>
            </div>
            <h3 class="usr-name">George Firmino</h3>
            <span class="nivel-usr">Concurseiro Experiente</span>
            <span class="conf-usr">Confiabilidade 95%</span>
          </div>
          <div class="feed-info">
            <span class="publish-up">Publicado em 25/10/2015 19:25</span>
            <span class="publish-accepted">Esta publicação tem 98,5% de aceitação.</span>
          </div>
        </div>
        <div class="feed-text clearfix">
          <div class="edital prova clearfix">
            <div class="edital-info">
              <span class="nome-concurso">Nome do Concurso cadastrado pelo usuário</span>
              <span class="nome-banca">Nome da banca</span>
              <span class="ano">Ano</span>
            </div>
          </div>
          <div class="edital prova clearfix" style="margin: 20px 0">
            <span class="prova-name">Prova 1</span>
            <div class="imagem" style="background-image: url('banners/revista.jpg')"></div>
            <a href="#" class="sprite sprite-pdf">Baixar</a>
          </div>
          <div class="edital prova clearfix" style="margin: 20px 0">
            <span class="prova-name">Prova 1</span>
            <div class="imagem" style="background-image: url('banners/revista.jpg')"></div>
            <a href="#" class="sprite sprite-pdf">Baixar</a>
          </div>
        </div>
        <div class="feed-tags">
          <span>TAGS: bibliografia, Auditor Fiscal, Direito Administrativo</span>
        </div>
      </div>
      <div class="box-approve">
        <div class="box-button button-aprovar quarter">
            <button class="btn btn-ok btn-aprova"><i class="sprite sprite-aprovar"></i><span class="menu-name">Aprovar</span></button>
            <span><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-reprovar quarter">
            <button class="btn btn-danger btn-reprovar"><i class="sprite sprite-reprovar"></i><span class="menu-name">Reprovar</span></button>
            <span><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-share quarter">
            <button class="btn btn-blue btn-share"><i class="sprite sprite-share"></i><span class="menu-name">Compartilhar</span></button>
            <span><b>1.200 Aprovaram</b></span>
        </div>
        <div class="box-button button-comment quarter">
            <button class="btn btn-alert btn-comment"><i class="sprite sprite-comentar"></i><span class="menu-name">Comentar</span></button>
            <span><b>1.200 Aprovaram</b></span>
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
