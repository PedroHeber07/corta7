<?php
$erro = isset($_GET['erro'])? $_GET['erro'] : 0 ;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Corta7 - Barber Shop System</title>
  <link rel="icon" href="imagens/favicon.ico">

  <!-- jquery - link cdn -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">

  <script>
      // cóŗdigo javascript    
      $(document).ready(function(){
        //verificar se os campos de usuário e senha foram devidamente preenchidos

        var campo_vazio = false; 

        $('#btn_login').click(function(){
          if($('#campo_usuario').val() == ''){
            $('#campo_usuario').css({'border-color': '#A94442'});
            campo_vazio = true; 
          } else {
            $('#campo_usuario').css({'border-color': '#CCC'});
          }
          if($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color': '#A94442'});
            campo_vazio = true; 
          } else {
            $('#campo_senha').css({'border-color': '#CCC'});
          }

          if(campo_vazio)return false;
        });

      });

    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">

        <!-- header -->
        <div class="navbar-header">

          <!-- botao toggle -->
          <button type="button" class="navbar-toggle collapsed"
          data-toggle="collapse" data-target="#barra-navegacao">
          <span class="sr-only">alternar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="site-logo">
          <a href="index.php">Corta7</a>
        </div>

      </div>

      <!-- navbar -->
      <div class="collapse navbar-collapse" id="barra-navegacao">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="quem-somos.php">Quem Somos</a></li>
          <li><a href="sobre.php"> Sobre o Sistema</a></li>
          <li><a href="contato.php">Contatos</a></li>
          <li class="divisor" role="separator"></li>
          <li><a href="inscrevase.php">Inscrever-se</a></li>
          <!-- <li><a href="">Entrar</a></li>-->
          <li class="<?= $erro == 1 ? 'open' : ''?>">
            <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
            <ul class="dropdown-menu" aria-labelledby="entrar">
              <div class="col-md-12">
                <p>Você possui uma conta?</h3>
                  <br />
                  <form method="post" action="validar_acesso.php" id="formLogin">
                    <div class="form-group">
                      <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                    </div>
                    
                    <button type="buttom" class="btn btn-custom btn-roxo" id="btn_login">Entrar</button>

                    <br /><br />
                    
                  </form>

                  <?php

                  if ($erro == 1) {
                      # code...
                    echo '<font color = "#FF0000">Usuário e/ou senha inválido(s)</font>';

                  }


                  ?>
                </form>
              </ul>
            </li>

          </ul>
        </div>

      </div><!-- /container -->
    </nav><!-- /nav -->

    <div class="capa">
      <div class="texto-capa">
        <h1>Gerencie Sua Barbearia</h1>
        <a href="inscrevase.php" class="btn btn-custom btn-roxo btn-lg">Comece Agora</a>
        <a href="inscrevase.php" class="btn btn-custom btn-branco btn-lg">Cadastre-se Aqui</a>
      </div> 
    </div>
    <!-- Conteúdos -->
    <section id="servicos">
      <div class="container">
        <div class="row">
          <!-- albuns -->

          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6">
                <img src="imagens/img_1.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img_2.jpg" class="img-responsive">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src="imagens/img_3.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img_4.jpg" class="img-responsive">
              </div>
            </div>

          </div>
          <!-- serviços -->
          <div class="col-md-6">
            <h2>O que o Corta7 tem?</h2>

            <h3>Gerenciamento</h3>
            <p>Preencha o sistema com toda sua operação. Cadastre funcionários, produtos, serviços e obtenha um ambiente organizado para sua empresa. Onde a cada atendimento realizado será atualizado o banco de dados com as informãções pertinentes.</p>

            <h3>Finanças</h3>
            <p>Ao efetuar os atendimentos tenha todos os dados do capital que está sendo gerado pela empresa, assim como os gastos que a empresa venha a ter com a aquisição de produtos, despesas fixas e pagamento de pessoal.</p>

            <h3>Relatórios Gerenciais</h3>
            <p>Tenha em mãos relatórios gerenciais que forneçam dados relevantes para as melhores tomadas de decições possíveis.</p>

          </div>
        </div>
      </div>


    </section>



    <!-- Rodape -->
    <footer id="rodape">
      <div class="container">
        <div class="row">

          <div class="col-md-2">
            <a href="index.php" id="rodape-logo">Corta7</a>
          </div>

          <div class="col-md-2">
            <h4>Companhia</h4>
            <ul class="nav">
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="">Empregos</a></li>
              <li><a href="">Imprensa</a></li>
              <li><a href="">Novidades</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4>comunidades</h4>
            <ul class="nav">
              <li><a href="">Artistas</a></li>
              <li><a href="">Desenvolvedores</a></li>
              <li><a href="">Marcas</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4>links uteis</h4>
            <ul class="nav">
              <li><a href="">Ajuda</a></li>
              <li><a href="quem-somos.php">Quem somos</a></li>
              <li><a href="contato.php">Contatos</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="nav">
              <li class="item-rede-social"><a href=""><img src="imagens/facebook.png"></a></li>
              <li class="item-rede-social"><a href=""><img src="imagens/twitter.png"></a></li>
              <li class="item-rede-social"><a href=""><img src="imagens/instagram.png"></a></li>
            </ul>
          </div>

        </div><!-- /row -->
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>