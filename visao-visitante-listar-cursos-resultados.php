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
    <div class="container_16 papo professor">
        <div class="grid_12 no-margin">
            <div class="grid_100">
                <div class="img-topo" style="background-image: url('banners/topo-professor.jpg')">
                </div>
                <div class="pag-option clearfix bgr-white shadow">
                    <?php include('usuario_big.html'); ?>
                    <h3 class="usr-name">George Firmino</h3>
                    <span class="usr-nivel">Nível 5</span>
                    <div class="container-btns clearfix right margin-btns-pq">
                      <button class="btn btn-blue btn-financeiro"><i class="sprite sprite-home"></i><span class="menu-name">Home</span></button>
                      <button class="btn btn-blue btn-financeiro"><i class="sprite sprite2 sprite-follow"></i><span class="menu-name">Seguir</span></button>
                      <button class="btn btn-blue btn-msg"><i class="sprite sprite2 sprite-msg-pq"></i><span class="menu-name">Mensagem</span></button>
                      <button class="btn btn-blue btn-eventos"><i class="sprite sprite2 sprite-eventos"></i><span class="menu-name">Eventos</span></button>
                    </div>

                </div>

            </div>


            <div class="grid_12" id="content-middle">

              <div class="box-interesse clearfix">
                <span class="subtitle">Exibir Cursos por:</span>
                <ul id="expand-list" class="clearfix expand-big">
                  <li>
                    <a href="#" class="list expand">Concurso</a>
                  </li>
                  <li>
                    <a href="#" class="list expand">Matéria</a>
                  </li>
                  <li>
                    <a href="#" class="list expand">Área</a>
                  </li>
                  <li>
                    <a href="#" class="list expand">Listar todos os cursos</a>
                  </li>
                </ul>
              </div>
              <div class="box-interesse">
                <h5 class="bigtitle">Cursos por concurso</h5>
                <div class="box-concurso full clearfix left">
                  <h6>Nome do curso cadastrado no admin</h6>
                  <div class="right">
                    <i class="sprite sprite-details"></i>
                    <span class="detalhes">Detalhes</span>
                  </div>
                  <span class="valor-curso right">R$ 0.000,00</span>
                </div>
                <div class="box-concurso full clearfix left">
                  <h6>Nome do curso cadastrado no admin</h6>
                  <div class="right">
                    <i class="sprite sprite-details"></i>
                    <span class="detalhes">Detalhes</span>
                  </div>
                  <span class="valor-curso right">R$ 0.000,00</span>
                </div>
                <div class="box-concurso full clearfix left">
                  <h6>Nome do curso cadastrado no admin</h6>
                  <div class="right">
                    <i class="sprite sprite-details"></i>
                    <span class="detalhes">Detalhes</span>
                  </div>
                  <span class="valor-curso right">R$ 0.000,00</span>
                </div>
                <div class="box-concurso full clearfix left">
                  <h6>Nome do curso cadastrado no admin</h6>
                  <div class="right">
                    <i class="sprite sprite-details"></i>
                    <span class="detalhes">Detalhes</span>
                  </div>
                  <span class="valor-curso right">R$ 0.000,00</span>
                </div>
              </div>

            </div>
        </div>

        <!-- end .grid_6 -->
        <div class="grid_4" id="content-right">

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
        <!-- <div class="overlay block">
          <div class="box-feed clearfix shadow">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <i class="sprite sprite2 sprite-video-39"></i>
            <h7>Tutoriais em vídeo</h7>
            <p>
              Entenda todas as funcionalidades do site de forma rápida e prática.
            </p>
            <h5>Nome do video cadastrado no adm</h5>
            <iframe width="505" height="301" src="https://www.youtube.com/embed/cv5taxs7SVU" frameborder="0" allowfullscreen></iframe>
          </div>

        </div> -->
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
