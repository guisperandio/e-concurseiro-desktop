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
<link rel="stylesheet/less" type="text/css" href="css/resolucao_app.less">
<style>
  .subtitle{
    font-size: 18px;
    text-transform: none;
  }
  .content-title{ color: #1e9ec5; margin-top: 0 }
  .tabela-tipo2 .fundo-azul{
    background-color: #fff;
  }
  .tabela-tipo2 .fundo-azul .coluna{
    color: #1a678f;
    
  }
  .tabela-tipo2 .linha .coluna{
    padding: 10px 22px 10px 0 
  }
  #resolucao .total-bar{
    left: 100px;
  }
  .share-options{
    margin-bottom: 0
  }
</style>
</head>
<body>
<?php include('topo_resolucao.html'); ?>

<div class="container_16 app-pages pages-interna">

  <div class="grid_16 center clearfix" id="resolucao" style="margin-top: 20px !important" >
    <div class="content clearfix">



    <div class="main-content clearfix padding left" style="width: 50%">

      <h2 class="content-title full block text-left">Caderno de questões - Nome do simulado</h2>


      <p class="center-text text-app">
        [nome do usuário],  você concluiu a resolução de 100 questões!
      </p>

      <div class="box-graphs clearfix">
        <div class="total-bar clearfix left">
          <div class="green-bar clearfix left" style="width: 80%;">

          </div>
          <div class="red-bar clearfix left" style="width: 20%;">

          </div>

        </div>
        <span class="text-green right relative" style="top: 4px">80 corretas - 80%</span>
        <br>
        <span class="text-red right relative" style="top: 4px">20 erradas - 20%</span>

      </div>

      <div class="clearfix margin-top margin-bottom">
        <span class="subtitle no-transform">Conquistas</span>
        <p class="text-app text-gray margin-top">
          1.250 pontos<br />
          Nome da medalha conquistada<br />
          Nome da medalha 2.
        </p>
      </div>

      <div class="clearfix margin-top margin-bottom">
        <span class="subtitle">Cadernos anteriores</span>
        <p class="text-app text-gray margin-top">
          00/00/0000 <b>[nome do caderno criado pelo usuário]</b><br />
          00/00/0000 <b>[nome do caderno criado pelo usuário]</b>
        </p>
      </div> 
  </div>
  <div class="main-content clearfix right no-margin-right" style="width: 40%">
    <div class="clearfix margin-top margin-bottom relative">
          <i class="sprite sprite-pdf_pq absolute" style="top: 10px; right: 0"></i>
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
        <p class="block full left" style="font-size: 13px; color: #1e9ec5">Compartilhe seu desempenho e aumente seus pontos</p>
        <p class="block full left" style="font-size: 15px; color: #696969">00/00/0000</p>
        <span class="subtitle block full left">Desempenho por matéria</span>
        <div class="tabela-tipo2 clearfix margin-top">
          <div class="tabela-container clearfix">

            <div class="linha-topo clearfix fundo-azul">
              <div class="coluna">
                Matérias
              </div>
              <div class="coluna">
                Questões
              </div>
              <div class="coluna">
                Teoria
              </div>
              <div class="coluna">
                Horas
              </div>
            </div>
            <div class="linha odd clearfix">
              <div class="coluna">
                Português
              </div>
              <div class="coluna">
                20
              </div>
              <div class="coluna">
                10
              </div>
              <div class="coluna">
                20
              </div>
            </div>
            <div class="linha even clearfix">
              <div class="coluna">
                MATEMÁTICA FINANCEIRA
              </div>
              <div class="coluna">
                20
              </div>
              <div class="coluna">
                10
              </div>
              <div class="coluna">
                20
              </div>
            </div>
            <div class="linha odd clearfix">
              <div class="coluna">
                Português
              </div>
              <div class="coluna">
                20
              </div>
              <div class="coluna">
                10
              </div>
              <div class="coluna">
                20
              </div>
            </div>
            <div class="linha even clearfix">
              <div class="coluna">
                MATEMÁTICA FINANCEIRA
              </div>
              <div class="coluna">
                20
              </div>
              <div class="coluna">
                10
              </div>
              <div class="coluna">
                20
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
