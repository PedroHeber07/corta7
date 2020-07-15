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
		<div class="panel-body" id="clienteform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Clientes </h3> 
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inserirCliente.php" id="formCliente">
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputNomeCliente">Nome</label>
								<input type="text" class="form-control" id="inputNomeCliente" name="inputNomeCliente" placeholder="Digite o nome do cliente" maxlength="100">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputRgCli">R.G</label>
								<input type="text" class="form-control" id="inputRgCli" name="inputRgCli"placeholder="Apenas Números" maxlength="10">
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputNascCliente">Nascimento</label>
									<input type="date" class="form-control" id="inputNascCliente" name="inputNascCliente">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputCpfCli">CPF</label>
									<input type="text" class="form-control" id="inputCpfCli" name="inputCpfCli"placeholder="Apenas Números" maxlength="11">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputEmailCli">Email</label>
									<input type="inputEmail" class="form-control" id="inputEmailCli" name="inputEmailCli" placeholder="Digite o e-mail do cliente" maxlength="50">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputContatoCliente">Contato</label>
									<input type="text" class="form-control" id="inputContatoCliente" name="inputContatoCliente" placeholder="Digite Cel/Tel do cliente" maxlength="50">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputEnderecoCli">Endereço</label>
									<input type="text" class="form-control" id="inputEnderecoCli" name="inputEnderecoCli"placeholder="Digite o Endereço do cliente" maxlength="100">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputBairroCli">Bairro</label>
									<input type="text" class="form-control" id="inputBairroCli" name="inputBairroCli"placeholder="Digite o bairro do cliente "
									maxlength="50">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-5">
									<label for="inputCidadeCli">Cidade</label>
									<input type="text" class="form-control" id="inputCidadeCli" name="inputCidadeCli" placeholder="Digite aqui a cidade do cliente" maxlength="50">
								</div>
								<div class="form-group col-sm-4">
									<label for="inputEstCli">Seu estado</label>
									<select id="inputEstCli" name="inputEstCli" class="form-control">
										<option selected>Unidades federativas...</option>
										<option>AC</option>
										<option>AL</option>
										<option>AM</option>
										<option>AP</option>
										<option>BA</option>
										<option>CE</option>
										<option>DF</option>
										<option>ES</option>
										<option>GO</option>
										<option>MA</option>
										<option>MG</option>
										<option>MT</option>
										<option>MS</option>
										<option>PA</option>
										<option>PB</option>
										<option>PE</option>
										<option>PI</option>
										<option>PR</option>
										<option>RJ</option>
										<option>RO</option>
										<option>RN</option>
										<option>RS</option>
										<option>SC</option>
										<option>SE</option>
										<option>SP</option>
										<option>TO</option>
									</select>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputCEPCli">Seu CEP</label>
									<input type="text" class="form-control" id="inputCEPCli" name="inputCEPCli" placeholder="Apenas Números" maxlength="10">
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-6">
									<label for="inputempresaCli">Empresa</label>
									<input type="text" class="form-control" id="inputempresaCli" name="inputempresaCli" placeholder="Digite a Empresa dos Clientes">
									<br />
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="clientescadastrados.php"
									title="Lista de Clientes Cadastradas">Lista de Clientes Cadastrados</a>
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