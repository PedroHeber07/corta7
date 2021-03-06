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
      <div class="panel-body" id="fornecedorform">
        <h3 style="font-size: 35px;
        font-weight: 700;
        letter-spacing: -0.04em; color: #7c25f8;">Fornecedores</h3> 
        <hr />
        <div class="row justify-content-center mb-6">
          <div class="col-sm-12 col-md-10 col-gl-8">
            <form method="post" action="edit_fornecedores.php" id="formCatProduto">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputNomeForn">Nome</label>
                  <input type="text" class="form-control" id="inputNomeForn" name="inputNomeForn" placeholder="Digite o nome do Fornecedor" maxlength="100">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputCnpjForn">CNPJ</label>
                  <input type="text" class="form-control" id="inputCnpjForn" name="inputCnpjForn" placeholder="Apenas Números" maxlength="11">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputEmailForn">Email</label>
                  <input type="text" class="form-control" id="inputEmailForn" name="inputEmailForn" placeholder="Digite o e-mail do Fornecedor" maxlength="100">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputFoneForn">Contato</label>
                  <input type="text" class="form-control" id="inputFoneForn" name="inputFoneForn" placeholder="Digite o cel/tel do Fornecedor" maxlength="15">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputFornEmp">Empresa</label>
                  <input type="text" class="form-control" id="inputFornEmp" name="inputFornEmp" placeholder="Digite o Nome da Empresa do Fornecedor" maxlength="50">
                  <br />
                </div>
                <form method="post" action="edit_funcionarios.php" id="formFunc">
                  <div class="form-group col-sm-6">
                    <label for="inputidforn">ID do Fornecedor</label>
                    <input type="number" class="form-control" id="inputidforn" name="inputidforn" placeholder="Selecione o ID do seu Fornecedor" min="1">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
                    <a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="fornecedorescadastrados.php"
                    title="Lista de Categoria de Produtos Cadastrados">Lista de Fornecedores Cadastrados</a>
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

</div>
</body>
</html>