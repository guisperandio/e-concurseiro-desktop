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
<?php include('topo.html'); ?>

<div class="container_16" id="wrapper-interna">
  <?php include('coluna_esquerda.html'); ?>
  <div class="grid_15" id="content-middle">
    <div class="publicacao clearfix">
      <h4>O que encontro nesta página?</h4>
      <p>
        Em INDICAÇÕES / BIBLIOGRAFIA você poderá pesquisar os materiais de estudo mais indicados pelos concurseiros.<br /> Você também pode indicar livros, cursos ou vídeo aulas para determinada matéria ou para um concurso específico.
      </p>

    </div>

    <div class="box-feed clearfix block no-padding" id="published-indicacao">
      <fieldset class="clearfix">
        <span class="title-text" style="margin: 14px 0">ENCONTRAR/INDICAR MATERIAIS POR:</span>
        <div class="box-bibliografia left" style="width: 555px">
          <span class="label center-text">Concursos</span>
          <input type="text"  placeholder="Texto sendo digitado" class="interesses" style="margin-right: 10px; margin-bottom: 18px; padding: 10px; width: 467px" /> <button class="btn bgr-oceanblue">OK</button>
          <span class="label center-text">MATÉRIA</span>
          <input type="text"  placeholder="Texto sendo digitado" class="interesses" style="margin-right: 10px; margin-bottom: 18px; padding: 10px; width: 467px" /> <button class="btn bgr-oceanblue">OK</button>
          <span class="label center-text">BUSCAR UM MATERIAL ESPECÍFICO</span>
          <input type="text"  placeholder="Texto sendo digitado" class="interesses" style="margin-right: 10px; margin-bottom: 18px; padding: 10px; width: 467px" /> <button class="btn bgr-oceanblue">OK</button>
        </div>
        <div class="box-bibliografia left" style="width: 363px; margin-top: 14px">
          <div class="box-feed clearfix tour-visitante">
            <span class="title-text center-text">INDICAÇÕES ESPECÍFICAS PARA O SEU CONCURSO:</span>
            <p>
              Analise rapidamente os livros, cursos em PDF ou vídeoaulas mais recomendados para que você se torne
            </p>
            <span class="title-text green-title center-text" style="margin: 20px 0">NOME DO CONCURSO DOS SONHOS</span>
            <button class="btn bgr-oceanblue center">ACESSAR INDICAÇÕES</button>
          </div>
        </div>
      </fieldset>
      <fieldset class="clearfix">

        <span class="title-text" style="margin: 20px 0">OS CONCURSEIROS RECOMENDAM - NOME DO CONCURSO OU MATÉRIA</span>

        <ul class="abas-bibliografia clearfix left">
          <li class="">
            <a href="#">MATERIAIS MAIS INDICADOS</a>
          </li>
          <li class="">
            <a href="#">REFERÊNCIAS DE PROFESSORES/AUTORES</a>
          </li>
          <li class="active">
            <a href="#">INSTITUIÇÕES MAIS RECOMENDADAS</a>
          </li>
        </ul>

        <div class="box-aba clearfix left full">
          <div class="box-interesse clearfix half left">
            <span class="title-text">LISTAR INSTITUIÇÕES POR:</span>
            <ul id="expand-list" class="clearfix no-margin">
              <li>
                <a href="#" class="expand">TODOS</a>
              </li>
              <li>
                <a href="#" class="list expand">CURSOS EM PDF</a>
              </li>
              <li>
                <a href="#" class="list expand">LIVROS</a>
              </li>
              <li>
                <a href="#" class="list expand">VIDEOAULAS</a>
              </li>
            </ul>
          </div>

          <div class="box-interesse clearfix half right">
            <span class="title-text">ORDENAR POR:</span>
            <ul id="expand-list" class="clearfix no-margin">
              <li>
                <a href="#" class="expand">AVALIAÇÃO MÉDIA</a>
              </li>
              <li>
                <a href="#" class="list expand">PONTUAÇÃO</a>
              </li>
              <li>
                <a href="#" class="list expand">INDICAÇÕES</a>
              </li>
            </ul>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="desc-b" style="width: 648px;">
              <span class="title-text">Nome da instituição</span>
              <p>
                <b>Tipos de materiais:</b> Cursos em PDF, Videoaulas
              </p>
              <p style="margin-bottom: 26px !important">
                <b>Site:</b> www.atitudeconcursos.com.br
              </p>
              <div class="ranking-box clearfix left" style="    margin: 0 auto !important;    position: absolute;    left: 0;    right: 0;    width: 531px;    bottom: 8px;">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
            </div>
            <div class="btns-b">
              <button class="btn bgr-gray left">VER AVALIAÇÕES</button>
            </div>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="desc-b" style="width: 648px;">
              <span class="title-text">Nome da instituição</span>
              <p>
                <b>Tipos de materiais:</b> Cursos em PDF, Videoaulas
              </p>
              <p style="margin-bottom: 26px !important">
                <b>Site:</b> www.atitudeconcursos.com.br
              </p>
              <div class="ranking-box clearfix left" style="    margin: 0 auto !important;    position: absolute;    left: 0;    right: 0;    width: 531px;    bottom: 8px;">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
            </div>
            <div class="btns-b">
              <button class="btn bgr-gray left">VER AVALIAÇÕES</button>
            </div>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="desc-b" style="width: 648px;">
              <span class="title-text">Nome da instituição</span>
              <p>
                <b>Tipos de materiais:</b> Cursos em PDF, Videoaulas
              </p>
              <p style="margin-bottom: 26px !important">
                <b>Site:</b> www.atitudeconcursos.com.br
              </p>
              <div class="ranking-box clearfix left" style="    margin: 0 auto !important;    position: absolute;    left: 0;    right: 0;    width: 531px;    bottom: 8px;">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
            </div>
            <div class="btns-b">
              <button class="btn bgr-gray left">VER AVALIAÇÕES</button>
            </div>
          </div>

          <span class="title-text" style="margin-left: 97px; margin-top: 10px; color: #1e9ec5; width: 50% !important; font-weight: 400 !important">INDICAÇÃO PATROCINADA</span>
          <div class="box-indicacao clearfix patrocinio">
            <div class="img-b">

            </div>
            <div class="desc-b" >
              <span class="title-text">Nome do livro, curso em PDF ou VIDEOAULA patrocinado</span>
              <p>
                Texto cadastrado pelo anunciante para descrever o curso anunciado ou o próprio site
o texto é livre, mas deve quantidade limitada de carcatres para ocupar até 2 linhas.
              </p>

              <button class="btn bgr-clear left no-padding-left" style="color: #1a678f">NOME DO ANUNCIANTE</button>
              <button class="btn bgr-darkyellow right" style="width: 150px ">VEJA AQUI</button>
            </div>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="desc-b" style="width: 648px;">
              <span class="title-text">Nome da instituição</span>
              <p>
                <b>Tipos de materiais:</b> Cursos em PDF, Videoaulas
              </p>
              <p style="margin-bottom: 26px !important">
                <b>Site:</b> www.atitudeconcursos.com.br
              </p>
              <div class="ranking-box clearfix left" style="    margin: 0 auto !important;    position: absolute;    left: 0;    right: 0;    width: 531px;    bottom: 8px;">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
            </div>
            <div class="btns-b">
              <button class="btn bgr-gray left">VER AVALIAÇÕES</button>
            </div>
          </div>


        </div>


      </fieldset>

    </div>

  </div>
  <!-- end .grid_6 -->



  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
