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
</head>
<body>
<?php include('topo_resolucao.html'); ?>

<div class="container_16 app-pages pages-interna">

  <div class="grid_10 clearfix no-margin-left" id="content-middle" style="width: 622px !important">
    <div class="box-feed clearfix box-app estatisticas-app" style="margin-top: 50px;">
      <div class="box-interesse clearfix no-margin">

        <h2 class="align-left">Estatísticas</h2>
        <ul id="expand-list" class="clearfix expand-app">
          <li>
            <a href="#" class="expand">Você</a>
          </li>
          <li>
            <a href="#" class="list expand">Médias dos Usuários</a>
          </li>
          <li>
            <a href="#" class="list expand">Média Concorrentes Diretos</a>
          </li>
          <li>
            <a href="#" class="list expand">Média amigos</a>
          </li>
        </ul>

      </div>

      <div class="box-interesse clearfix no-margin">
        <ul class="desafios clearfix">
          <li class="ativos">
            <a href="#" class="active">Por matéria</a>
          </li>
          <li class="abertos">
            <a href="#">por periodo</a>
          </li>
          <li class="expirados">
            <a href="#">por banca</a>
          </li>
          <li class="expirados">
            <a href="#">por caderno</a>
          </li>
        </ul>

        <div id="box-estatistica" class="box-feed shadow clearfix">
          <div class="calendar calendar-inicio left" style="margin-left: 40px">
            <label>Data Inicial</label>
            <input type="date" />
          </div>
          <div class="calendar calendar-inicio left">
            <label>Data Final</label>
            <input type="date" />
          </div>
          <ul class="clearfix left relative share-options">
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
          <span class="bluetitle no-transform clearfix" style="margin-bottom: 15px; margin-top: 12px"><i class="sprite sprite-pdf_pq right"></i><span class="menu-name right" style="color: #1e9ec5; font-size: 10px; font-weight: 400; position: relative; top: 7px">GERAR RELATÓRIO EM </span></span>
          <div class="box-estatisticas clearfix">
            <span class="bluetitle">Nome da matéria</span>
            <hr />
            <i class="sprite sprite-seta_blue"></i>
            <div class="box-feed clearfix">
              <div class="detail-materia clearfix">
                  <div class="detail-left left bgr-materias" style="padding: 9px 124px 8px 23px;">Quantidade de questões resolvidas<div class="arrow-right border-materias"></div></div>
                  <div class="detail-right left" style="color: #0a4478">58 Questões</div>
              </div>
              <div class="detail-materia clearfix">
                  <div class="detail-left left bgr-green_acertos" style="padding: 9px 224px 8px 23px;">Quantidade de acertos<div class="arrow-right border-green_acertos"></div></div>
                  <div class="detail-right left" style="color: #7dc900">15 Questões</div>
              </div>
              <div class="detail-materia clearfix">
                  <div class="detail-left left bgr-red_erros" style="padding: 9px 242px 8px 23px;">Quantidade de erros<div class="arrow-right border-red_erros"></div></div>
                  <div class="detail-right left" style="color: #d70604">15 Questões</div>
              </div>
              <div class="detail-materia clearfix">
                  <div class="detail-left left bgr-blue_desempenho" style="padding: 9px 143px 8px 23px;">% De desempenho (acertos/total)<div class="arrow-right border-blue_desempenho"></div></div>
                  <div class="detail-right left" style="padding: 10px 60px 7px 70px; color: #42aece">18%</div>
              </div>
            </div>
          </div>
          <div class="box-estatisticas clearfix">
            <span class="bluetitle">Nome da matéria</span>
            <hr />
            <i class="sprite sprite-seta_blue deg180"></i>
          </div>
          <div class="box-estatisticas clearfix">
            <span class="bluetitle">Nome da matéria</span>
            <hr />
            <i class="sprite sprite-seta_blue deg180"></i>
          </div>
          <div class="box-estatisticas clearfix">
            <span class="bluetitle">Nome da matéria</span>
            <hr />
            <i class="sprite sprite-seta_blue deg180"></i>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div id="estatisticas-app_right" class="grid_10 clearfix no-margin-right right" style="width: 440px !important; position: relative; right: 70px">
    <div class="box-feed clearfix">
      <button class="btn bgr-newyellow btn-questoes">
        <i class="sprite sprite5 sprite-questoes_fav"></i>
        <span class="menu-name">Questões<br />Favoritas</span>
      </button>

      <button class="btn bgr-newyellow btn-ranking_concurseiros right no-margin-right">
        <i class="sprite sprite5 sprite-ranking_concurseiros"></i>
        <span class="menu-name" style="margin-top: 16px; display: block;">Leaderboard</span>
      </button>
    </div>


    <div class="box-feed clearfix">
      <div class="box-infos clearfix left">
        <div class="container_circle">
          <div class="dados_container">
            <span class="dado">235</span>
            <span class="line-division"></span>
          </div>
          <div class="arrow-down" style="border-top-color: #0a4478"></div>
        </div>
        <br /><br  />
        <button class="btn btn-oceanblue full">Questões <br />Respondidas</button>
      </div>

      <div class="box-infos clearfix left no-margin-right">
        <div class="container_circle bgr-green_acertos">
          <div class="dados_container">
            <span class="dado" style="color: #7dc900">57</span>
            <span class="line-division"></span>
          </div>
          <div class="arrow-down" style="border-top-color: #7dc900"></div>
        </div>
        <br /><br  />
        <button class="btn bgr-green_acertos full">Questões <br />Corretas</button>
      </div>

      <div class="box-infos clearfix left">
        <div class="container_circle bgr-red_erros">
          <div class="dados_container">
            <span class="dado" style="color: #d70604">89</span>
            <span class="line-division"></span>
          </div>
          <div class="arrow-down" style="border-top-color: #d70604"></div>
        </div>
        <br /><br  />
        <button class="btn bgr-red_erros full">Questões <br />Erradas</button>
      </div>

      <div class="box-infos clearfix left no-margin-right">
        <div class="container_circle bgr-blue_desempenho">
          <div class="dados_container">
            <span class="dado" style="color: #42aece">42%</span>
            <span class="line-division"></span>
          </div>
          <div class="arrow-down" style="border-top-color: #42aece"></div>
        </div>
        <br /><br  />
        <button class="btn bgr-blue_desempenho full" style="padding: 21px 10px;">Desempenho</button>
      </div>

      <button class="btn bgr-oceanblue full">Voltar</button>
    </div>
  </div>




  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
