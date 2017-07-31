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

<body class="visaoAluno">
    <header>
        <div class="container_16">
            <h1 class="logo-interna clearfix"><a href="#">E-Concurseiro</a></h1>

            <div class="cursos" area-btn="apps">

            </div>

            <div class="e-book" area-btn="e-books">
                <div class="box-expand shadow" id="e-books">

                </div>
            </div>
            <div class="search">
                <input type="text" placeholder="Procurar" class="sprite sprite-lupa" />
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

    <div class="container_16">

        <!-- end .grid_6 -->
        <div class="overlay flex pop ">
          <div class="box-feed clearfix shadow aluno1">
            <i class="sprite sprite2 sprite-close_blue"></i>
               <div class="conteudoPop">
                  <p class="titulo">Seja muito bem-vindo(a) ao <strong>Ambiente Virtual de Ensino</strong> do E-Concurseiro!</p>
                  <div class="mensagem">
                        <p>Aqui você poderá conhecer e se matricular nos cursos oferecidos pelos professores da rede. Todos os cursos tem a aula inicial totalmente gratuita, para você avaliar a qualidade da cada material e a didática do professor.</p>

                        <p>A partir daí, você poderá adquirir os cursos de forma avulsa, pagando o valor definido pelo professor, ou participar do nosso programa <strong>E-PAPIRO</strong>, por meio do qual você tem acesso a <br> <span style="font-weight:bold; color:#ff0000">todo o conteúdo do site</span> (isso mesmo, todos os cursos à sua disposição), por meio do nosso leitor (reader), pagando apenas o valor da mensalidade (R$ xx,xx). Saiba mais sobre o <br> <strong>E-PAPIRO</strong> clicando aqui.</p>
                        <p>&nbsp;</p>
                        <p>
                          <span class="select-option clearfix"><label class="block" style="margin: 0 !important"><span class="small-box"></span>Não exibir esta mensagem novamente.</label></span>
                        </p>
                  </div>
                </div>
          </div>
        </div>

    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
