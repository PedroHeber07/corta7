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

    <div id="d">
      <script type="text/javascript">
        function imprime(text){
          text=document
          print(text)
        }
      </script>

    <div class="panel panel-default">
     <div class="panel-body">
      <h3 style="font-size: 35px;
      font-weight: 700;
      letter-spacing: -0.04em; color: #7c25f8;">Lista de Empresas Cadastradas </h3> 
      <hr />
      <div class="row justify-content-center mb-6">
        <div class="col-sm-12 col-md-10 col-gl-8">
          <?php
          include_once('db.class.php');

          $objDb = new db();
          $link = $objDb->conecta_mysql();

          $iduser =  $_SESSION['id_usuario'];

        //consultar no banco de dados
          $sql = "SELECT * FROM tbempresa  WHERE fk_usuario = '$iduser' ORDER BY idempresa ASC";
          $resultado_emp = mysqli_query($link, $sql);
        //Verificar se encontrou resultado na tabela "usuarios"
          if(($resultado_emp) AND ($resultado_emp->num_rows != 0)){
            ?>
            <table class="table table-bordered table-hover">
             <thead>
               <tr>
                <th >ID</th>
                <th >Nome</th>
                <th >Fantasia</th>
                <th >Email</th>
                <th >Contato</th>
                <th >Endereço</th>
                <th >Bairro</th>
                <th >Cidade</th>
                <th >UF</th>
                <th >CEP</th>
                <th >CNPJ</th>
                <th >ID Usu</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row_emp = mysqli_fetch_array($resultado_emp)){
                ?>
                <tr>
                  <th><?php echo $row_emp['idempresa']; ?></th>
                  <td><?php echo $row_emp['nome']; ?></td>
                  <td><?php echo $row_emp['fantasia']; ?></td>
                  <td><?php echo $row_emp['emailempresa']; ?></td>
                  <td><?php echo $row_emp['foneemp']; ?></td>
                  <td><?php echo $row_emp['endemp']; ?></td>
                  <td><?php echo $row_emp['bairroemp']; ?></td>
                  <td><?php echo $row_emp['cidadeemp']; ?></td>
                  <td><?php echo $row_emp['ufemp']; ?></td>
                  <td><?php echo $row_emp['cepemp']; ?></td>
                  <td><?php echo $row_emp['cnpjemp']; ?></td>
                  <td><?php echo $row_emp['fk_usuario']; ?></td>
                </tr>
              <?php   }  ?>
            </tbody>
          </table>
          <a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="editarempresa.php"
          title="Editar Empresas">Editar</a>
          <a tabindex="0" class="btn btn-danger" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="excluirempresa.php"
          title="Excluir Empresas">Excluir</a>
          <input type="button" class="btn btn-info" value="imprimir" name="imprimir" onclick="imprime()">
          <?php
        }else{
          echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
        }
        ?>
      </div>
    </div>
  </div>
</div>	
</div>
</div>
</body>
</html>