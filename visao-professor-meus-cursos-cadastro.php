<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>e-concurseiro</title>
    <?php include('estilos.html'); ?>
    <style media="screen">
      input{
        text-align: center;
      }
    </style>
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

                <div class="box-interesse">
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
                    </div>
                    <div class="box-interesse clearfix">
                        <fieldset>
                            <div class="box-input">
                                <span class="bigtitle">Valor</span>
                                <input type="text" class="data-evento" placeholder="R$ 4.500,00" />
                            </div>
                            <div class="box-input">
                                <span class="bigtitle">Vendas até</span>
                                <input type="text" class="inicio-evento" style="width: 80px" placeholder="00/00/0000" />
                            </div>
                            <div class="box-input">
                                <span class="bigtitle">Corporta Fórum</span>
                                <div class="option-group radio-padrao">
                                  <ul class="payment-methods clearfix left double">
                                    <li class="payment-method certo clearfix">
                                      <input name="payment_methods" type="radio" id="nao">
                                      <label for="nao"><span class="block left">Não</span><i class="sprite sprite4 sprite-radio_button left"></i></label>
                                    </li>
                                    <li class="payment-method errado clearfix">
                                      <input name="payment_methods" type="radio" id="sim">
                                      <label for="sim"><span class="block left">Sim</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="box-input">
                                <span class="bigtitle">Fórum Até</span>
                                <input type="text" class="inicio-evento" style="width: 80px" placeholder="00/00/0000" />
                            </div>
                            <div class="box-input">
                                <span class="bigtitle">Turmas limitadas?</span>
                                <div class="option-group radio-padrao">
                                  <ul class="payment-methods clearfix left double">
                                    <li class="payment-method certo clearfix">
                                      <input name="payment_methods" type="radio" id="nao1">
                                      <label for="nao1"><span class="block left">Não</span><i class="sprite sprite4 sprite-radio_button left"></i></label>
                                    </li>
                                    <li class="payment-method errado clearfix">
                                      <input name="payment_methods" type="radio" id="sim1">
                                      <label for="sim1"><span class="block left">Sim</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="box-input">
                                <span class="bigtitle">Limites de alunos</span>
                                <input type="text" class="data-evento" placeholder="20" />
                            </div>
                        </fieldset>
                    </div>
                    <div class="box-interesse clearfix">
                        <span class="title-interesse">Descrição do curso</span>
                        <textarea class="text-area">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris, congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum. </textarea>
                    </div>
                    <div class="box-interesse clearfix">
                        <button class="btn btn-oceanblue btn-save left quarter"><i class="sprite sprite-plus_pq icon-white"></i><span class="menu-name">Adicionar Aulas</span></button>
                        <br />
                        <br />
                        <br />
                        <div class="box-aula clearfix half">
                            <span class="bigtitle left">Aula 01</span>
                            <span class="graytitle left">00/00/0000</span>
                            <i class="sprite sprite-pdf_pq"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite2 sprite-ver_videos"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite-excluir_blue right"></i>
                            <i class="sprite sprite2 sprite-aulas right"></i>
                        </div>
                        <div class="box-aula clearfix half">
                            <span class="bigtitle left">Aula 01</span>
                            <span class="graytitle left">00/00/0000</span>
                            <i class="sprite sprite-pdf_pq"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite2 sprite-ver_videos"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite-excluir_blue right"></i>
                            <i class="sprite sprite2 sprite-aulas right"></i>
                        </div>
                        <div class="box-aula clearfix half">
                            <span class="bigtitle left">Aula 01</span>
                            <span class="graytitle left">00/00/0000</span>
                            <i class="sprite sprite-pdf_pq"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite2 sprite-ver_videos"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite-excluir_blue right"></i>
                            <i class="sprite sprite2 sprite-aulas right"></i>
                        </div>
                        <div class="box-aula clearfix half">
                            <span class="bigtitle left">Aula 01</span>
                            <span class="graytitle left">00/00/0000</span>
                            <i class="sprite sprite-pdf_pq"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite2 sprite-ver_videos"><span class="alert-icon">10</span></i>
                            <i class="sprite sprite-excluir_blue right"></i>
                            <i class="sprite sprite2 sprite-aulas right"></i>
                        </div>
                    </div>

                    <button class="btn btn-blue btn-save left quarter">SALVAR</button>



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
        <div class="overlay block meus-cursos">
            <!-- <div class="box-feed clearfix shadow">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <fieldset>

              <div class="box-input">
                <span class="bigtitle">Data da aula</span>
                <input type="text" class="data-evento" placeholder="00/00/0000"/>
              </div>
              <div class="box-input">
                <span class="bigtitle">Nome da Aula</span>
                <input type="text" class="nome-evento" />
              </div>

            </fieldset>

            <fieldset>
              <div class="box-input">
                <span class="bigtitle">Descrição Resumida (assuntos abordados na aula)</span>
                <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris, congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum. </textarea>
              </div>
              <hr />
            </fieldset>
            <fieldset>
              <div class="box-input">
                <span class="bigtitle">PDF - Inserir arquivo</span>
                <button class="btn btn-oceanblue">Selecionar PDF</button>
                <div class="upload-option clearfix">
                  <i class="sprite sprite-pdf"></i>
                  <span class="nome-arquivo"><span class="menu-name left">Edital.PDF</span><i class="sprite sprite2 sprite-close_gray"></i></span>

                </div>
              </div>
            </fieldset>
            <button class="btn bgr-oceanblue btn-ir quarter center">SALVAR</button>
          </div> -->
            <!-- <div class="box-feed clearfix shadow meus-cursos-cadastro">
                <i class="sprite sprite2 sprite-close_blue"></i>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Data da aula</span>
                        <input type="text" class="data-evento" placeholder="00/00/0000" />
                    </div>
                    <div class="box-input">
                        <span class="bigtitle">Nome da Aula (Ex. Aula 01)</span>
                        <input type="text" class="nome-evento" />
                    </div>
                </fieldset>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Descrição Resumida (assuntos abordados na aula)</span>
                        <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris,
                            congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum. </textarea>
                    </div>
                    <hr />
                </fieldset>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Título do vídeo</span>
                        <input type="text" class="nome-evento" />
                    </div>
                    <div class="box-input">
                        <span class="bigtitle">Url</span>
                        <input type="text" class="nome-evento" />
                    </div>
                    <button class="btn btn-patblue half"><i class="sprite sprite-youtube"></i><span class="menu-name">Adicionar Video</span></button>
                </fieldset>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <hr />
                <button class="btn bgr-oceanblue btn-ir half center">SALVAR</button>
            </div> -->
            <div class="box-feed clearfix shadow meus-cursos-cadastro">
                <i class="sprite sprite2 sprite-close_blue"></i>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Data da aula</span>
                        <input type="text" class="data-evento" placeholder="00/00/0000" />
                    </div>
                    <div class="box-input">
                        <span class="bigtitle">Nome da Aula (Ex. Aula 01)</span>
                        <input type="text" class="nome-evento" />
                    </div>
                </fieldset>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Descrição Resumida (assuntos abordados na aula)</span>
                        <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris, congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum. </textarea>
                    </div>
                    <hr />
                </fieldset>
                <fieldset style="border-top: 1px solid #f1f1f1; border-bottom: 1px solid #f1f1f1">
                  <div class="box-input">
                    <span class="bigtitle">PDF - Inserir arquivo</span>
                    <button class="btn btn-oceanblue">Selecionar PDF</button>
                    <div class="upload-option clearfix">
                      <i class="sprite sprite-pdf"></i>
                      <span class="nome-arquivo"><span class="menu-name left">Edital.PDF</span><i class="sprite sprite2 sprite-close_gray"></i></span>

                    </div>
                  </div>
                  <hr />
                </fieldset>
                <fieldset>
                    <div class="box-input">
                        <span class="bigtitle">Título do vídeo</span>
                        <input type="text" class="nome-evento" />
                    </div>
                    <div class="box-input">
                        <span class="bigtitle">Url</span>
                        <input type="text" class="nome-evento" />
                    </div>
                    <button class="btn btn-patblue half"><i class="sprite sprite-youtube"></i><span class="menu-name">Adicionar Video</span></button>
                </fieldset>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <div class="video-add clearfix">
                    <input type="text" placeholder="introducao.mp4" class="upload">
                    <div class="video-btns clearfix">
                        <i class="sprite sprite-video_edit"></i>
                        <i class="sprite sprite-video_del"></i>
                    </div>
                </div>
                <hr />
                <button class="btn bgr-oceanblue btn-ir half center">SALVAR</button>
            </div>
        </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
