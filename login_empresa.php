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
<?php include('estilos_index.html'); ?>
</head>
<body>

<div class="container_16" id="index">

  <div class="grid_12 no-margin-left grid740" id="content-left">
    <h1 class="logo">
      <a href="#">e-concurseiro</a>
    </h1>

    <div class="login clearfix">
      <input type="text" class="input-email" placeholder="E-mail"/>
      <input type="password" class="input-senha" placeholder="Senha"/>
      <div class="login-details clearfix">
        <span class="conectado manter">Mantenha-me conectado</span>
        <a href="#" class="conectado">Esqueceu a senha?</a>
      </div>
      <button class="btn btn-entrar btn-blue">Entrar</button>
      <button class="btn btn-facebook btn-darkblue sprite sprite2">Login com Facebook</button>
      <button class="btn btn-tour btn-clear">Fazer um tour como visitante</button>
    </div>

    <div class="wlc-concurseiro">
      <h2>Bem vindo (a) ao E-Concurseiro</h2>
      <p>
        Você está na rede social dos concursos públicos, interligando concurseiros, professores e demais interessados em concursos. São milhares de usuários conectados, compartilhando informações importantes, indicações de bibliografia, provas, editais, notícias, dicas de estudo e até boatos sobre concursos.
        <br /><br />
        Conteúdo <b>totalmente gratuito</b> para os usuários, inclusive com apps específicos para decolar nos estudos.
      </p>
      <div class="site-info clearfix">
        <ul class="clearfix">
          <li class="icon-1 no-margin-left">
            <span class="num-info">253.352</span>
            <span class="data-info">Concurseiros Conectados</span>
          </li>
          <span class="dotted-line"></span>
          <li class="icon-2">
            <span class="num-info">200</span>
            <span class="data-info">Professores conectados</span>
          </li>
          <li class="icon-3">
            <span class="num-info">365.000</span>
            <span class="data-info">Publicações</span>
          </li>
          <li class="icon-4">
            <span class="num-info">253.352</span>
            <span class="data-info">Questões de concurso</span>
          </li>
          <li class="icon-5">
            <span class="num-info">2.540</span>
            <span class="data-info">Provas</span>
          </li>
          <li class="icon-6 no-margin-right">
            <span class="num-info">480</span>
            <span class="data-info">Editais</span>
          </li>
        </ul>
      </div>
    </div>


  </div>
  <!-- end .grid_6 -->
  <div class="grid_7 grid_484 no-margin-right right" id="content-right">
    <button class="btn btn-facebook-cadastro btn-darkblue">Cadastrar via Facebook</button>
    <div class="cadastro">
      <nav class="menu-cadastro clearfix">
        <ul class="menu-cadastro clearfix">
          <li class="no-cadastro">
            <a href="#" class="active">
              <span class="not-user">Ainda não é um e-concurseiro?</span>
              <span class="destaque-cadastro">CADASTRE-SE AQUI</span>
            </a>
          </li>
          <li class="professores">
            <a href="#">
              Professores
            </a>
          </li>
          <li class="anunciantes">
            <a href="#">
              Anunciantes
            </a>
          </li>
        </ul>
      </nav>

      <!-- Div acesso usuarios -->
      <div class="content-cadastro clearfix" id="no-cadastro">
        <span class="acesso-gratuito">Acesso <b>100% gratuito</b> para os usuários</span>
        <form>
          <fieldset>
            <input type="text" class="name" placeholder="Nome"/>
            <input type="text" class="email" placeholder="E-mail"/>
            <input type="text" class="senha" placeholder="Senha"/>
            <input type="text" class="senha" placeholder="Repetir senha"/>
            <input type="text" class="uf" placeholder="UF"/>
            <input type="text" class="cidade" placeholder="Cidade"/>
            <input type="text" class="nascimento" placeholder="Nascimento"/>
            <div class="option-group sexo">
              <span class="block left">Sexo</span>
              <ul class="payment-methods clearfix left">
                <li class="payment-method certo clearfix">
                  <input name="payment_methods" type="radio" id="certo">
                  <label for="certo"><span class="block left">F</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                </li>
                <li class="payment-method errado clearfix">
                  <input name="payment_methods" type="radio" id="errado">
                  <label for="errado"><span class="block left">M</span><i class="sprite sprite4 sprite-radio_button"></i></label>
                </li>
              </ul>
            </div>
          </fieldset>
          <span class=alert>
            Ao clicar em CADASTRAR, você assume que leu e concorda com os nossos <a href="#" class="link-destaque">Termos de Uso.</a>
          </span>
          <button class="btn btn-cadastras btn-oceanblue">CADASTRAR</button>
        </form>
      </div>

      <!-- Div acesso professores -->
      <div class="content-cadastro clearfix" id="professores">
        <form>
          <fieldset>
            <input type="text" class="name" placeholder="Nome"/>
            <input type="text" class="email" placeholder="Email"/>
            <input type="text" class="email" placeholder="Matérias"/>
            <input type="text" class="email" placeholder="Instituições onde ensina"/>
            <input type="text" class="email" placeholder="Sites"/>
            <input type="text" class="email" placeholder="Livros publicados"/>
          </fieldset>
          <button class="btn btn-cadastras btn-oceanblue">ENVIAR</button>
        </form>
      </div>

      <!-- Div acesso anunciantes -->
      <div class="content-cadastro clearfix anunciantes-form" id="anunciantes">
        <form>
          <fieldset>
            <input type="text" class="name" placeholder="Nome da Instituição"/>
            <input type="text" class="email" placeholder="Site"/>
            <input type="text" class="senha" placeholder="Responsável"/>
            <input type="text" class="senha" placeholder="Telefone para contato"/>
            <input type="text" class="email" placeholder="Email"/>
            <input type="text" class="email" placeholder="CNPJ"/>
            <input type="text" class="email" placeholder="Endereço Comercial"/>
          </fieldset>
          <button class="btn btn-cadastras btn-oceanblue">ENVIAR</button>
        </form>
      </div>

    </div>
  </div>
  <!-- end .grid_6 -->

</div>
<!-- end .container_12 -->
<footer>
<p class="copyright">
  © 2016. e-concurseiro.
</p>
<p class="direitos">
  e-concurseiro é uma marca registrada do grupo WeConnect Social Networks. Todos os direitos reservados.
</p>
</footer>
<div class="overlay">
  <div class="lightbox" id="cadastro-sucesso">
    <i class="sprite sprite-reprovar"></i>
    <p>
      Seu cadastro foi <b>enviado com sucesso</b> e será avaliado por nossa equipe de comunicação. Em breve entraremos em contato para a conclusão e a posterior liberação do acesso.
    </p>
  </div>
</div>

<?php include('scripts.html'); ?>
</body>
</html>
