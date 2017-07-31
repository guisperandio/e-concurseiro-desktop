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

              <h5 class="bigtitle align-left">Cadastro de curso</h5>
              <div class="box-interesse clearfix">
                  <span class="title-interesse">Código do curso</span>
                  <input type="text" placeholder="535" class="left input-small center-text" />
                  <span class="text-obs left">gerado automaticamente quando salvar o curso</span>
                  <!-- <button class="btn btn-oceanblue btn-ok left">OK</button> -->
              </div>

              <div class="box-interesse clearfix">
                  <div class="left same-line">
                      <span class="title-interesse">Nome do Curso</span>
                      <input type="text" placeholder="Ética no Serviço Público p/ INSS 2015/2016 - pós edital" class="left " />
                  </div>
                  <div class="left same-line">
                      <span class="title-interesse">Tipo de Curso</span>
                      <div class="option-group tipos-curso">
                        <ul class="payment-methods clearfix left">
                          <li class="payment-method certo clearfix">
                            <input name="payment_methods" type="radio" id="certo">
                            <label for="certo"><span class="block left">Apenas PDF</span><i class="sprite sprite4 sprite-radio_button left"></i></label>
                          </li>
                          <li class="payment-method errado clearfix">
                            <input name="payment_methods" type="radio" id="errado">
                            <label for="errado"><span class="block left">PDF + Video</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                          </li>
                          <li class="payment-method errado clearfix">
                            <input name="payment_methods" type="radio" id="errado">
                            <label for="errado"><span class="block left">Apenas Video</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                          </li>
                        </ul>
                      </div>
                  </div>

              </div>

              <div class="box-interesse clearfix" style="">
                  <div class="left same-line select-div">
                      <span class="title-interesse">Matéria</span>
                      <div class="publicacao clearfix no-margin-bottom" >
                        <div class="select-option" style="width: 100% !important">
                          <select class="sprite4 sprite-seta_option" style="padding: 12px 8px !important;
                  width: 100% !important; background-position: -532px -440px !important;
                  border: 0;
                  background-color: #fff;">
                            <option>
                              Ética no serviço público
                            </option>
                            <option>
                              Teste
                            </option>
                          </select>
                        </div>
                      </div>
                  </div>
                  <div class="left same-line select-div">
                      <span class="title-interesse">Concurso</span>
                      <div class="publicacao clearfix no-margin-bottom" >
                        <div class="select-option" style="width: 100% !important">
                          <select class="sprite4 sprite-seta_option" style="padding: 12px 8px !important;
                  width: 100% !important; background-position: -532px -440px !important;
                  border: 0;
                  background-color: #fff;">
                            <option>
                              Auditor Fiscal da Receita Federal do Brasil - AFRFB
                            </option>
                            <option>
                              Teste
                            </option>
                          </select>
                        </div>
                      </div>
                  </div>
                  <div class=
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
        <div class="overlay block">

          <div class="box-feed clearfix shadow meus-cursos-forum">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <ul id="expand-list" class="clearfix expand-big">
              <li>
                <a href="#" class="expand">Título da Aula</a>
              </li>
              <li>
                <a href="#" class="list expand">Curso</a>
              </li>
            </ul>
            <p class="center-text">
              Barra de edição de texto será inserida no desenvolvimento.
            </p>
            <div class="field-resposta">
              <textarea>Mensagem digitada pelo aluno...</textarea>
              <button class="btn btn-danger right quarter">Enviar Mensagem</button>
            </div>
          </div>



        </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
