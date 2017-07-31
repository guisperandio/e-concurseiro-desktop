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
    <div class="container_16 papo professor" id="">
        <div class="grid_12 no-margin">
            <div class="grid_100">
                <div class="img-topo" style="background-image: url('banners/topo-professor.jpg')">
                </div>
                <div class="pag-option clearfix bgr-white shadow">
                    <?php include('usuario_big.html'); ?>
                    <h3 class="usr-name">George Firmino</h3>
                    <span class="usr-nivel">Nível 5</span>
                    <div class="container-btns clearfix right margin-btns-pq">
                        <button class="btn bgr-yellow btn-meus_cursos"><i class="sprite sprite2 sprite-btn_cursos"></i><span class="menu-name">Cursos</span></button>
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
            <div class="box-desempenho">
                <span class="title-text">Desempenho da página</span>
                <span class="title-text-small">Últimos 7 dias</span>
                <span class="ver-mais">(ver mais)</span>
                <div class="desempenho-num">
                    <div class="box-desemp">
                        <span>1.250</span>
                        <span>visitas à página</span>
                        <div class="num-desempenho good">
                            <i class="sprite sprite2 sprite-arrow"></i>
                            <span class="good-num">90,25%</span>
                        </div>
                        <hr />
                    </div>
                    <div class="box-desemp">
                        <span>1.250</span>
                        <span>visitas à página</span>
                        <div class="num-desempenho bad">
                            <i class="sprite sprite2 sprite-arrow"></i>
                            <span class="bad-num">90,25%</span>
                        </div>
                        <hr />
                    </div>
                    <div class="box-desemp">
                        <span>1.250</span>
                        <span>visitas à página</span>
                        <div class="num-desempenho bad">
                            <i class="sprite sprite2 sprite-arrow"></i>
                            <span class="bad-num">90,25%</span>
                        </div>
                    </div>
                </div>
                <div class="interacoes">
                    <div class="alert-icon">10</div>
                    <span class="alert-msg">novas interações</span>
                </div>

            </div>

        </div>
        <!-- end .grid_6 -->
        <!-- <div class="overlay block">

          <div class="box-feed clearfix shadow meus-cursos-forum">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <ul id="expand-list" class="clearfix">
              <li>
                <a href="#" class="expand">Título da Aula</a>
              </li>
              <li>
                <a href="#" class="list expand">Curso</a>
              </li>
            </ul>
            <div class="field-resposta">
              <textarea>Mensagem digitada pelo aluno...</textarea>
              <button class="btn btn-danger right quarter">Enviar Mensagem</button>
            </div>
          </div>



        </div> -->
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
