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
		<div class="panel-body" id="produtosform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Produtos </h3> 
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inserirProdutos.php" id="formProduto">
						<div class="form-row">
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputNomePro">Descrição do Produto</label>
									<input type="text" class="form-control" id="inputNomePro" name="inputNomePro" placeholder="Digite o nome do Produto">
								</div>
								<div class="col-sm-6">
									<label for="inputempresaProd">Empresa</label>
									<input type="text" class="form-control" id="inputempresaProd" name="inputempresaProd" placeholder="Digite a Empresa Do Produto">
									<br />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputPrecoPro">Valor do Produto</label>
									<input type="text" class="form-control" id="inputPrecoPro" name="inputPrecoPro" placeholder="R$ ">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputUniPro">Unidades em Estoque</label>
									<input type="number" class="form-control" id="inputUniPro" name="inputUniPro" placeholder="Unidades" min="0">
								</div>
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="produtoscadastrados.php"
									title="Lista de Produtos Cadastrados">Lista de Produtos Cadastrados</a>
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