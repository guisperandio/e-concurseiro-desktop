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
<style>
  .title-text{
    font-weight: bold;
    font-size: 14px;
  }
  .professor-overlay{
    border-radius: 100px;
    height: 96px !important;
  }
  .overlay .box-comment hr{
        background-color: #ccc;
        border-color: #ccc;
        color: #ccc;
  }
  .overlay .title-text{
    color: #1e9ec5;
  }
  .overlay .bibliografia .box-indicacao .desc-b .title-text, .overlay .box-indicacao .desc-b p{
    color: #004570 !important;
  }

</style>
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
          <li class="active">
            <a href="#">MATERIAIS MAIS INDICADOS</a>
          </li>
          <li class="">
            <a href="#">REFERÊNCIAS DE PROFESSORES/AUTORES</a>
          </li>
          <li class="">
            <a href="#">INSTITUIÇÕES MAIS RECOMENDADAS</a>
          </li>
        </ul>

        <div class="box-aba clearfix left full">
          <div class="box-interesse clearfix half left">
            <span class="title-text">LISTAR:</span>
            <ul id="expand-list" class="clearfix no-margin">
              <li>
                <a href="#" class="expand active">TODOS</a>
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
            <div class="img-b">

            </div>
            <div class="desc-b">
              <span class="title-text">Nome do livro cadastrado</span>
              <p>
                Nome do Professor/Autor
              </p>
              <p>
                Nome da Instituição
              </p>
              <div class="ranking-box clearfix left">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
              <button class="btn bgr-gray left">COMENTÁRIOS</button>
              <button class="btn bgr-gray left">CONCURSOS RELACIONADOS</button>
            </div>
            <div class="btns-b">
              <button class="btn bgr-oceanblue left">INDICAR MATERIAL</button>
              <button class="btn btn-oceanblue left">AVALIAR MATERIAL</button>
              <button class="btn bgr-darkgreen left">COMPRAR ESTE MATERIAL</button>
            </div>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="img-b">

            </div>
            <div class="desc-b">
              <span class="title-text">Nome do livro cadastrado</span>
              <p>
                Nome do Professor/Autor
              </p>
              <p>
                Nome da Instituição
              </p>
              <div class="ranking-box clearfix left">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
              <button class="btn bgr-gray left">COMENTÁRIOS</button>
              <button class="btn bgr-gray left">CONCURSOS RELACIONADOS</button>
            </div>
            <div class="btns-b">
              <button class="btn bgr-oceanblue left">INDICAR MATERIAL</button>
              <button class="btn btn-oceanblue left">AVALIAR MATERIAL</button>
              <button class="btn bgr-darkgreen left">COMPRAR ESTE MATERIAL</button>
            </div>
          </div>

          <div class="box-indicacao clearfix">
            <div class="posicao-b">
              1º
            </div>
            <div class="img-b">

            </div>
            <div class="desc-b">
              <span class="title-text">Nome do livro cadastrado</span>
              <p>
                Nome do Professor/Autor
              </p>
              <p>
                Nome da Instituição
              </p>
              <div class="ranking-box clearfix left">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
              <button class="btn bgr-gray left">COMENTÁRIOS</button>
              <button class="btn bgr-gray left">CONCURSOS RELACIONADOS</button>
            </div>
            <div class="btns-b">
              <button class="btn bgr-oceanblue left">INDICAR MATERIAL</button>
              <button class="btn btn-oceanblue left">AVALIAR MATERIAL</button>
              <button class="btn bgr-darkgreen left">COMPRAR ESTE MATERIAL</button>
            </div>
          </div>

          <span class="title-text" style="margin-left: 97px; margin-top: 10px; color: #1e9ec5; width: 50% !important; font-weight: 400 !important">INDICAÇÃO PATROCINADA</span>
          <div class="box-indicacao clearfix patrocinio">
            <div class="img-b">

            </div>
            <div class="desc-b">
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
            <div class="img-b">

            </div>
            <div class="desc-b">
              <span class="title-text">Nome do livro cadastrado</span>
              <p>
                Nome do Professor/Autor
              </p>
              <p>
                Nome da Instituição
              </p>
              <div class="ranking-box clearfix left">
                <span class="left block"><b>Avaliações:</b> 45.000</span>
                <div class="rating left">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <span class="left block"><b>Pontuação:</b> 12.000</span>
                <span class="left block"><b>Indicações:</b> 15.000</span>
              </div>
              <button class="btn bgr-gray left">COMENTÁRIOS</button>
              <button class="btn bgr-gray left">CONCURSOS RELACIONADOS</button>
            </div>
            <div class="btns-b">
              <button class="btn bgr-oceanblue left">INDICAR MATERIAL</button>
              <button class="btn btn-oceanblue left">AVALIAR MATERIAL</button>
              <button class="btn bgr-darkgreen left">COMPRAR ESTE MATERIAL</button>
            </div>
          </div>


        </div>


      </fieldset>

    </div>

  </div>
  <!-- end .grid_6 -->
  <div class="overlay block">
    <div class="box-feed clearfix shadow bibliografia" style="width: 798px">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix no-padding" style="border: 0 !important;margin: 0 auto !important;float: inherit;">

        <div class="img-b">

        </div>
        <div class="desc-b">
          <span class="title-text">Nome do livro cadastrado</span>
          <p>
            Nome do Professor/Autor
          </p>
          <p>
            Nome da Instituição
          </p>
          <p class="center-text" style="margin: 20px 0 !important;">
            Este material foi comentado por 45.000 concurseiros
          </p>
          <div class="ranking-box clearfix center" style="    margin: 0 auto;
    width: 238px;
    float: none !important;">
            <span class="left block"><b>Avaliação Média:</b></span>
            <div class="rating left no-margin-right">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>

          </div>
        </div>

      </div>
      <span class="title-text" style="margin: 10px 0; display: block;">COMENTÁRIOS:</span>
      <div class="box-comment comment-0" style="background-color: #fff">
          <div class="usuario p75 clearfix small" style="position: relative">
            <div class="usr-alert">10</div>
            <span class="usr-img" style="background-image: url('img/user.png'); border-color: #fff"></span>
          </div>
          <div class="user-details peq left" style="width: 420px">
            <h3 class="usr-name left">George Firmino <i class="sprite sprite-plus_pq left" style="margin-right: 10px;"></i></h3>
            <ul class="clearfix left no-margin-top">
              <li>
                <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-lib_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="perfil-porcentagem">75%</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-medal_icon_pq">Perfil</a>
              </li>
            </ul>
          </div>

        <p class="feed block left">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
        </p>
        <hr />
      </div>
      <div class="box-comment comment-0" style="background-color: #fff">
          <div class="usuario p75 clearfix small" style="position: relative">
            <div class="usr-alert">10</div>
            <span class="usr-img" style="background-image: url('img/user.png'); border-color: #fff"></span>
          </div>
          <div class="user-details peq left" style="width: 420px">
            <h3 class="usr-name left">George Firmino <i class="sprite sprite-plus_pq left" style="margin-right: 10px;"></i></h3>
            <ul class="clearfix left no-margin-top">
              <li>
                <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-lib_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="perfil-porcentagem">75%</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-medal_icon_pq">Perfil</a>
              </li>
            </ul>
          </div>

        <p class="feed block left">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
        </p>
        <hr />
      </div>
    </div>
  </div>

  <div class="overlay block">
    <div class="box-feed clearfix shadow bibliografia" style="width: 798px">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix no-padding" style="border: 0 !important;margin: 0 auto !important;float: inherit;">

        <div class="img-b professor-overlay" style="background-image: url('img/user.png'); background-size: cover;">

        </div>
        <div class="desc-b">
          <span class="title-text">Nome do professor/autor</span>
          <p>
            <b>Matérias:</b> Direitor Tributário, Legislação Tributária Federal
          </p>
          <p>
            <b>Vínculos:</b> Atitude Concursos, Editora Ferreira, Site Geroge Firmino
          </p>
          <p class="center-text" style="margin: 20px 0 !important;">
            Este professor/autor foi avaliado por 45.000 concurseiros
          </p>
          <div class="ranking-box clearfix center" style="    margin: 0 auto;
    width: 238px;
    float: none !important;">
            <span class="left block"><b>Avaliação Média:</b></span>
            <div class="rating left no-margin-right">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>

          </div>
        </div>

      </div>
      <span class="title-text" style="margin: 10px 0; display: block;">COMENTÁRIOS:</span>
      <div class="box-comment comment-0" style="background-color: #fff">
          <div class="usuario p75 clearfix small" style="position: relative">
            <div class="usr-alert">10</div>
            <span class="usr-img" style="background-image: url('img/user.png'); border-color: #fff"></span>
          </div>
          <div class="user-details peq left" style="width: 420px">
            <h3 class="usr-name left">George Firmino <i class="sprite sprite-plus_pq left" style="margin-right: 10px;"></i></h3>
            <ul class="clearfix left no-margin-top">
              <li>
                <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-lib_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="perfil-porcentagem">75%</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-medal_icon_pq">Perfil</a>
              </li>
            </ul>
          </div>

        <p class="feed block left">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
        </p>
        <hr />
      </div>
      <div class="box-comment comment-0" style="background-color: #fff">
          <div class="usuario p75 clearfix small" style="position: relative">
            <div class="usr-alert">10</div>
            <span class="usr-img" style="background-image: url('img/user.png'); border-color: #fff"></span>
          </div>
          <div class="user-details peq left" style="width: 420px">
            <h3 class="usr-name left">George Firmino <i class="sprite sprite-plus_pq left" style="margin-right: 10px;"></i></h3>
            <ul class="clearfix left no-margin-top">
              <li>
                <a href="#" class="sprite sprite5 sprite-user_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-lib_icon_pq">Perfil</a>
              </li>
              <li>
                <a href="#" class="perfil-porcentagem">75%</a>
              </li>
              <li>
                <a href="#" class="sprite sprite5 sprite-medal_icon_pq">Perfil</a>
              </li>
            </ul>
          </div>

        <p class="feed block left">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales semper mauris, eget commodo sapien luctus sit amet. Integer vel justo mollis, pellentesque risus nec, congue enim. Mauris cursus rhoncus lectus, cursus aliquam nibh venenatis ac. Nam ut nisl egestas, lacinia elit ut, pharetra arcu. Integer vitae nibh imperdiet, ornare magna eget, rutrum leo.
        </p>
        <hr />
      </div>
    </div>
  </div>

  <div class="overlay block">
    <div class="box-feed clearfix shadow bibliografia" style="width: 798px; height: 452px;">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix no-padding" style="border: 0 !important;margin: 0 auto !important;float: inherit;">

        <div class="img-b">

        </div>
        <div class="desc-b">
          <span class="title-text">Nome do livro cadastrado</span>
          <p>
            Nome do Professor/Autor
          </p>
          <p>
            Nome da Instituição
          </p>
          <p class="center-text" style="margin: 20px 0 !important;">
            Este material foi comentado por 45.000 concurseiros
          </p>

        </div>
        <div class="ranking-box clearfix left full margin-top" style="margin-top: 20px !important">
          <span class="left block"><b>SUA AVALIAÇÃO:</b></span>
          <div class="rating left" style="margin-top: -5px">
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
          </div>
          <span class="nvl-estrelas margin-left" style="margin-left: 20px">0 de 5 estrelas</span>

        </div>
        <div class="coments-box margin-top">
          <span class="title-text" style="margin: 10px 0; display: block;">COMENTÁRIOS:</span>
          <textarea>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris, congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum.
          </textarea>
        </div>
        <button class="btn bgr-oceanblue quarter margin-top center-absolute">AVALIAR</button>
      </div>

    </div>
  </div>

  <div class="overlay block">
    <div class="box-feed clearfix shadow bibliografia" style="width: 798px; height: 485px;">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix no-padding" style="border: 0 !important;margin: 0 auto !important;float: inherit;">

        <div class="img-b">

        </div>
        <div class="desc-b">
          <span class="title-text">Nome do livro cadastrado</span>
          <p>
            Nome do Professor/Autor
          </p>
          <p>
            Nome da Instituição
          </p>
          <p class="center-text" style="margin: 20px 0 !important;">
            Este material foi comentado por 45.000 concurseiros
          </p>

        </div>
        <div class="ranking-box clearfix left full margin-top">
          <div class="box-interesse clearfix">
            <span class="title-interesse">INDIQUE ESTE MATERIAL PARA UM OU MAIS CONCURSOS:</span>
            <input type="text" placeholder="Texto sendo digitado" class="left" style="background-color: #f3f3f3;padding: 17px 10px;margin: 0;"/>
            <span class="plus-button">+</span>
          </div>

        </div>
        <div class="box-myindicacao">
          <fieldset class="clearfix">
            <span class="title-text">Minhas Indicações</span>
            <div class="interesses">
              <div class="interesse i0">
                <span class="text-interesse left">Dicas de estudo</span>
                <i class="sprite sprite2 sprite-close_gray"></i>
              </div>
              <div class="interesse i0">
                <span class="text-interesse left">Auditor Fiscal da Receita Federal</span>
                <i class="sprite sprite2 sprite-close_gray"></i>
              </div>
              <div class="interesse i0">
                <span class="text-interesse left">Direito Administrativo</span>
                <i class="sprite sprite2 sprite-close_gray"></i>
              </div>
              <div class="interesse i0">
                <span class="text-interesse left">Atos Administrativos</span>
                <i class="sprite sprite2 sprite-close_gray"></i>
              </div>
            </div>
          </fieldset>
        </div>
        <button class="btn bgr-oceanblue quarter margin-top center-absolute">INDICAR</button>
      </div>

    </div>
  </div>

  <div class="overlay block">
    <div class="box-feed clearfix shadow bibliografia" style="width: 798px;">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix no-padding" style="border: 0 !important;margin: 0 auto !important;float: inherit;">

        <div class="img-b">

        </div>
        <div class="desc-b">
          <span class="title-text">Nome do livro cadastrado</span>
          <p>
            Nome do Professor/Autor
          </p>
          <p>
            Nome da Instituição
          </p>
          <p class="center-text" style="margin: 20px 0 !important;">
            Este material foi comentado por 45.000 concurseiros
          </p>

        </div>
        <div class="ranking-box clearfix left full margin-top">
          <div class="box-interesse clearfix">
            <span class="title-interesse">Recomendado para</span>

            <div class="box-recomenda clearfix">
              <div class="topo-recomenda clearfix">
                <span class="title-text left">Agente Fiscal de Rendas - SEFAZ/SP</span>
                <i class="sprite sprite-seta_blue right"></i>
                <span class="qtd-indicacoes right"><b>12.500</b> </br> indicações</span>
              </div>
            </div>
            <div class="box-recomenda clearfix active">
              <div class="topo-recomenda clearfix">
                <span class="title-text left">Agente Fiscal de Rendas - SEFAZ/SP</span>
                <i class="sprite sprite-seta_blue right"></i>
                <span class="qtd-indicacoes right"><b>12.500</b> </br> indicações</span>
              </div>
              <div class="content-recomenda clearfix">
                <span class="title-text">Recomendado por:</span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel9">Nível 9</span></span>
                <span class="recomende-span"><b>260</b> usuários <span class="nivel6">Nível 6</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel3">Nível 3</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel8">Nível 8</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel5">Nível 5</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel2">Nível 2</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel7">Nível 7</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel4">Nível 4</span></span>
                <span class="recomende-span"><b>250</b> usuários <span class="nivel1">Nível 1</span></span>
              </div>
            </div>
            <div class="box-recomenda clearfix">
              <div class="topo-recomenda clearfix">
                <span class="title-text left">Agente Fiscal de Rendas - SEFAZ/SP</span>
                <i class="sprite sprite-seta_blue right"></i>
                <span class="qtd-indicacoes right"><b>12.500</b> </br> indicações</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="overlay block">

    <div class="box-feed clearfix shadow bibliografia" style="width: 798px;">
      <i class="sprite sprite2 sprite-close_blue"></i>
      <div class="box-indicacao clearfix" style="border: 0 !important;margin: 0 auto !important;float: inherit;">
        <div class="coments-box margin-top">
          <p class="block left">
            <span class="title-text" style="margin: 10px 0; display: block;">DATA DA AULA</span>
            <input placeholder="00/00/0000" style="width: 50%"/>
          </p>
          <p>
            <span class="title-text" style="margin: 10px 0; display: block;">NOME DA AULA (EX. AULA 01)</span>
            <input placeholder="" />
          </p>
          <span class="title-text" style="margin: 10px 0; display: block;">DESCRIÇÃO RESUMIDA (assuntos abordados na aula)</span>
          <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie bibendum condimentum. Donec neque urna, hendrerit ut tortor et, vehicula ornare risus. Nullam porta ex venenatis ultricies faucibus. Sed nulla mauris, congue a purus pellentesque, cursus viverra mi. Suspendisse feugiat tristique libero, id sollicitudin purus tincidunt fermentum.</textarea>
        </div>
      </div>
      <hr style="width: 100%; background-color: #eaeaea; height: 1px" />
      <div class="upload clearfix">
        <div class="coments-box margin-top">

          <span class="title-text" style="margin: 10px 0; display: block;">PDF - INSERIR ARQUIVO</span>
        </div>
        <div class="upload-option clearfix">
          <button class="btn btn-oceanblue left">SELECIONAR PDF</button>
          <i class="sprite sprite-pdf_pq" style="margin-top: 11px;margin-right: 8px; margin-left: 10px; filter: grayscale(1) saturate(18) brightness(1);"></i>
          <span class="nome-arquivo left">Edital.PDF</span>
          <i class="sprite sprite2 sprite-close_gray" style="position: relative;    top: 18px;    left: 10px"></i>
          <div class="status-bar-container" style="margin: 11px 0 0;position: relative;width: 22% !important;left: 66px;top: 8px;">
            <span class="barra-porcentagem">80%</span>
            <div class="status-bar-preenchimento  p4" style="background-color: #004570; "></div>
          </div>
        </div>
      </div>

      <button class="btn btn-voltar btn-blue center quarter">SALVAR</button>
    </div>

  </div>


  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
