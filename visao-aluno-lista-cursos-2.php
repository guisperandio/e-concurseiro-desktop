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
    <?php include('estilos_cursos.html'); ?>
</head>

<body class="visaoAluno2">
    <header>
        <div class="container_16">
            <h1 class="logo-interna clearfix"><a href="#">E-Concurseiro</a></h1>

            <div class="cursos" area-btn="apps">

            </div>

            <div class="e-book" area-btn="e-books">
                <div class="box-expand shadow" id="e-books">

                </div>
            </div>

            <nav class="menu-topo">
                <ul>
                    <li>
                        <a href="#" class="sprite sprite-power">sair</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container_16" id="wrapper-interna">

      <div class="row-fluid">

        <div class="col-md-4" style="background:url(img/avatar.png) no-repeat; height:121px; ">
            <div style="margin-left:122px; padding-top:13px; font-size:14px; color:#fff; font-weight:500;">
                <div style="margin-bottom:10px; font-family:'Muli';"><strong>FULANO DE TAL DA SILVA</strong></div>
                Assinante E-PAPIRO: <span class="yellowSpan">SIM</span><br>
                Acesso até: <span class="yellowSpan">00/00/0000</span><br>
                Cursos ativos: <span class="yellowSpan">326</span>
            </div>
        </div>
        <div class="col-md-2" style="margin-left:-40px">
                <button class="btn btn-oceanblue meusCursos" style="background:#004570; padding:0px 30px 0px 30px; margin:4px 0px 0px 15px; font-size:20px; height:50px ">
                    <i class="sprite sprite-cursos"></i><span class="btn-text">MEUS CURSOS</span>
                </button>

                 <button class="btn btn-ok btn-cursos" style="background:#4ca92b; padding:0px 12px 0px 11px; margin:4px 0px 0px 15px; font-size:20px; clear:both ;height:50px">
                   <span class="btn-text acesso">RENOVAR ACESSO</span>
                </button>
        </div>
        <div class="col-md-6" style="positior:relative;left:80px;top:8px">
              <div style="font-size:12px; color:red; line-height:12px; font-weight:bold; margin-bottom:15px; margin-top:5px ">* Os cursos dos assinantes E-PAPIRO são acessados exclusivamente por meio do nosso leitor, disponível na Apple Store (Ipad e Iphone) e Play Store (dispositivos Android).</div>

              <div style="font-size:15px; color:red; line-heigth:8px; margin-top:40px; ">Expira em 10 dias</div>
        </div>

        <div class="col-md-10 linha"></div>


        <div class="col-md-9 exibirCursos" >
            <h1>Exibir cursos por:</h1>
                <ul>
                    <li><a href=""><u>Concurso</u> |</a></li>
                    <li><a href="">Professor |</a></li>
                    <li><a href="">Matéria |</a></li>
                    <li><a href="">Área |</a></li>
                    <li><a href="">Região |</a></li>
                    <li><a href="">Listar todos os cursos</a></li>
                </ul>
        </div>

        <div class="col-md-3 linkProfessores">
            <img src="img/professores.jpg"><a href="">PROFESSORES</a>
        </div>


        <div class="col-md-12">
            <div class="tituloConcursosDestaque">LISTA DE CURSOS | NOME DO CONCURSO</div>
        </div>

        <div class="col-md-10">

        </div>

        <div class="col-md-2">
            <div class="busca">
              <input type="text" placeholder="Procurar curso" class="sprite sprite-lupa">
            </div>
        </div>

        <div class="col-md-12 box-interesses clearfix mapa-concursos" >
          <h5 class="bigtitle">Nome do curso selecionado</h5>

          <div class="box-area clearfix relative">
            <p class="p-div">
              <span class="span-title">Status</span><br>
              <span class="span-desc">Aguardando Autorização</span>
            </p>
            <p class="p-div">
              <span class="span-title">Último concurso</span><br>
              <span class="span-desc">2014</span>
            </p>
            <p class="p-div">
              <span class="span-title">Banca examinadora</span><br>
              <span class="span-desc">ESAF</span>
            </p>
            <p class="p-div">
              <span class="span-title">Situação Atual (atualizado em 00/00/0000)</span><br>
              <span class="span-desc">Detalhes cadastrados na área administrativa do site, relatando a situação do concurso e os detalhes do andamento, definição da banca, data de realização das provas, histórico e etc.</span>
            </p>
            <p class="p-div clearfix">
              <span class="span-div block left">
                <span class="span-title">Edital mais recente</span><br>
                <span class="span-desc">Publicado em 00/00/0000</span>
              </span>
              <span class="span-div block left">
                <span class="span-title">Data das provas</span><br>
                <span class="span-desc">00/00/0000</span>
              </span>
              <span class="span-div block left no-margin-right download-edital">
               <i class="sprite sprite-pdf_pq"></i><span class="menu-name">Baixar Edital</span>
              </span>
            </p>
            <p class="p-div clearfix">
              <span class="span-div block left">
                <span class="span-title">Edital anterior</span><br>
                <span class="span-desc">Publicado em 00/00/0000</span>
              </span>
              <span class="span-div block left">
                <span class="span-title">Data das provas</span><br>
                <span class="span-desc">00/00/0000</span>
              </span>
              <span class="span-div block left no-margin-right download-edital">
               <i class="sprite sprite-pdf_pq"></i><span class="menu-name">Baixar Edital</span>
              </span>
            </p>
            <p class="p-div" style="position: absolute; top: 10px; right: 10px">
              <span class="span-title">Acompanhe a análise do especialista</span><br>
              <iframe class="center" width="520" height="315" style="margin-top: 10px" src="https://www.youtube.com/embed/VRjYlUkcKtc" frameborder="0" allowfullscreen></iframe>
            </p>

          </div>
        </div>
        <div class="listaCursos2">
            <div class="col-md-12">
                <div class="curso">NOME DO CURSO CADASTRADO NO ADMIN <div class="prof"> Prof. Nome do Professor</div>
                    <div class="maisDetalhes"><div class="sprite sprite-add"></div>Detalhes</div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>

                <div class="curso">NOME DO CURSO CADASTRADO NO ADMIN <div class="prof"> Prof. Nome do Professor</div>
                    <div class="maisDetalhes"><div class="sprite sprite-add"></div>Detalhes</div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>

                <div class="curso">NOME DO CURSO CADASTRADO NO ADMIN <div class="prof"> Prof. Nome do Professor</div>
                    <div class="maisDetalhes"><div class="sprite sprite-add"></div>Detalhes</div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>
            </div>



        </div>

        <div class="espaco"></div>




     </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
