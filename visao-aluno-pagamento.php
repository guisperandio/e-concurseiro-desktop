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

    <div class="container_16 pagamento" id="wrapper-interna">

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
                <button class="btn btn-oceanblue btn-cursos meusCursos" style="background:#004570; padding:0px 30px 0px 30px; margin:4px 0px 0px 15px; font-size:20px; height:50px ">
                    <i class="sprite sprite-cursos"></i><span class="btn-text">MEUS CURSOS</span>
                </button>

                 <button class="btn btn-ok btn-cursos" style="background:#4ca92b; padding:0px 12px 0px 11px; margin:4px 0px 0px 15px; font-size:20px; clear:both ;height:50px">
                   <span class="btn-text acesso">RENOVAR ACESSO</span>
                </button>
        </div>
        <div class="col-md-6" style="positior:relative;left:80px;top:8px">
              <div style="font-size:12px; color:red; line-height:12px; font-weight:bold; margin-bottom:15px; margin-top:5px ">* Os cursos dos assinantes E-PAPIRO são acessados exclusivamente por meio do nosso leitor, disponível na Apple Store (Ipad e Iphone) e Play Store (dispositivos Android).</div>

              <div style="font-size:15px; color:red; line-heigth:8px; margin-top:40px; ">Expira em 120 dias</div>
        </div>

        <div class="col-md-10 linha"></div>




        <div class="col-md-12">
            <div class="tituloPagamento">CARRINHO DE COMPRAS</div>
        </div>



        <div class="listaCursosPagamento">
            <div class="col-md-12">
                <div class="curso">NOME DO CURSO CADASTRADO NA ÁREA ADMINISTRATIVA
                    <div class="maisDetalhes"><div class="sprite sprite6 sprite-task"></div></div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>

                <div class="curso">NOME DO CURSO CADASTRADO NA ÁREA ADMINISTRATIVA
                    <div class="maisDetalhes"><div class="sprite sprite6 sprite-task"></div></div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>

                <div class="curso">NOME DO CURSO CADASTRADO NA ÁREA ADMINISTRATIVA
                    <div class="maisDetalhes"><div class="sprite sprite6 sprite-task"></div></div>
                    <div class="detalhes">R$ 0.000,00</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="valorTotalCursos">VALOR TOTAL DOS CURSOS SELECIONADOS
                    <div class="valorTotal">R$ 0.000,00</div>
                </div>

            </div>

        </div>

        <div class="col-md-12">
            <div class="tituloDesconto">DESCONTO PERCENTUAL</div>
        </div>

        <div class="col-md-12">
            <div class="desconto">
                <div class="col-md-1">NIVEL 1</div>
                <div class="col-md-9">30%</div>
                <div class="col-md-2 valor">R$ 0.000,00</div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="totalPagar">
                <div class="col-md-2 total">TOTAL A PAGAR</div>
                <div class="col-md-8"></div>
                <div class="col-md-2 valor">R$ 0.000,00</div>
            </div>
        </div>

        <div class="col-md-12 pagamentoFooter">
            <div><button class="voltar"> VOLTAR AO SITE</button>    </div>
            <div><button class="concluir">CONCLUIR COMPRA</button></div>
        </div>






        <div class="espaco"></div>




     </div>
    </div>
    <!-- end .container_12 -->
    <?php include('scripts.html'); ?>
</body>

</html>
