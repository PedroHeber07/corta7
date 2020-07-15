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

	</script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-body" id="empresaform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Atendimento </h3>
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inseriratendimento.php" name="formAtendimento"id="formAtendimento">
						<div class="form-row">
							<div class="form-group col-sm-10">
								<label for="inputClienteAtendimento">Cliente</label>
								<input type="text" class="form-control" id="inputClienteAtendimento" name="inputClienteAtendimento" placeholder="Digite o Cliente do Atendimento" maxlength="50">
							</div>
							<div class="form-group col-sm-10">
								<label for="inputFuncAtend">Funcionário</label>
								<input type="text" class="form-control" id="inputFuncAtend" name="inputFuncAtend"placeholder="Digite o Funcionário do Atendimento" maxlength="50">
							</div>
							<div class="form-group col-sm-10">
								<label for="inputEmpAtend">Empresa</label>
								<input type="text" class="form-control" id="inputEmpAtend" name="inputEmpAtend"placeholder="Digite o Funcionário do Atendimento" maxlength="50">
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" id="btn_empresa" name="btn_empresa" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="atendimentoscadastrados.php"
									title="Lista de Empresas Cadastradas">Lista de Atendimentos Cadastradas</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<hr />
		</div>
	</div>	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>