<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="estilo.css" rel="stylesheet">


  <script>

  </script>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-body" id="funcionarioform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Funcionários </h3> 
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inserirFuncionario.php" id="formFunc">
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputNomeFunc">Nome</label>
								<input type="text" class="form-control" id="inputNomeFunc" name="inputNomeFunc" placeholder="Digite o nome do Funcionário" maxlength="50">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputRgFunc">R.G</label>
								<input type="text" class="form-control" id="inputRgFunc" name="inputRgFunc"placeholder="Apenas Números" maxlength="10">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputCpfFunc">CPF</label>
								<input type="text" class="form-control" id="inputCpfFunc" name="inputCpfFunc"placeholder="Apenas Números" maxlength="11">
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputNascFunc">Nascimento</label>
									<input type="date" class="form-control" id="inputNascFunc" name="inputNascFunc">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputContatoFunc">Contato</label>
									<input type="text" class="form-control" id="inputContatoFunc" name="inputContatoFunc" placeholder="Digite Cel/Tel do cliente" maxlength="20">
								</div>
								<div class="col-sm-6">
									<label for="inputempresaFunc">Empresa</label>
									<input type="text" class="form-control" id="inputempresaFunc" name="inputempresaFunc" placeholder="Digite a Empresa Funcionários">
									<br />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputEnderecoFunc">Endereço</label>
									<input type="text" class="form-control" id="inputEnderecoFunc" name="inputEnderecoFunc"placeholder="Digite o Endereço do cliente" maxlength="100">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputBairroFunc">Bairro</label>
									<input type="text" class="form-control" id="inputBairroFunc" name="inputBairroFunc"placeholder="Digite o bairro do cliente" maxlength="50">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-5">
									<label for="inputCidadeFunc">Cidade</label>
									<input type="text" class="form-control" id="inputCidadeFunc" name="inputCidadeFunc" placeholder="Digite aqui a cidade do cliente" maxlength="50">
								</div>
								<div class="form-group col-sm-4">
									<label for="inputEstFunc">Seu estado</label>
									<select id="inputEstFunc" name="inputEstFunc" class="form-control">
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
									<label for="inputCEPFunc">Seu CEP</label>
									<input type="text" class="form-control" id="inputCEPFunc" name="inputCEPFunc" placeholder="Apenas Números" maxlength="10">
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-6">
									<label for="inputPisFunc">PIS/PASEP</label>
									<input type="text" class="form-control" id="inputPisFunc" name="inputPisFunc" placeholder="Apenas Números" maxlength="11">
									<br />
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" id="btn_funcionario" name="btn_funcionario" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="funcionarioscadastrados.php"
									title="Lista de Funcionarios Cadastrados">Lista de Funcionarios Cadastrados</a>
									<hr />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>