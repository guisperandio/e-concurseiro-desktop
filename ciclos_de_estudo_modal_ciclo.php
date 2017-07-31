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
    <?php include('estilos_app.html'); ?>
</head>

<body>
    <?php include('topo_ciclos.html'); ?>

    <div class="container_16 app-pages" id="">

        <div class="grid_16 clearfix" id="content-middle">
            <div class="box-feed clearfix box-app">
                <div class="grid_16 clearfix">
                    <h2 class="bigtitle align-left">Acompanhamento das metas</h2>
                    <div class="box-feed clearfix">
                        <span class="bluetitle left">Ciclo 01</span>
                        <i class="sprite sprite-pdf_pq"></i>
                        <br>
                        <br>
                        <p class="metas"><b>Meta estabelecida:</b> 220 horas</p>
                        <p class="metas"><b>Início:</b> 00/00/0000</p>
                        <p class="metas"><b>Prazo para conclusão:</b> 00/00/0000</p>
                    </div>
                    <div class="box-feed box-parciais clearfix">
                        <span class="bluetitle">Metas parciais</span>
                        <div class="grid_6 clearfix left">
                            <table class="table-professor">
                                <tr class="topo">
                                    <th>Periodo</th>
                                    <th>Meta</th>
                                </tr>
                                <tr class="linha odd">
                                    <td>00/00/0000 a 00/00/0000</td>
                                    <td>120 Horas</td>
                                </tr>
                                <tr class="linha">
                                    <td>00/00/0000 a 00/00/0000</td>
                                    <td>120 Horas</td>
                                </tr>
                                </tr>
                                <tr class="linha odd">
                                    <td>00/00/0000 a 00/00/0000</td>
                                    <td>120 Horas</td>
                                </tr>
                                <tr class="linha">
                                    <td>00/00/0000 a 00/00/0000</td>
                                    <td>120 Horas</td>
                                </tr>
                            </table>
                        </div>
                        <div class="grid_8 clearfix left">
                            <div class="box-alert bgr-green clearfix left">
                                <span class="whitetitle">Parabens!</span>
                                <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
                            </div>
                            <div class="box-alert bgr-yellow clearfix left">
                                <span class="whitetitle">Atenção!</span>
                                <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
                            </div>
                            <div class="box-alert bgr-red clearfix left">
                                <span class="whitetitle">Atenção!</span>
                                <p>Ciclo concluido no prazo. Esse é o caminho da aprovação.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-feed clearfix">
                        <span class="bluetitle">Acompanhamento da execução</span>
                        <table class="table-professor">
                            <tr class="topo">
                                <th>Data atual</th>
                                <th>Meta do dia</th>
                                <th>Estudado</th>
                                <th>%atingido</th>
                                <th>Meta acumulada</th>
                                <th>Estudo acumulado</th>
                                <th>%atingido</th>
                                <th class="align-left">Situação</th>
                            </tr>
                            <tr class="linha odd">
                                <td>00/00/0000</td>
                                <td>152 horas</td>
                                <td>135 horas</td>
                                <td>72.22%</td>
                                <td>120 horas</td>
                                <td>100 horas</td>
                                <td>25.89%</td>
                                <td class="align-left" style="color: green; text-transform: uppercase">Meta cumprida, Parabéns!</td>
                            </tr>
                            <tr class="linha">
                                <td>00/00/0000</td>
                                <td>152 horas</td>
                                <td>135 horas</td>
                                <td>72.22%</td>
                                <td>120 horas</td>
                                <td>100 horas</td>
                                <td>25.89%</td>
                                <td class="align-left" style="color: green; text-transform: uppercase">Meta cumprida, Parabéns!</td>
                            </tr>
                            <tr class="linha">
                                <td>00/00/0000</td>
                                <td>152 horas</td>
                                <td>135 horas</td>
                                <td>72.22%</td>
                                <td>120 horas</td>
                                <td>100 horas</td>
                                <td>25.89%</td>
                                <td class="align-left" style="color: gold; text-transform: uppercase">Atraso com possibilidade de recuperação!</td>
                            </tr>
                            <tr class="linha">
                                <td>00/00/0000</td>
                                <td>152 horas</td>
                                <td>135 horas</td>
                                <td>72.22%</td>
                                <td>120 horas</td>
                                <td>100 horas</td>
                                <td>25.89%</td>
                                <td class="align-left" style="color: red; text-transform: uppercase">Atraso prejudicial. Atenção!</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-feed clearfix">
                        <span class="bluetitle">Metas anteriores</span>
                        <p>
                            - Ciclo 01
                            <br> - Ciclo 02
                        </p>
                    </div>
                    <button class="btn bgr-oceanblue quarter left">Voltar</button>
                </div>


            </div>

            <div class="overlay modal-ciclo" style="display: block">
                <div class="box-feed clearfix shadow grid_16" style="margin: 16px 54px">
                    <i class="sprite sprite2 sprite-close_blue"></i>
                    <div class="box-interesse clearfix no-margin">
                        <div class="left clearfix">
                            <span class="ultratitle">Ciclo 01</span>
                            <p class="modal-p">
                                Iniciado em 00/00/0000
                                <br> Meta para 00/00/0000
                            </p>
                        </div>
                        <div class="left clearfix cronometro" style="width: 230px;">
                            <ul class="clearfix left relative option-question no-margin">

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
                                    <span style="color: red">00:00:00</span>
                                </li>
                            </ul>
                            <p class="warning" style="text-align: center;width: 261px;font-size: 11px;text-transform: uppercase;font-weight: 400;">
                                Proxima materia: Matematica financeira
                                <br> 1 Hora - Bloco 3 - Questões
                            </p>
                        </div>
                        <div class="right clearfix">
                            <div class="anuncio-app clearfix right">
                                <div class="anuncio-box">
                                    Publicidade
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-interesse clearfix">
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                        <p class="no-margin-top no-padding-top">
                                          nome do anunciante
                                          <br />
                                          www.enderecoanunciantes.com.br
                                        </p>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                          <div class="box-interesse clearfix no-margin" style="position: relative; overflow-x: hidden">
                                            <div class="usuario p75 clearfix small" style="position: relative; top: 2px; left: 15px; width: 50px !important">
                                                <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                                            </div>
                                            <div class="user-details peq clearfix" style="float: left;width: 100px;padding: 0;margin-left: 27px;margin-top: 9px;">
                                              <h3 class="usr-name">George Firmino</h3>
                                              <ul class="clearfix">
                                                <li>
                                                  <a href="#" class="sprite sprite5 sprite-user_icon_pq" style="padding: 0">Perfil</a>
                                                </li>

                                                <li>
                                                  <a href="#" class="perfil-porcentagem" style="padding: 0; font-size: 12px">75%</a>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                          <div class="box-interesse clearfix no-margin" style="position: relative; overflow-x: hidden">
                                            <div class="usuario p75 clearfix small" style="position: relative; top: 2px; left: 15px; width: 50px !important">
                                                <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                                            </div>
                                            <div class="user-details peq clearfix" style="float: left;width: 100px;padding: 0;margin-left: 27px;margin-top: 9px;">
                                              <h3 class="usr-name">George Firmino</h3>
                                              <ul class="clearfix">
                                                <li>
                                                  <a href="#" class="sprite sprite5 sprite-user_icon_pq" style="padding: 0">Perfil</a>
                                                </li>

                                                <li>
                                                  <a href="#" class="perfil-porcentagem" style="padding: 0; font-size: 12px">75%</a>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                          <div class="box-interesse clearfix no-margin" style="position: relative; overflow-x: hidden">
                                            <div class="usuario p75 clearfix small" style="position: relative; top: 2px; left: 15px; width: 50px !important">
                                                <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
                                            </div>
                                            <div class="user-details peq clearfix" style="float: left;width: 100px;padding: 0;margin-left: 27px;margin-top: 9px;">
                                              <h3 class="usr-name">George Firmino</h3>
                                              <ul class="clearfix">
                                                <li>
                                                  <a href="#" class="sprite sprite5 sprite-user_icon_pq" style="padding: 0">Perfil</a>
                                                </li>

                                                <li>
                                                  <a href="#" class="perfil-porcentagem" style="padding: 0; font-size: 12px">75%</a>
                                                </li>

                                              </ul>
                                            </div>
                                          </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-green"></td>
                                        <td class="bgr-green"></td>
                                        <td class="bgr-green"></td>
                                        <td class="bgr-green"></td>
                                    </tr>
                                    <tr area-btn="iniciar">
                                        <td class="bgr-white top-btn" >
                                          <div class="box-expand shadow" id="iniciar">
                                              <i class="sprite sprite-iniciar_bloco"></i>
                                              <p class="normal no-margin-bottom">
                                                  Você está no BLOCO 1 de <br/>
                                                  (nome da matéria).
                                              </p>
                                              <div class="left clearfix cronometro" style="width: 230px;">
                                                  <p class="normal" style="text-align: left;width: 94px;font-size: 11px;text-transform: uppercase;font-weight: 400;float: left !important;margin-top: 16px;margin-bottom: 0; margin-left: 17px;">
                                                      Iniciar Estudo
                                                  </p>
                                                  <ul class="clearfix left relative option-question no-margin">
                                                      <li class="clearfix bottom">
                                                          <a class="sprite sprite4 sprite-play_app"></a>
                                                      </li>
                                                      <li class="clearfix bottom">
                                                          <a class="sprite sprite4 sprite-stop_app"></a>
                                                      </li>
                                                  </ul>

                                                  <ul class="clearfix center relative option-question no-margin">
                                                      <li class="clearfix bottom">
                                                          <a class="sprite sprite4 sprite-relogio_app"></a>
                                                      </li>
                                                      <li class="clearfix bottom">
                                                          <span style="color: #1e9ec5; font-size: 19px !important">00:00:00</span>
                                                      </li>
                                                  </ul>


                                              </div>
                                              <button class="btn btn-ignorar tresQuartos center" style="background-color: #c40000; position: relative; top: 17px;">Marcar fim do bloco</button>
                                          </div>
                                        </td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                        <p>
                                          nome do anunciante
                                          <br />
                                          www.enderecoanunciantes.com.br
                                        </p>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn btn-oceanblue half center">Anuncio</button>
                                        <p>
                                          nome do anunciante
                                          <br />
                                          www.enderecoanunciantes.com.br
                                        </p>

                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares" align="center">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-dadm clearfix left">
                            <span class="bluetitle center-align">DADM</span>
                            <ul>
                                <li area-btn="stats" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-stats_app"></i></a>
                                    <div class="box-expand shadow" id="stats">
                                        <p class="normal">
                                            Você está no BLOCO 1 de (nome da matéria)
                                            <br>
                                            <br> SEU NÍVEL DE CONEHCIMENTO EM [NOME DA MATÉRIA] É {NÍVEL}. SE VOCÊ CONSIDERA QUE JÁ EVOLUIU NOS ESTUDOS, PODERÁ ATUALIZAR ESTE NÍVEL
                                        </p>
                                        <button class="btn bgr-oceanblue tresQuartos center">Atualizar</button>
                                    </div>
                                </li>
                                <li area-btn="professor" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-material_app"></i></a>
                                    <div class="box-expand shadow" id="professor">
                                        <span class="bluetitle">Indicação de material</span>
                                        <p class="normal">
                                            Procurando um bom material de estudo para (nome da matéria)?
                                            <br>
                                            <br> Que tal este?
                                        </p>
                                        <p style="color: gray">
                                            <b>Título - nome do curso anunciado</b>
                                            <br> texto cadastrado pelo anunciante pode ocupar até 2 linhas.
                                        </p>
                                        <button class="btn bgr-oceanblue half center">Anuncio</button>
                                    </div>
                                </li>
                                <li area-btn="material" style="position: relative">
                                    <a href="#" class="top-btn"><i class="sprite sprite4 sprite-professor_app"></i></a>
                                    <div class="box-expand shadow" id="material">
                                        <span class="bluetitle">Professores de [nome da matéria]</span>
                                        <p class="normal">
                                            Estes são os professores de [nome da matéria] que fazem parte da nossa rede. Conecte-se e evolua cada vez mais nos seus estudos!
                                        </p>
                                        <div class="box-interesse clearfix overflow">
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="user-details">
                                                <div class="usr-img-status clearfix left">
                                                    <div class="usr-alert">10</div>
                                                    <div class="c100 p75 small">
                                                        <span class="usr-img" style="background-image: url('../img/user.png');"></span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="usr-name">George Firmino</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#" class="sprite sprite4 sprite-circle">Perfil</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="perfil-porcentagem">75%</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box-squares clearfix left">
                                <table class="squares">
                                    <tr class="border-black">
                                        <td class="bgr-yellow"></td>
                                        <td class="bgr-yellow"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                    <tr>
                                        <td class="bgr-white"></td>
                                        <td class="bgr-white"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-interesse clearfix left grid_12 overflow no-margin-left">
                            <table class="table-professor background-white table-modal-ciclo">
                                <tr class="topo">
                                    <th class="align-left">Matéria</th>
                                    <th>Total de horas</th>
                                    <th>Estudadas</th>
                                    <th>Teoria</th>
                                    <th>Revisao</th>
                                    <th>Questões</th>
                                    <th>Atingido</th>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                                <tr class="linha">
                                    <td class="align-left">DAD</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>5.68%</td>
                                </tr>
                            </table>
                        </div>
                        <div class="box-interesse clearfix box-resumo grid_7 no-margin" style="width: 465px !important">
                            <span class="bluetitle">Resumo do ciclo 01</span>
                            <div class="left grid_4 clearfix no-margin-left" style="width: 245px !important">
                                <div class="detail-materia clearfix">
                                    <div class="detail-left left bgr-materias">Matérias<div class="arrow-right border-materias"></div></div>
                                    <div class="detail-right left">10</div>
                                </div>
                                <div class="detail-materia clearfix" style="">
                                    <div class="detail-left left bgr-total" style="padding: 10px 32px 10px 23px">Total de horas<div class="border-total arrow-right"></div></div>
                                    <div class="detail-right left">10</div>
                                </div>
                                <div class="detail-materia clearfix" style="">
                                    <div class="detail-left left bgr-horas" style="padding: 10px 18px 10px 23px">Horas Estudadas<div class="border-horas arrow-right"></div></div>
                                    <div class="detail-right left">10</div>
                                </div>
                                <div class="detail-materia clearfix" style="width: 243px;">
                                    <div class="detail-right right no-margin-right">10</div>
                                    <div class="detail-left right bgr-teoria no-margin-right" style="padding: 10px 66px 10px 23px">Teoria<div class="border-teoria arrow-right"></div></div>
                                </div>
                                <div class="detail-materia clearfix" style="width: 243px;">
                                    <div class="detail-right right no-margin-right">10</div>
                                    <div class="detail-left right bgr-revisao no-margin-right" style="padding: 10px 57px 10px 23px">Revisão<div class="border-revisao arrow-right"></div></div>
                                </div>
                                <div class="detail-materia clearfix" style="width: 243px;">
                                    <div class="detail-right right no-margin-right">10</div>
                                    <div class="detail-left right bgr-questao no-margin-right" style="padding: 10px 53px 10px 23px">Questão<div class="border-questao arrow-right"></div></div>
                                </div>
                            </div>

                            <div class="left grid_4 clearfix no-margin-right" style="width: 184px !important; margin-bottom: 130px !important">
                                <div class="grafico-porcentagem center">
                                  <div class="cento_25"></div>
                                  <div class="num_cento" style="color: #9acd00">25%</div>
                                </div>
                                <div class="grafico-porcentagem center" style="margin-top: 20px !important; background-color: #9acd00">
                                  <div class="meio-circulo" style="height: 60px;    width: 54px;    border-radius: 0px 90px 90px 0;    -moz-border-radius: 90px 90px 0 0;    -webkit-border-radius: 90px 0px 0 0px;    background: green;">
                                  </div>
                                </div>

                            </div>
                            <div class="div-compartilhar clearfix">
                              <span style="position: absolute;bottom: 124px;width: 154px;right: 255px;">
                                compartilhe seu progresso
                              </span>
                              <ul class="redes-sociais clearfix" style="position: absolute;bottom: 100px;right: 120px;">
                                <li>
                                  <a href="#" class="sprite sprite4 sprite-facebook">Facebook</a>
                                </li>
                                <li>
                                  <a href="#" class="sprite sprite4 sprite-twitter">Twitter</a>
                                </li>
                                <li>
                                  <a href="#" class="sprite sprite4 sprite-in">LinkeIn</a>
                                </li>
                                <li>
                                  <a href="#" class="sprite sprite4 sprite-google">Google</a>
                                </li>
                              </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="overlay block modal-inicio">
              <div class="box-feed clearfix shadow">
                <i class="sprite sprite2 sprite-close_blue"></i>
                <span class="bigtitle red center">ATENÇÃO</span>
                <p class="normal">
                  Este ciclo de estudo foi desenvolvido para você de forma personalizada e de acordo com os parâmetros elaborados por especialistas em concursos, tudo com base no seu perfil e no seu ritmo de estudos.
