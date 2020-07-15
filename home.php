<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: index.php?erro=1');

}

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
      // cÃŗdigo javascript  
      var httpRequest;

      function fazerRequisicao(url, destino){

        document.getElementById(destino).innerHTML = "<center><img src='loader.gif'></center>";

        if(window.XMLHttpRequest){
          httpRequest = new XMLHttpRequest();
        }else if(window.ActiveXObject){
          try{

            httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

          }catch(e){

            try{

              httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

            }catch(e){

              alert("Impossível instanciar o objeto XMLHttpRequest para esse navegador/versão");

            }

          }
        }

        if(!httpRequest){
          alert("Erro ao tentar criar uma instância do objeto XMLHttpRequest");
          return false;
        }

        httpRequest.onreadystatechange = situacaoRequisicao;

        httpRequest.open("GET", url);
        httpRequest.send();

      }

      function situacaoRequisicao(){

        if(httpRequest.readyState == 4){

          if(httpRequest.status == 200){

            document.getElementById('panel_conteudo').innerHTML = httpRequest.responseText;

          }

        }

      }

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
          <li><a href="home.php">Home</a></li>
          <li><a href="sair.php">Sair</a></li>
          <!-- <li><a href="">Entrar</a></li>-->
        </ul>
      </div>

    </div><!-- /container -->
  </nav><!-- /nav -->


  <div class="container">

    <br /><br />
    <br /><br />
    <br /><br />

    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-body">
         <h4 style="font-size: 20px;
         font-weight: 200;
         letter-spacing: -0.04em; color: #7c25f8;">Usuário:</h4> 
         <h5><?= $_SESSION['usuario'] ?></h5>
         <h5><?= $_SESSION['email'] ?></h5>
       </div>
       <div>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action list-group-item-info" onclick="fazerRequisicao('empresaform.php', 'panel_conteudo')">Empresa</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info" onclick="fazerRequisicao('funcionarioform.php', 'panel_conteudo')">Funcionários</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info" onclick="fazerRequisicao('clienteform.php', 'panel_conteudo')" >Clientes</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info " onclick="fazerRequisicao('servicoform.php', 'panel_conteudo')" >Serviços</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info" onclick="fazerRequisicao('produtosform.php', 'panel_conteudo')">Produtos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-warning" onclick="fazerRequisicao('entradaprodutos.php', 'panel_conteudo')">Entrada de Produtos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-warning" onclick="fazerRequisicao('fornecedores.php', 'panel_conteudo')">Fornecedores</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-danger" onclick="fazerRequisicao('atendimentoform.php', 'panel_conteudo')">Atendimento</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success" onclick="fazerRequisicao('relatorio.php', 'panel_conteudo')">Relatórios</a>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-body" id="panel_conteudo">
       <h3 style="font-size: 35px;
       font-weight: 700;
       letter-spacing: -0.04em; color: #7c25f8;">Edite seu Perfil:</h3> 
       <hr />
       <form method="post" action="editarusu.php">
         <div class="form-group">
          <h4 style="font-size: 20px;
          font-weight: 200;
          letter-spacing: -0.04em; color: #4B0082;">Usuário: <?= $_SESSION['usuario'] ?></h4> 
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" maxlength="100">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" maxlength="32">
        </div>
        <br/>
        <button type="submit" class="btn btn-roxo  btn-md form-control" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white; border-radius: 500px;
        ">Atualizar</button>
      </form> 
    </div>

    <br />

    <br />

  </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>