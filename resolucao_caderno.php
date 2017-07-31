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
<style>
  .comments .user-details .usr-name{
    font-size: 14px;
  }
  .comments .box-msg .feed-info .publish-up{
    margin-top: 13px;
  }
</style>
</head>
<body>
<?php include('topo_resolucao.html'); ?>

<div class="container_16 app-pages pages-interna">

  <div class="grid_14 clearfix no-margin-left" >
    <div class="box-feed clearfix box-app">
      <div class="box-interesse clearfix" style="margin-bottom: 0">
        <h2 class="align-left">Caderno de Questões - Nome do simulado</h2>
        <ul class="clearfix left relative option-question">
          <li class="clearfix bottom" >
            <a class="sprite sprite4 sprite-pdf_app" style="margin-right: 50px"></a>
          </li>
          <!-- <li class="clearfix bottom">
            <a class="sprite sprite4 sprite-link_app"></a>
          </li> -->
          <li class="clearfix bottom">
            <a class="sprite sprite4 sprite-play_app"></a>
          </li>
          <li class="clearfix bottom">
            <a class="sprite sprite4 sprite-stop_app"></a>
          </li>
          <li class="clearfix bottom">
            <a class="sprite sprite4 sprite-relogio_app"></a>
          </li>
          <li class="clearfix bottom">
            <span class="cronometer">00:00:00</span>
          </li>
        </ul>
        <div class="info-respostas">
          <span>Você respondeu 20 de 100 questões</span>
          <button class="btn bgr-oceanblue right">FINALIZAR SIMULADO</button>
        </div>
      </div>
      <div class="box-question shadow clearfix relative">
        <div class="question-top clearfix">
          <!-- <div class="anuncio-app clearfix right">
            <span class="graytitle">Anúncio patrocinado</span>
            <div class="anuncio-box">
              Publicidade
            </div>
          </div> -->
          <span class="bigtitle question-num left">Questão 1 de 100</span>
          <ul class="clearfix left relative no-margin">
            <li class="clearfix bottom">
              <a class="sprite sprite4 sprite-star_app"></a>
            </li>
            <!-- <li class="clearfix bottom">
              <a class="sprite sprite4 sprite-link_app"></a>
            </li> -->
            <li class="clearfix bottom" style="position: relative;">
              <a class="sprite sprite4 sprite-chart_app"></a>
              <div class="box-popup shadow">
                <div class="box-popup-interna">
                  <span>235</span>
                  <span>Pessoas responderam a questão</span>
                </div>
                <div class="box-popup-interna acerto">
                  <span>235</span>
                  <span>Pessoas responderam a questão</span>
                  <span class="circle no-margin">23</span>
                  <span class="no-margin">%</span>
                </div>
                <div class="box-popup-interna erro">
                  <span>235</span>
                  <span>Pessoas responderam a questão</span>
                  <span class="circle no-margin">23</span>
                  <span class="no-margin">%</span>
                </div>
              </div>
            </li>
          </ul>
          <div class="share-link right relative">
            <span class="link">http://goog.le/link</span>
            <button class="btn btn-oceanblue right">COPIAR</button>
          </div>
          <ul class="clearfix right relative share-options">
            <li>
              <a class="facebook">facebook</a>
            </li>
            <li>
              <a class="twitter">twitter</a>
            </li>
            <li>
              <a class="in">in</a>
            </li>
            <li>
              <a class="google">google</a>
            </li>
          </ul>

        </div>
        <div class="question-details clearfix">
          <span class="graytitle">Matéria: <b>Nome da matéria</b></span>
          <span class="graytitle">Assunto: <b>Nome do assunto</b></span>
          <br />
          <span class="graytitle">Nome da Banca | 2010 | <b>Nome do concurso cadastrado</b></span>
        </div>
        <div class="question-content">
          <div class="question-img" style="background-image: url('banners/topo-professor.jpg')"></div>
          <p class="question-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget odio lacinia, semper purus sit amet, tempor mi. Donec eu cursus libero, eu malesuada odio. Ut dapibus odio quis odio tincidunt dapibus. Nulla ut auctor diam. Etiam pellentesque enim turpis, ut finibus velit dapibus in. Integer egestas velit sit amet lectus maximus, non facilisis tortor vehicula.
          </p>
          <ul class="payment-methods clearfix">
            <li class="payment-method certo full">
              <input name="payment_methods" type="radio" id="certo">
              <label for="certo" class="sprite sprite4 sprite-anwser_right_app">Certo</label>
            </li>

            <li class="payment-method errado full">
              <input name="payment_methods" type="radio" id="errado">
              <label for="errado" class="sprite sprite4 sprite-anwser_wrong_app">Errado</label>
            </li>
          </ul>

        </div>
        <div class="question-footer clearfix">
          <button class="btn bgr-oceanblue left quarter">Responder</button>
          <span class="acerto-erro acerto left">Voce acertou!</span>
          <span class="acerto-erro acerto left gabarito">Gabarito: B</span>
          <i class="sprite sprite4 sprite-erro_app left"></i>
          <i class="sprite sprite4 sprite-proxima_app right"></i>
          <i class="sprite sprite4 sprite-anterior_app right"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="grid_7 no-margin-right no-margin-left clearfix" id="content-right">

      <!-- <div class="anuncio small">
          <h4>Anúncio Patrocinado</h4>
          <div class="banner-patrocinio" style="background-image: url('banners/banner.jpg')"></div>
          <span class="name-anunciantes">Nome do anunciante</span>
          <span class="site-anunciante">www.nomedoanunciante.com.br</span>
          <p class="text-anunciantes">
              Texto do anúncio com quantidade limitada de caracteres, de modo que ocupe até 2 linhas de texto.
          </p>
      </div> -->

      <div class="box-feed clearfix">
        <div class="anuncio-app clearfix left">
          <span class="graytitle">Anúncio patrocinado</span>
          <div class="anuncio-box">
            Publicidade
          </div>
        </div>
        <div class="comments clearfix left">
          <span class="bigtitle left">Comentários</span>
          <span class="bigtitle right">Anotações</span>

          <div class="box-content mensagens clearfix left" style="margin-top: 10px; display: block;">
            <ul class="desafios clearfix">
              <li class="ativos">
                <a href="#" class="active"><i class="sprite sprite4 sprite-coment_professores left"></i><span class="menu-name">Professores</span></a>
              </li>
              <li class="abertos">
                <a href="#"><i class="sprite sprite4 sprite-coment_concurseiros left"></i><span class="menu-name">Concurseiros</span></a>
              </li>
            </ul>
            <div class="right-content right no-margin" id="msg-recebidas">
              <div class="box-msg">

                <div class="usuario p75 clearfix small">
                    <div class="usr-alert">10</div>
                    <div class="quarter-circle" style="background-color: transparent"></div>
                    <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                </div>
                <div class="user-details clearfix peq">
                  <h3 class="usr-name">George Firmino</h3>
                  <ul class="clearfix">
                    <li>
                      <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
                    </li>
                    <li>
                      <a href="#" class="perfil-porcentagem">75%</a>
                    </li>
                    <li>
                      <i class="sprite sprite-plus_pq"></i>
                    </li>
                  </ul>
                </div>
                <div class="feed-info" style="width: 100%">
                  <span class="publish-up align-left">Publicado em 25/10/2015 19:25</span>
                  <ul class="clearfix icons-comment left no-margin-right no-margin-left full">
                    <li class="clearfix">
                      <span class="clearfix"><i class="sprite sprite4 sprite-aprove_pq"></i><span class="menu-name" style="float: left;position: relative;top: 8px;">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite4 sprite-decline_pq"></i><span class="menu-name" style="float: left;position: relative;top: 5px; left: 3px">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite-denuncia"></i></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 7px"><i class="sprite sprite-editar_gray"></i></span>
                    </li>
                    <li class="clearfix no-margin-right">
                      <span class="clearfix" style="position: relative; top: 8px"><i class="sprite sprite-excluir"></i></span>
                    </li>
                  </ul>
                </div>
                <p class="msg-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
                </p>
              </div>
              <div class="box-msg">

                <div class="usuario p75 clearfix small">
                    <div class="usr-alert">10</div>
                    <div class="quarter-circle" style="background-color: transparent"></div>
                    <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                </div>
                <div class="user-details clearfix peq">
                  <h3 class="usr-name">George Firmino</h3>
                  <ul class="clearfix">
                    <li>
                      <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
                    </li>
                    <li>
                      <a href="#" class="perfil-porcentagem">75%</a>
                    </li>
                    <li>
                      <i class="sprite sprite-plus_pq"></i>
                    </li>
                  </ul>
                </div>
                <div class="feed-info" style="width: 100%">
                  <span class="publish-up align-left">Publicado em 25/10/2015 19:25</span>
                  <ul class="clearfix icons-comment left no-margin-right no-margin-left full">
                    <li class="clearfix">
                      <span class="clearfix"><i class="sprite sprite4 sprite-aprove_pq"></i><span class="menu-name" style="float: left;position: relative;top: 8px;">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite4 sprite-decline_pq"></i><span class="menu-name" style="float: left;position: relative;top: 5px; left: 3px">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite-denuncia"></i></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 7px"><i class="sprite sprite-editar_gray"></i></span>
                    </li>
                    <li class="clearfix no-margin-right">
                      <span class="clearfix" style="position: relative; top: 8px"><i class="sprite sprite-excluir"></i></span>
                    </li>
                  </ul>
                </div>
                <p class="msg-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
                </p>
              </div>
              <div class="box-msg">

                <div class="usuario p75 clearfix small">
                    <div class="usr-alert">10</div>
                    <div class="quarter-circle" style="background-color: transparent"></div>
                    <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                </div>
                <div class="user-details clearfix peq">
                  <h3 class="usr-name">George Firmino</h3>
                  <ul class="clearfix">
                    <li>
                      <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
                    </li>
                    <li>
                      <a href="#" class="perfil-porcentagem">75%</a>
                    </li>
                    <li>
                      <i class="sprite sprite-plus_pq"></i>
                    </li>
                  </ul>
                </div>
                <div class="feed-info" style="width: 100%">
                  <span class="publish-up align-left">Publicado em 25/10/2015 19:25</span>
                  <ul class="clearfix icons-comment left no-margin-right no-margin-left full">
                    <li class="clearfix">
                      <span class="clearfix"><i class="sprite sprite4 sprite-aprove_pq"></i><span class="menu-name" style="float: left;position: relative;top: 8px;">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite4 sprite-decline_pq"></i><span class="menu-name" style="float: left;position: relative;top: 5px; left: 3px">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite-denuncia"></i></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 7px"><i class="sprite sprite-editar_gray"></i></span>
                    </li>
                    <li class="clearfix no-margin-right">
                      <span class="clearfix" style="position: relative; top: 8px"><i class="sprite sprite-excluir"></i></span>
                    </li>
                  </ul>
                </div>
                <p class="msg-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
                </p>
              </div>
              <div class="box-msg">

                <div class="usuario p75 clearfix small">
                    <div class="usr-alert">10</div>
                    <div class="quarter-circle" style="background-color: transparent"></div>
                    <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                </div>
                <div class="user-details clearfix peq">
                  <h3 class="usr-name">George Firmino</h3>
                  <ul class="clearfix">
                    <li>
                      <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
                    </li>
                    <li>
                      <a href="#" class="perfil-porcentagem">75%</a>
                    </li>
                    <li>
                      <i class="sprite sprite-plus_pq"></i>
                    </li>
                  </ul>
                </div>
                <div class="feed-info" style="width: 100%">
                  <span class="publish-up align-left">Publicado em 25/10/2015 19:25</span>
                  <ul class="clearfix icons-comment left no-margin-right no-margin-left full">
                    <li class="clearfix">
                      <span class="clearfix"><i class="sprite sprite4 sprite-aprove_pq"></i><span class="menu-name" style="float: left;position: relative;top: 8px;">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite4 sprite-decline_pq"></i><span class="menu-name" style="float: left;position: relative;top: 5px; left: 3px">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite-denuncia"></i></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 7px"><i class="sprite sprite-editar_gray"></i></span>
                    </li>
                    <li class="clearfix no-margin-right">
                      <span class="clearfix" style="position: relative; top: 8px"><i class="sprite sprite-excluir"></i></span>
                    </li>
                  </ul>
                </div>
                <p class="msg-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
                </p>
              </div>
              <div class="box-msg">
                <div class="usuario p75 clearfix small">
                    <div class="usr-alert">10</div>
                    <div class="quarter-circle" style="background-color: transparent"></div>
                    <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                </div>
                <div class="user-details clearfix peq">
                  <h3 class="usr-name">George Firmino</h3>
                  <ul class="clearfix">
                    <li>
                      <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
                    </li>
                    <li>
                      <a href="#" class="perfil-porcentagem">75%</a>
                    </li>
                    <li>
                      <i class="sprite sprite-plus_pq"></i>
                    </li>
                  </ul>
                </div>
                <div class="feed-info" style="width: 100%">
                  <span class="publish-up align-left">Publicado em 25/10/2015 19:25</span>
                  <ul class="clearfix icons-comment left no-margin-right no-margin-left full">
                    <li class="clearfix">
                      <span class="clearfix"><i class="sprite sprite4 sprite-aprove_pq"></i><span class="menu-name" style="float: left;position: relative;top: 8px;">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite4 sprite-decline_pq"></i><span class="menu-name" style="float: left;position: relative;top: 5px; left: 3px">53</span></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 3px"><i class="sprite sprite-denuncia"></i></span>
                    </li>
                    <li class="clearfix">
                      <span class="clearfix" style="position: relative; top: 7px"><i class="sprite sprite-editar_gray"></i></span>
                    </li>
                    <li class="clearfix no-margin-right">
                      <span class="clearfix" style="position: relative; top: 8px"><i class="sprite sprite-excluir"></i></span>
                    </li>
                  </ul>
                </div>

                <p class="msg-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
                </p>
              </div>
            </div>
          </div>

          <!-- ANOTAÇÕES -->
          <div class="box-content mensagens clearfix left" style="margin-top: 10px; width: 362px; display: none">
            <div class="right-content right no-margin" id="msg-recebidas">
              <div class="edition-bar clearfix left">
                Barra de edição será inserida na programação
              </div>
              <span class="ult-att align-left" style="font-size: 10px">Última alteração em 00/00/0000 as 00:00</span>
              <p class="msg-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
              </p>
            </div>
          </div>

          <button class="btn btn-oceanblue full btn-enviar_comentario" style="margin-top: 10px">Enviar comentário</button>
        </div>

      </div>
  </div>

  <div class="overlay caderno resolucao">
      <div class="box-feed clearfix shadow">
          <i class="sprite sprite2 sprite-close_blue"></i>
          <p class="center-text">
            Barra de edição de texto será inserida no desenvolvimento.
          </p>
          <textarea class="center">Texto digitado</textarea>
          <button class="btn bgr-oceanblue btn-ir quarter center">ENVIAR</button>
      </div>
  </div>
  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
