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
                    <li><a href="">Concurso |</a></li>
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
            <div class="tituloConcursosDestaque">CONHEÇA OS PROFESSORES DA REDE</div>
        </div>

         <div class="col-md-10">
            <div class="concursosDestaque">
             <h1>ORDENAR POR:</h1>
                <ul>
                    <li><a href=""><u>NOME</u> |</a></li>
                    <li><a href=""> AVALIAÇÃO DOS ALUNOS |</a></li>
                    <li><a href=""> NÍVEL |</a></li>
                    <li><a href="">REPUTAÇÃO NA REDE |</a></li>
                    <li><a href="">QUANTIDADE DE SEGUIDORES |</a></li>
                    <li><a href="">MEDALHAS</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-2 clearfix">
            <div class="busca clearfix">
              <input type="text" placeholder="Procurar curso" class="sprite sprite-lupa">
            </div>
        </div>

        <div class="col-md-12 professor">
            <div class="foto">
              <div class="usuario small p75 clearfix" style="position: relative; ">
                  <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
              </div>
              <h3 class="usr-name profNome">George Firmino</h3>
              <div class="nivelProf">Nivel 5</div>
              <div class="formacaoProf">Direito Tributário, Legislação Tributária, Coaching</div>
            </div>
            <div class="botoes">
                <div class="btCurso"><i class="sprite sprite6 sprite-cursosAzul"></i><button>CURSOS</button></div>
                <div class="botoes3">
                    <div class="seguir"><i class="sprite sprite2 sprite-follow"></i><button>SEGUIR</button></div>
                    <div class="pagina"><i class="sprite sprite6 sprite-pagina"></i><button>PÁGINA</button></div>
                    <div class="msg"><i class="sprite sprite2 sprite-msg-pq"></i><button>MENSAGEM</button></div>
                </div>
            </div>
        </div>

        <div class="detalheProf">
            <i class="sprite sprite-plus"></i>
        </div>

        <div class="col-md-12 professor">
            <div class="foto">
              <div class="usuario small p75 clearfix" style="position: relative; ">
                  <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
              </div>
              <h3 class="usr-name profNome">George Firmino</h3>
              <div class="nivelProf">Nivel 5</div>
              <div class="formacaoProf">Direito Tributário, Legislação Tributária, Coaching</div>
            </div>

            <div class="botoes">
                <div class="btCurso"><i class="sprite sprite6 sprite-cursosAzul"></i><button>CURSOS</button></div>
                <div class="botoes3">
                    <div class="seguir"><i class="sprite sprite2 sprite-follow"></i><button>SEGUIR</button></div>
                    <div class="pagina"><i class="sprite sprite6 sprite-pagina"></i><button>PÁGINA</button></div>
                    <div class="msg"><i class="sprite sprite2 sprite-msg-pq"></i><button>MENSAGEM</button></div>
                </div>
            </div>
        </div>

        <div class="detalheProf">
            <i class="sprite sprite-menos"></i>
        </div>

        <div class="detalheProfessorExpand">
            <div>
                <ul>
                   <li><strong>10.123</strong><br>seguidores</li>
                   <li><strong>58</strong><br>curso</li>
                   <li><strong>234</strong><br>evento</li>
                   <li><strong>12</strong><br>vídeos</li>
                   <li><strong>45</strong><br>medalhas</li>
                </ul>
            </div>

        <div class="avaliacao">
            <div class="avaliacao-dados"><i class="sprite2 sprite-anotacao"></i><strong>350 avaliações de alunos</strong></div>
                <div class="lista">
                    <div class="avaliacaoLista">Media Geral<br><div class="nota">8,2</div></div>
                    <div class="avaliacaoLista">Qualidade<br><div class="nota item">10</div></div>
                    <div class="avaliacaoLista">Pontualidade<br><div class="nota item">6,4</div></div>
                    <div class="avaliacaoLista">Fórum<br><div class="nota item">8,2</div></div>
                    <div class="avaliacaoLista">Aceitação<br><div class="nota aceitacao">100%</div></div>
                </div>
        </div>

        <div class="sobreProf">
            <div class="sobre"><i class="sprite2 sprite-anotacao"></i>Sobre George Firmino</div>
           <div class="conteudo">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum sodales pharetra. Suspendisse potenti. Aenean suscipit enim in arcu placerat condimentum. Pellentesque fermentum nulla leo, ac tempus lorem feugiat et. Proin mi tortor, sollicitudin ut sollicitudin commodo, pretium ac est. Aenean bibendum enim sit amet massa aliquet molestie at at nisi. Integer a tincidunt erat, eu faucibus elit. Nunc at justo ligula.
               Vivamus sit amet tempus odio, in tempor tortor. Integer rhoncus lobortis magna, non convallis nisl rhoncus nec. Donec bibendum elit at orci lacinia mollis. Vestibulum maximus neque ut tristique consequat. Aliquam at ipsum viverra, elementum orci a, pretium erat. Suspendisse elementum arcu non neque aliquam suscipit. Nullam ultricies ac augue quis lobortis. Nullam id nulla sollicitudin purus faucibus finibus. Nulla et lacus felis.
           </div>

        </div>

        </div>



        <div class="col-md-12 professor">
            <div class="foto">
              <div class="usuario small p75 clearfix" style="position: relative; ">
                  <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
              </div>
              <h3 class="usr-name profNome">George Firmino</h3>
              <div class="nivelProf">Nivel 5</div>
              <div class="formacaoProf">Direito Tributário, Legislação Tributária, Coaching</div>
            </div>

            <div class="botoes">
                <div class="btCurso"><i class="sprite sprite6 sprite-cursosAzul"></i><button>CURSOS</button></div>
                <div class="botoes3">
                    <div class="seguir"><i class="sprite sprite2 sprite-follow"></i><button>SEGUIR</button></div>
                    <div class="pagina"><i class="sprite sprite6 sprite-pagina"></i><button>PÁGINA</button></div>
                    <div class="msg"><i class="sprite sprite2 sprite-msg-pq"></i><button>MENSAGEM</button></div>
                </div>
            </div>
        </div>

        <div class="detalheProf">
            <i class="sprite sprite-plus"></i>
        </div>

        <div class="col-md-12 professor">
            <div class="foto">
              <div class="usuario small p75 clearfix" style="position: relative; ">
                  <span class="usr-img" style="background-image: url('img/user.png');"><span class="alterar-foto">atualizar foto</span></span>
              </div>
              <h3 class="usr-name profNome">George Firmino</h3>
              <div class="nivelProf">Nivel 5</div>
              <div class="formacaoProf">Direito Tributário, Legislação Tributária, Coaching</div>
            </div>

            <div class="botoes">
                <div class="btCurso"><i class="sprite sprite6 sprite-cursosAzul"></i><button>CURSOS</button></div>
                <div class="botoes3">
                    <div class="seguir"><i class="sprite sprite2 sprite-follow"></i><button>SEGUIR</button></div>
                    <div class="pagina"><i class="sprite sprite6 sprite-pagina"></i><button>PÁGINA</button></div>
                    <div class="msg"><i class="sprite sprite2 sprite-msg-pq"></i><button>MENSAGEM</button></div>
                </div>
            </div>
        </div>

        <div class="detalheProf">
            <i class="sprite sprite-plus"></i>
        </div>

        <div class="espaco"></div>




     </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
