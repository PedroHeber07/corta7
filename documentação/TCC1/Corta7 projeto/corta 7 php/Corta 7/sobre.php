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
      </div><!-- /containerS -->
    </nav>
    <!-- /nav -->

    <div class="capa-paginas">
      <div class="texto-capa">
        <h1>Sobre o Sistema</h1>
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
                <img src="imagens/img_5.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img_6.jpg" class="img-responsive">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src="imagens/img_7.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/person_2.jpg" class="img-responsive">
              </div>
            </div>
            
          </div>
          <!-- serviços -->
          <div class="col-md-6">
            <h2>Visão Geral</h2>
            <h3>Corta7 – Barber Shop Systems</h3>
            <p>O sistema Corta7 será um sistema gerencial para barbearias (Barber shops). O sistema contará com: Cadastro de produtos para venda, cadastro de serviços oferecidos, cadastro de funcionários, cadastro de clientes e relatórios gerenciais para tomada de decisão da administração do estabelecimento.</p>
            <p>A principal operação do sistema é o registro de atendimentos onde serão informados os produtos e serviços consumidos no local, por determinado cliente e se houver serviços, será informado o profissional que realizou o atendimento. Todos esses dados serão transformados em informações através dos relatórios gerais e gerenciais, possibilitando tomadas de decisão por parte da administração do estabelecimento.</p>
            <p>O administrador do sistema poderá cadastrar os clientes que utilizarão o sistema, os profissionais do estabelecimento, produtos para consumo, os serviços que serão prestados.  O administrador terá também a função de abrir a comanda digital do estabelecimento para fazer a relação dos serviços e os produtos que o cliente consumiu. O administrador deverá ter acesso aos relatórios que fornecerão bases para tomadas de decisão. Alguns exemplos de relatórios são de: Relatório de clientes por serviço, onde serão verificados quais serviços são mais utilizados pelo cliente. Relatório de Produtos por Cliente, onde serão verificados quais produtos os clientes mais compram, Relatório de Clientes por Profissional onde será verificado quais profissionais são mais requisitados pelos clientes, Relatório de satisfação do Cliente onde será verificada as avaliações fornecidas pelos clientes referentes aos serviços prestados pelos funcionários.</p>  

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
              <li><a href="quem-somos.php">Quem Somos</a></li>
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