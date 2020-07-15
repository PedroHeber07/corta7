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
		<div class="panel-body" id="empresaservform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Serviços do Atendimento</h3>
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inserirservatendimento.php" name="formservAtendimento" id="formservAtendimento">
						<div class="form-row">
							<div class="form-group col-sm-12">
								<h4 style="font-size: 20px;
								font-weight: 700;
								letter-spacing: -0.04em; color: #7c25f8;">Adicionar Serviços</h4>
								<hr />
							</div>
						</div>
							<div class="form-group col-sm-6">
								<label for="primserv">Serviço 1</label>
								<input type="number" class="form-control" id="primserv" name="primserv"placeholder="Digite o ID do Serviço 1" maxlength="10" min="0">
							</div>
							<div class="form-group col-sm-6">
								<label for="primquantidade">Quantidade</label>
								<input type="number" class="form-control" id="primquantidade" name="primquantidade" placeholder="Digite a quantidade do Serviço 1" min="0">
							</div>
							<div class="form-group col-sm-6">
								<label for="secserv">Serviço 2</label>
								<input type="number" class="form-control" id="secserv" name="secserv" placeholder="Digite o ID do Serviço 2" maxlength="10" min="1">
							</div>
							<div class="form-group col-sm-6">
								<label for="secquantidade">Quantidade</label>
								<input type="number" class="form-control" id="secquantidade" name="secquantidade" placeholder="Digite a quantidade do produto 2" min="0">
							</div>
							<div class="form-group col-sm-6">
								<label for="terserv">Serviço 3</label>
								<input type="number" class="form-control" id="terserv" name="terserv"placeholder="Digite o ID do Serviço 3" maxlength="10" min="1">
							</div>
							<div class="form-group col-sm-6">
								<label for="terquantidade">Quantidade</label>
								<input type="number" class="form-control" id="terquantidade" name="terquantidade" placeholder="Digite a quantidade do produto 3" min="0">
							</div>
							<div class="form-group col-sm-4">
								<label for="inputIdAtend">ID do Atendimento</label>
								<input type="number" class="form-control" id="inputIdAtend" name="inputIdAtend"placeholder="digite o id do atendimento" maxlength="10" min="0">
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="servicosatendimentocadastrados.php"
									title="Lista de Produtos por Atendimento">Lista de Serviços por Atendimento</a>
									<a tabindex="0" class="btn btn-danger" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="atendimentoscadastrados.php"
									title="Lista de Atendimentos">Lista de Atendimentos</a>
									<a tabindex="0" class="btn btn-info" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="servicoscadastrados.php"
									title="Lista de Serviços">Lista de Serviços</a>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
