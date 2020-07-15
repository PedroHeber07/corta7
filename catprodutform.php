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
		<div class="panel-body" id="catprodutform">
			<h3 style="font-size: 35px;
			font-weight: 700;
			letter-spacing: -0.04em; color: #7c25f8;">Categorias De Produtos </h3> 
			<hr />
			<div class="row justify-content-center mb-6">
				<div class="col-sm-12 col-md-10 col-gl-8">
					<form method="post" action="inserirCatProd.php" id="formCatProduto">
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputNomeCat">Nome</label>
								<input type="text" class="form-control" id="inputNomeCat" name="inputNomeCat" placeholder="Digite o nome da Categoria">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputNomeCatEmp">Empresa</label>
								<input type="text" class="form-control" id="inputNomeCatEmp" name="inputNomeCatEmp" placeholder="Digite o nome da Empresa da Categoria">
							</div>
							<div class="form-row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
									<button type="submit" class="btn btn-info btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Editar </button>
									<button type="submit" class="btn btn-danger btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Excluir </button>
									<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" href="catprodutcadastradas.php"
									title="Lista de Categoria de Produtos Cadastrados">Lista de Categoria de Produtos Cadastrados</a>
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