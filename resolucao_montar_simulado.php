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

  <div class="grid_16 center clearfix" style="margin-top: 20px !important" >
    <div class="box-feed clearfix box-app">
      <div class="box-interesse clearfix">
        <h2 class="block align-left left">Montando o simulado</h2>
        <input type="text" class="left input-bg" placeholder="Digite aqui um nome para o seu caderno de questões" />
        <span class="obs left" style="margin-left: 10px">(apenas usuários logados podem salvar seus cadernos de questões)</span>
      </div>

      <div class="box-interesse clearfix relative box-montar">
        <span class="bigtitle left block full align-left margin-bottom-pq">Filtro</span>
        <div class="box-campos clearfix" style="width: 65%; float: left">
          <div class="box-campo clearfix relative">
            <span class="select-option"><label>Matéria</label></span>
            <i class="sprite sprite4 sprite-select-style absolute"></i>
            <select>
              <option>
                Selecione uma matéria
              </option>
            </select>
          </div>
          <div class="box-campo clearfix relative">
            <span class="select-option"><label>Assunto</label></span>
            <i class="sprite sprite4 sprite-select-style absolute"></i>
            <select>
              <option>
                Selecione um assunto
              </option>
            </select>
          </div>
          <div class="box-campo clearfix relative">
            <span class="select-option"><label>Órgão</label></span>
            <i class="sprite sprite4 sprite-select-style absolute"></i>
            <select>
              <option>
                Selecione um órgão
              </option>
            </select>
          </div>
          <div class="box-campo clearfix relative">
            <span class="select-option"><label>Cargo</label></span>
            <i class="sprite sprite4 sprite-select-style absolute"></i>
            <select>
              <option>
                Selecione um cargo
              </option>
            </select>
          </div>
          <div class="box-campo clearfix relative">
            <span class="select-option"><label>Banca</label></span>
            <i class="sprite sprite4 sprite-select-style absolute"></i>
            <select>
              <option>
                Selecione uma banca
              </option>
            </select>
          </div>
          <div class="box-campo clearfix ano-box relative">
            <span class="select-option"><label>ANO</label></span>
            <i class="sprite sprite4 sprite-select-style absolute" style="right: 20px !important"></i>
            <select>
              <option>
                Selecione
              </option>
            </select>
          </div>
          <div class="box-campo clearfix tipo-box relative">
            <span class="select-option"><label>Tipo de questão</label></span>
            <i class="sprite sprite4 sprite-select-style absolute" style="right: 35px !important"></i>
            <select>
              <option>
                Selecione um tipo
              </option>
            </select>
          </div>
        </div>
        <div class="box-campos clearfix" style="width: 35%; float: left">
          <div class="infos clearfix">
            <button class="btn btn-greenold left">2.523.465 questões disponíveis</button>
            <button class="btn bgr-oceanblue right">Limpar Filtro</button>
          </div>
          <div class="filtros-selected clearfix">
            <div class="box-selected">
              <span class="filter-name">nome da banca</span>
              <span class="close-button">X</span>
            </div>
            <div class="box-selected">
              <span class="filter-name">nome da banca</span>
              <span class="close-button">X</span>
            </div>
            <div class="box-selected">
              <span class="filter-name">nome da banca</span>
              <span class="close-button">X</span>
            </div>
            <div class="box-selected">
              <span class="filter-name">nome da banca</span>
              <span class="close-button">X</span>
            </div>
          </div>
        </div>
      </div>

      <div class="box-interesse clearfix relative box-montar no-padding">

        <div class="box-campos clearfix padding" style="width: 65%; float: left">
          <span class="bigtitle left block full align-left margin-bottom-pq no-transform">FILTRO PERSONALIZADO (apenas para usuários logados)</span>
          <div class="box-campo clearfix box-full no-margin-bottom">
            <span class="select-option"><label>Por histórico</label></span>
            <ul class="type-curso clearfix left">
                <li>
                    <i class="sprite sprite-radio"></i>
                    <label for="" class="align-left">Todas as questões</label>
                </li>
                <li>
                    <i class="sprite sprite-radio"></i>
                    <label for="" class="align-left label-grande">Apenas questões que nunca respondi</label>
                </li>
                <li>
                    <i class="sprite sprite-radio"></i>
                    <label for="" class="align-left label-grande">Apenas questões que errei</label>
                </li>
            </ul>
          </div>
          <div class="box-campo clearfix box-full no-margin-bottom">
            <span class="select-option"><label style="width: 100% !important">Por Nível de dificuldade</label></span>
            <ul class="type-curso clearfix left">
                <li>
                    <i class="little-square left"></i>
                    <label for="" class="align-left left label-grande uppercase">Fácil</label>
                    <br />
                    <span class="field-detail">índice de acerto de 75 a 100%</span>
                </li>
                <li>
                    <i class="little-square left"></i>
                    <label for="" class="align-left label-grande left uppercase">Intermediário</label>
                    <br />
                    <span class="field-detail">índice de acerto de 60 a 75%</span>
                </li>
                <li>
                    <i class="little-square left"></i>
                    <label for="" class="align-left label-grande left uppercase">Avançado</label>
                    <br />
                    <span class="field-detail">índice de acerto abaixo de 60%</span>
                </li>
            </ul>
          </div>
          <div class="box-campo clearfix box-full no-margin-bottom">
            <span class="select-option"><label style="width: 100% !important">Por Registros</label></span>
            <ul class="type-curso clearfix left">
                <li>
                    <i class="little-square left"></i>
                    <label for="" class="align-left left label-grande ">Apenas questões com comentários</label>
                </li>
                <li>
                    <i class="little-square left"></i>
                    <label for="" class="align-left label-grande left ">Apenas questões que fiz anotações</label>
                </li>
            </ul>
          </div>
        </div>
        <div class="box-campos clearfix padding" style="width: 380px; height: 286px; float: left; background-color: #fff">
          <span class="bigtitle left block full align-left margin-bottom-pq">qUANTIDADE DE Questões</span>
          <div class="box-campo clearfix box-full">
            <ul class="type-curso clearfix left type-opcoes">
                <li>
                    <i class="sprite sprite-radio"></i>
                    <label for="" class="align-left">Total de questões do carderno</label>
                </li>
                <br />
                <li>
                  <label class="align-left" style="margin-left: 0">OU</label>
                </li>
                <br />
                <li>
                    <i class="sprite sprite-radio"></i>
                    <label for="" class="align-left label-grande">Questões por matéria</label>
                </li>
            </ul>
            <input type="text" class="left margin-top" style="background-color: #f1f1f1; color: #0a4478; width: 180px; margin-left: 0; margin-bottom: 10px" />
            <button class="btn btn-oceanblue half margin-top center" style="font-size: 12px; margin-top: 20px !important">Gerar caderno de questões</button>

          </div>
          <div class="block left full center-text" style="color: #696969">
            O caderno será gerado com <b class="blue">250 questões</b>
          </div>
        </div>
      </div>



    </div>
  </div>

  <div class="overlay block meus-cursos resolucao">
      <div class="box-feed clearfix shadow">
          <i class="sprite sprite2 sprite-close_blue"></i>
          <span class="bigtitle center">Nome do Filtro (ex banca)</span>
          <fieldset>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
              <span class="select-option clearfix left"><i class="sprite sprite-select"></i><label class="graytitle">Loren Ipsum</label></span>
          </fieldset>
          <button class="btn bgr-oceanblue btn-ir quarter center">Adicionar</button>
      </div>
  </div>
  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<?php include('scripts.html'); ?>
</body>
</html>
