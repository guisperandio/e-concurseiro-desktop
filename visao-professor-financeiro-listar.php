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
                        <button class="btn bgr-yellow btn-meus_cursos "><i class="sprite sprite2 sprite-btn_cursos"></i><span class="menu-name">Cursos</span></button>
                        <button class="btn btn-blue btn-financeiro"><i class="sprite sprite2 sprite-follow"></i><span class="menu-name">Seguir</span></button>
                        <button class="btn btn-blue btn-msg"><i class="sprite sprite2 sprite-msg-pq"></i><span class="menu-name">Mensagem</span></button>
                        <button class="btn btn-blue btn-eventos"><i class="sprite sprite2 sprite-eventos"></i><span class="menu-name">Eventos</span></button>
                    </div>

                </div>

            </div>


            <div class="grid_12" id="content-middle">
                <div class="box-interesse clearfix">
                  <h4 class="bluetitle">Vendas de cursos:</h4>
                  <ul id="expand-list" class="clearfix no-margin expand-big">
                    <li>
                      <a href="#" class="expand">Vendas por período</a>
                    </li>
                    <li>
                      <a href="#" class="list expand">listar pagamento</a>
                    </li>
                    <li>
                      <a href="#" class="list expand">Demonstrativo mensal</a>
                    </li>
                  </ul>
                </div>
                <div class="box-interesse clearfix">
                  <h4 class="bluetitle">Receitas com anúncios:</h4>
                  <ul id="expand-list" class="clearfix no-margin expand-big">
                    <li>
                      <a href="#" class="expand">Ganho por período</a>
                    </li>
                    <li>
                      <a href="#" class="list expand">Demonstrativo mensal</a>
                    </li>
                  </ul>
                </div>
                <div class="box-interesse">
                    <h5 class="bigtitle center-text">Vendas de cursos - Listar Pagamentos</h5>

                    <div class="box-interesse clearfix financeiro listar-pagamentos">
                        <div class="left same-line select-div quarter">
                            <span class="title-interesse">Situação do curso</span>
                            <div class="select-option">
                                <select class="sprite4 sprite-seta_option" style="background-position: -1237px -441px;">
                                    <option>
                                        MÊS
                                    </option>
                                    <option>
                                        Teste
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="left select-div half">
                            <span class="title-interesse">Curso</span>
                            <div class="select-option" style="width: 100% !important;">
                                <select class="sprite4 sprite-seta_option" style="background-position: -1015px -441px;width: 97% !important;">
                                    <option>
                                        SELECIONE ANTES A SITUAÇÃO
                                    </option>
                                    <option>
                                        Teste
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-interesse clearfix financeiro">
                        <div class="left same-line select-div">
                            <span class="title-interesse">Data Inicial</span>
                            <input type="text" placeholder="00/00/0000" class="small no-margin"/>
                        </div>
                        <div class="left same-line select-div">
                            <span class="title-interesse">Data Final</span>
                            <input type="text" placeholder="00/00/0000" class="small no-margin"/>
                        </div>
                        <button class="btn bgr-oceanblue left quarter">Listar Pagamentos</button>
                    </div>
                    <div class="box-interesse clearfix">
                      <span class="bluetitle"><b>CURSOS:</b> Todos</span>
                      <span class="bluetitle"><b>Período:</b> Todos</span>
                      <i class="sprite sprite-relatorio">Salvar Relatório</i>
                      <i class="sprite sprite-demonstrativo">Demonstrativo para IRPF</i>
                        <table class="table-professor">
                          <tr class="topo">
                            <th class="align-left">Data</th>
                            <th class="align-left">Aluno</th>
                            <th class="align-left">Curso</th>
                            <th class="align-left">Valor</th>
                          </tr>
                          <tr class="linha odd">
                            <td class="align-left">00/00/0000</td>
                            <td class="align-left">Angelo Miguel dos Santos Xavier</td>
                            <td class="align-left">Ética no Serviço Público</td>
                            <td class="align-left">140,00</td>
                          </tr>
                          <tr class="linha">
                            <td class="align-left">00/00/0000</td>
                            <td class="align-left">Angelo Miguel dos Santos Xavier</td>
                            <td class="align-left">Ética no Serviço Público</td>
                            <td class="align-left">140,00</td>
                          </tr>
                          <tr class="linha odd">
                            <td class="align-left">00/00/0000</td>
                            <td class="align-left">Angelo Miguel dos Santos Xavier</td>
                            <td class="align-left">Ética no Serviço Público</td>
                            <td class="align-left">140,00</td>
                          </tr>
                          <tr class="linha">
                            <td class="align-left">00/00/0000</td>
                            <td class="align-left">Angelo Miguel dos Santos Xavier</td>
                            <td class="align-left">Ética no Serviço Público</td>
                            <td class="align-left">140,00</td>
                          </tr>
                          <tr class="footer">
                            <th class="align-left">00/00/0000</th>
                            <th class="align-left">Angelo Miguel dos Santos Xavier</th>
                            <th class="align-left">Ética no Serviço Público</th>
                            <th class="align-left">140,00</th>
                          </tr>
                        </table>
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
        <!-- <div class="overlay block meus-cursos">
          <div class="box-feed clearfix shadow">
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
          </div>
        </div> -->
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