Assim, seu ciclo representa a melhor técnica de estudos para você.
Porém, é permitido que você faça a readequação da quantidade de horas que será destinada às matérias em cada linha, caso deseje adptar sua preparação.
                </p>
                <p class="warning">
                  Após salvar a sua escolha, uma vez confirmado o ciclo, não podera mais ser editado.
                </p>
                <div class="box-interesse clearfix left grid_7 no-margin-left">
                    <table class="table-professor table-modal">
                        <tr class="topo">
                            <th class="align-left">Matéria</th>
                            <th>Horas por linha</th>
                            <th>Alterar para</th>

                        </tr>
                        <tr class="linha">
                            <td class="align-left">Nome da matéria 1</td>
                            <td>2</td>
                            <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                        <tr class="linha">
                          <td class="align-left">Nome da matéria 1</td>
                          <td>2</td>
                          <td><input type="text" class="input-alterar sprite sprite-img_overlay" /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-interesse clearfix grid_4 no-margin-right">
                    <p>
                      Caso opte por modificar seu ciclo, você tem <br /> <span class=middletitle>18</span> horas <br /> a serem distribuidas
                    </p>
                    <button class="btn btn-oceanblue quarter center no-uppercase">Confirmar ciclo com <br />MINHAS MODIFICAÇÕES</button>
                    <button class="btn btn-ok quarter center no-uppercase">Confirmar ciclo <br />ORIGINAL JÁ GERADO</button>

                </div>
              </div>
            </div>

            <!-- end .grid_6 -->

        </div>
        <!-- end .container_12 -->
        <?php include('scripts.html'); ?>
</body>

</html>
