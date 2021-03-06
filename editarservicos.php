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

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper.min.js"></script>

  <!-- jquery - link cdn -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">

  <script>

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

    <div class="panel panel-default">
      <div class="panel-body" id="servicoform">
        <h3 style="font-size: 35px;
        font-weight: 700;
        letter-spacing: -0.04em; color: #7c25f8;">Editar Serviços </h3> 
        <hr />
        <div class="row justify-content-center mb-6">
          <div class="col-sm-12 col-md-10 col-gl-8">
            <form method="post" action="edit_servicos.php" id="formServico">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputidServ">ID do Servico</label>
                  <input type="number" class="form-control" id="inputidServ" name="inputidServ" placeholder="Selecione o ID do Serviço" min="1">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputNomeSer">Nome</label>
                  <input type="text" class="form-control" id="inputNomeSer" name="inputNomeSer" placeholder="Digite o nome da Serviço">
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6">
                  <label for="inputempresaServ">Empresa</label>
                  <input type="text" class="form-control" id="inputempresaServ" name="inputempresaServ" placeholder="Digite a Empresa Dos Serviços">
                  <br />
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputPrecoSer">Valor do Serviço</label>
                  <input type="text" class="form-control" id="inputPrecoSer" name="inputPrecoSer" placeholder="R$ ">
                  <br />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
                  <a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="servicoscadastrados.php"
                  title="Lista de Serviços Cadastrados">Lista de Serviços Cadastrados</a>
                  <hr />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>