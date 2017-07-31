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

                <div class="box-interesse">
                    <div class="box-feed clearfix detalhes-curso">
                        <ul id="expand-list" class="clearfix expand-big green">
                            <li>
                                <a href="#" class="expand">Aulas</a>
                            </li>
                            <li>
                                <a href="#" class="list expand">Nome do Curso</a>
                            </li>
                        </ul>
                        <div class="box-content">
                            <div class="feed-text clearfix">
                                <i class="sprite sprite2 sprite-forum right"></i>
                                <i class="sprite sprite2 sprite-editar_videos right"></i>
                                <i class="sprite sprite2 sprite-ver_videos right"></i>
                                <i class="sprite sprite2 sprite-excluir_aula right"></i>
                                <i class="sprite sprite2 sprite-baixar_aula right"></i>

                            </div>

                            <div class="feed-text clearfix">

                                <div class="curso-desc clearfix">

                                    <div class="box-cursos">
                                        <div class="nome-option clearfix">
                                            <span class="curso-title left">Nome da aula</span>
                                            <span class="disponibilidade left disp-ok">Disponível</span>
                                            <div class="options right">
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download_del"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play_edit"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-forum_blue"></i><span class="alert-icon">10</span></div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <span class=""><b>Prevista para:</b> 00/00/0000</span>
                                            <span class=""><b>Liberada em:</b> 00/00/0000</span>
                                            <span class=""><b>Atualizada em:</b> 00/00/0000</span>
                                        </div>
                                    </div>
                                    <div class="box-cursos">
                                        <div class="nome-option clearfix">
                                            <span class="curso-title left">Nome da aula</span>
                                            <span class="disponibilidade left disp-ok">Disponível</span>
                                            <div class="options right">
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download_del"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play_edit"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-forum_blue"></i><span class="alert-icon">10</span></div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <span class=""><b>Prevista para:</b> 00/00/0000</span>
                                            <span class=""><b>Liberada em:</b> 00/00/0000</span>
                                            <span class=""><b>Atualizada em:</b> 00/00/0000</span>
                                        </div>
                                    </div>
                                    <div class="box-cursos expirados">
                                        <div class="nome-option clearfix">
                                            <span class="curso-title left">Nome da aula</span>
                                            <span class="disponibilidade left disp-late">Atraso de XX dias</span>
                                            <div class="options right">
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download_del"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play_edit"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-forum_blue"></i><span class="alert-icon">10</span></div>
                                            </div>
                                        </div>
                                        <div class="details clearfix">
                                            <span class=""><b>Prevista para:</b> 00/00/0000</span>
                                            <span class=""><b>Atualizada em:</b> 00/00/0000</span>
                                        </div>
                                    </div>
                                    <div class="box-cursos aguardar">
                                        <div class="nome-option clearfix">
                                            <span class="curso-title left">Nome da aula</span>
                                            <span class="disponibilidade left disp-aguardar">Aguardar Cronograma</span>
                                            <div class="options right">
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-download_del"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-play_edit"></i></div>
                                                <div class="clearfix"><i class="sprite sprite2 sprite-forum_blue"></i><span class="alert-icon">10</span></div>
                                            </div>
                                        </div>
                                        <div class="details clearfix">
                                            <span class=""><b>Prevista para:</b> 00/00/0000</span>
                                            <span class=""><b>Atualizada em:</b> 00/00/0000</span>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
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
            <!-- <div class="box-feed clearfix shadow meus-cursos-aulas">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <span class="smalltitle">NOME DO VIDEO</span>
            <iframe width="960" height="582" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
            <div class="more-videos clearfix">
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
            </div>
          </div> -->

            <div class="box-feed clearfix shadow meus-cursos-editar">
                <i class="sprite sprite2 sprite-close_blue"></i>
                <ul id="expand-list" class="clearfix">
                    <li>
                        <a href="#" class="expand">Editar Videos</a>
                    </li>
                    <li>
                        <a href="#" class="list expand">Nome da Aula</a>
                    </li>
                    <li>
                        <a href="#" class="list expand">Nome do Curso</a>
                    </li>
                </ul>
                <div id="editar-videos">
                    <span class="title-text">Título do Video</span>
                    <input type="text" />
                    <span class="title-text">URL</span>
                    <input type="text" />
                    <button class="btn btn-patblue half" style="margin: 20px 0"><i class="sprite sprite-youtube"></i><span class="menu-name">Adicionar Video</span></button>
                    <div class="video-add left clearfix">
                        <input type="text" placeholder="introducao.mp4" />
                        <div class="video-btns clearfix">
                            <i class="sprite sprite-video_edit"></i>
                            <i class="sprite sprite-video_del"></i>
                        </div>
                    </div>
                    <div class="video-add left clearfix">
                        <input type="text" placeholder="introducao.mp4" />
                        <div class="video-btns clearfix">
                            <i class="sprite sprite-video_edit"></i>
                            <i class="sprite sprite-video_del"></i>
                        </div>
                    </div>
                    <button class="btn bgr-oceanblue half" style="margin: 20px 0"><span class="menu-name">Salvar</span></button>
                </div>
            </div>



        </div>

        <div class="overlay block">
            <div class="box-feed clearfix shadow meus-cursos-aulas">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <span class="smalltitle">NOME DO VIDEO</span>
            <iframe width="960" height="582" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
            <div class="more-videos clearfix">
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
              <div class="box-video">
                <iframe width="160" height="100" src="https://www.youtube.com/embed/UVJqSlNBGO4" frameborder="0" allowfullscreen></iframe>
                <span class="smalltitle">NOME DO VIDEO</span>
              </div>
            </div>
          </div>

        </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
