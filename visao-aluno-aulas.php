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
                        <a href="#" class="sprite sprite6 sprite-power">sair</a>
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
                <button class="btn btn-ok btn-oceanblue meusCursos" style="background:#004570; padding:0px 30px 0px 30px; margin:4px 0px 0px 15px; font-size:20px; height:50px ">
                    <i class="sprite sprite6 sprite-cursos"></i><span class="btn-text">MEUS CURSOS</span>
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


        <div class="col-md-7 menuAulas" >
                <ul>
                    <li><a href="">AULAS |</a></li>
                    <li><a href=""><u>NOME DO CURSO</u></a></li>
                </ul>
        </div>

        <div class="col-md-5 legenda">
            <div class="sprite sprite6 sprite-dwAulas"></div><div class="descricaoLegenda">BAIXAR AULA</div>
            <div class="sprite sprite6 sprite-videos"></div><div class="descricaoLegenda">ASSISTIR VÍDEOS</div>
            <div class="sprite sprite6 sprite-forum"></div><div class="descricaoLegenda">FÓRUM</div>
        </div>

        <div class="col-md-12 detalhesAula">
            <div class="nomeAula">NOME DA AULA</div>
            <div class="disponivel">DISPONÍVEL</div>
            <div class="previsao">
                <ul>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                </ul>
            </div>

            <div class="legendaAcoes">
                <div class="sprite sprite6 sprite-dwAulas"></div>
                <div class="sprite sprite6 sprite-videos"></div>
                <div class="sprite sprite6 sprite-forum"></div>

            </div>
        </div>

        <div class="col-md-12 detalhesAula">
            <div class="nomeAula">NOME DA AULA</div>
            <div class="disponivel">DISPONÍVEL</div>
            <div class="previsao">
                <ul>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>
                </ul>
            </div>

            <div class="legendaAcoes">
                <div class="sprite sprite6 sprite-dwAulas"></div>
                <div class="sprite sprite6 sprite-videos"></div>
                <div class="sprite sprite6 sprite-forum"></div>
            </div>
        </div>

        <div class="col-md-12 detalhesAula atraso">
            <div class="nomeAula">NOME DA AULA</div>
            <div class="disponivel atrasoDias">ATRASO DE XX DIAS</div>
            <div class="previsao">
                <ul>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>

                </ul>
            </div>

            <div class="legendaAcoes">
                <div class="sprite sprite6 sprite-dwAulasBl"></div>
                <div class="sprite sprite6 sprite-videosBl"></div>
                <div class="sprite sprite6 sprite-forumBl"></div>
            </div>
        </div>


        <div class="col-md-12 detalhesAula aguardar">
            <div class="nomeAula">NOME DA AULA</div>
            <div class="disponivel aguardarCrono">ATRASO DE XX DIAS</div>
            <div class="previsao">
                <ul>
                   <li><strong>PREVISTA PARA</strong><br>00/00/0000</li>

                </ul>
            </div>

            <div class="legendaAcoes">
                <div class="sprite sprite6 sprite-dwAulasBl"></div>
                <div class="sprite sprite6 sprite-videosBl"></div>
                <div class="sprite sprite6 sprite-forumBl"></div>
            </div>
        </div>

        <div class="aulasFooter">
            <button class="avaliarCurso btn-avaliar_curso">AVALIAR CURSO</button>
            <button class="gerarCertificado">GERAR CERTIFICADO</button>
        </div>




        </div>

        <div class="espaco"></div>


        <div class="overlay bloco-aulas">
          <div class="box-feed clearfix shadow">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <span class="bigtitle center">avaliação do curso - nome do curso</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus congue justo id ultrices. Donec eu tortor urna. Aliquam et convallis odio. Ut aliquam congue arcu, ut efficitur metus rutrum id. Pellentesque non nisi vulputate, sollicitudin ligula sit amet, ornare est. Nulla risus sapien, lobortis sed libero in, commodo tristique lacus.
            </p>
            <br />
            <p>
              <span class="medtitle">Que nota você dá à qualidade do curso (0 a 10)?</span>
              <div class="option-group">
                <ul class="payment-methods clearfix left">
                  <li class="payment-method certo clearfix">
                    <input name="payment_methods" type="radio" id="0">
                    <label for="0"><span class="block left">0</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="1">
                    <label for="1"><span class="block left">1</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="2">
                    <label for="2"><span class="block left">2</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="3">
                    <label for="3"><span class="block left">3</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="4">
                    <label for="4"><span class="block left">4</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="5">
                    <label for="5"><span class="block left">5</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="6">
                    <label for="6"><span class="block left">6</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="7">
                    <label for="7"><span class="block left">7</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="8">
                    <label for="8"><span class="block left">8</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="9">
                    <label for="9"><span class="block left">9</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix no-margin-right">
                    <input name="payment_methods" type="radio" id="10">
                    <label for="10"><span class="block left">10</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                </ul>
              </div>
            </p>
            <br /><br />
            <p style="margin-top: 20px">
              <span class="medtitle">Que nota você dá ao atendimento via fórum de dúvidas (0 a 10)?</span>
              <div class="option-group">
                <ul class="payment-methods clearfix left">
                  <li class="payment-method certo clearfix">
                    <input name="payment_methods" type="radio" id="0">
                    <label for="0"><span class="block left">0</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="1">
                    <label for="1"><span class="block left">1</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="2">
                    <label for="2"><span class="block left">2</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="3">
                    <label for="3"><span class="block left">3</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="4">
                    <label for="4"><span class="block left">4</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="5">
                    <label for="5"><span class="block left">5</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="6">
                    <label for="6"><span class="block left">6</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="7">
                    <label for="7"><span class="block left">7</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="8">
                    <label for="8"><span class="block left">8</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="9">
                    <label for="9"><span class="block left">9</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix no-margin-right">
                    <input name="payment_methods" type="radio" id="10">
                    <label for="10"><span class="block left">10</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                </ul>
              </div>
            </p>
            <p style="margin-top: 20px">
              <span class="medtitle">VocÊ faria outro curso com este professor?</span>
              <div class="option-group">
                <ul class="payment-methods clearfix left">
                  <li class="payment-method certo clearfix">
                    <input name="payment_methods" type="radio" id="sim">
                    <label for="sim"><span class="block left">Sim</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>
                  <li class="payment-method errado clearfix">
                    <input name="payment_methods" type="radio" id="nao">
                    <label for="nao"><span class="block left">Não</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                  </li>

                </ul>
              </div>
            </p>
            <br /><br />
            <p style="margin-top: 20px">
              <span class="medtitle" style="display: block;">Comentários</span>
              <textarea class="area-comentarios">Texto digitado</textarea>
            </p>
            <p>
              <button class="btn btn-oceanblue half left">Enviar</button>
            </p>
          </div>
        </div>

        <div class="overlay bloco-aulas">
          <div class="box-feed clearfix shadow">
            <i class="sprite sprite2 sprite-close_blue"></i>
            <span class="subtitle center center-text">Como publicar na rede</span>
            <div class="box-videos full">
              <iframe width="705" height="400" src="https://www.youtube.com/embed/2RpfqqOwltU" frameborder="0" allowfullscreen></iframe>

            </div>
          </div>
        </div>
     </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
