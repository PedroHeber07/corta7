<?php
$erro = isset($_GET['erro'])? $_GET['erro'] : 0 ;

$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0 ;
$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0 ;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Corta7 - Barber Shop System</title>
  <link rel="icon" href="imagens/favicon.ico">

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">

  <script>
      // cÃŗdigo javascript  
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
          <<!-- <li><a href="">Entrar</a></li>-->
          <li class="">
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
                </form>
              </ul>
            </li>

          </ul>
        </div>

      </div><!-- /container -->
    </nav><!-- /nav -->


    <div class="container">

      <br /><br />

      <div class="col-md-4"></div>
      <div class="col-md-4">
       <h3 style="color: white; padding-top: 80px;">Inscreva-se já.</h3>
       <br />
       <form method="post" action="registra_usuario.php" id="formCadastrarse">
         <div class="form-group">
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
          <?php
          if ($erro_usuario) {
            # code...
            echo '<font style= "color: #FF0000">Usuário Cadastrado no Sistema</font>';
          }
          ?>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
          <?php
          if ($erro_email) {
            # code...
            echo '<font style= "color: #FF0000">Email Cadastrado no Sistema</font>';
          }
          ?>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
        </div>

        <button type="submit" class="btn btn-roxo  btn-md form-control" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white; border-radius: 500px;
        ">Inscreva-se</button>
      </form>
    </div>
    <div class="col-md-4"></div>

    <div class="clearfix"></div>
    <br />
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

  </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>