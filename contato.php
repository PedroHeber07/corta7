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
	      // cóŗdigo javascript    
	      $(document).ready(function(){
        //verificar se os campos de usuário e senha foram devidamente preenchidos

        var campo_vazio = false; 

        $('#btn_login').click(function(){
        	if($('#campo_usuario').val() == ''){
        		$('#campo_usuario').css({'border-color': '#A94442'});
        		campo_vazio = true; 
        	} else {
        		$('#campo_usuario').css({'border-color': '#CCC'});
        	}
        	if($('#campo_senha').val() == ''){
        		$('#campo_senha').css({'border-color': '#A94442'});
        		campo_vazio = true; 
        	} else {
        		$('#campo_senha').css({'border-color': '#CCC'});
        	}

        	if(campo_vazio)return false;
        });

    });					
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
					<li><a href="quem-somos.php">Quem Somos</a></li>
					<li><a href="sobre.php"> Sobre o Sistema</a></li>
					<li><a href="contato.php">Contatos</a></li>
					<li class="divisor" role="separator"></li>
					<li><a href="inscrevase.php">Inscrever-se</a></li>
					<!-- <li><a href="">Entrar</a></li>-->
					<li class="">
						<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
						<ul class="dropdown-menu" aria-labelledby="entrar">
							<div class="col-md-12">
								<p>Você possui uma conta?</h3>
									<br />
									<form method="post" action="validar_acesso.php" id="formLogin">
										<div class="form-group">
											<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
										</div>
										
										<div class="form-group">
											<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
										</div>
										
										<button type="buttom" class="btn btn-custom btn-roxo" id="btn_login">Entrar</button>

										<br /><br />
										
									</form>
								</form>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /containerS -->
		</nav>
		<!-- /nav -->

		<div class="capa-paginas">
			<div class="texto-capa">
				<h1>Contatos</h1>
			</div> 
		</div>

		<!-- Conteúdos -->
		<section id="servicos">
			<div class="container">
				<div class="row">
					<!-- albuns -->
					<!-- formulario -->
					<div class="col-md-12">
						<div class="container">

							<div class="row">
								<div class="col-md-12 col-10 my-md-4 mb-4 mt-2 ml-4">
									<h2 class="display-4"><i class="fas fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
										Entre em contato conosco
									</h2>
									<br>
									<br>
								</div>
							</div>

							<div class="row justify-content-center mb-5">
								<div class="col-sm-12 col-md-10 col-gl-8">
									<form>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="inputNome">Seu nome</label>
												<input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome">
											</div>
											<div class="form-group col-sm-6">
												<label for="inputSobrenome">Seu sobrenome</label>
												<input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui sobrenome">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="inputNome">Seu email</label>
												<input type="inputEmail" class="form-control" id="inputEmail" placeholder="Digite seu e-mail">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label for="inputEnd">Seu endereço</label>
												<input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu endereço completo">
											</div>
										</div>    
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="inputCidade">Sua cidade</label>
												<input type="text" class="form-control" id="inputCidade" placeholder="Digite aqui sua cidade">
											</div>
											<div class="form-group col-sm-4">
												<label for="inputEst">Seu estado</label>
												<select id="inputEst" class="form-control">
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
											<div class="form-group col-sm-2">
												<label for="inputCEP">Seu CEP</label>
												<input type="text" class="form-control" id="inputCEP" placeholder="XXXXX-XXX">
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-sm-12">
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox"> Desejo receber as novidades e atualizações do sistema
													</label>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label for="exampleFormControlTextarea1">Mande sua mensagem para nós</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col-sm-12">
												<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Enviar </button>
												<a tabindex="0" class="btn btn-dark " role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
												title="Pintou alguma dúvida?!" data-content="Fale conosco: help@corta7systems.com">Ajuda</a>
											</div>
										</div>

									</div>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>


		</section>

		<!-- Rodape -->
		<footer id="rodape">
			<div class="container">
				<div class="row">

					<div class="col-md-2">
						<a href="index.php" id="rodape-logo">Corta7</a>
					</div>

					<div class="col-md-2">
						<h4>Companhia</h4>
						<ul class="nav">
							<li><a href="sobre.php">Sobre</a></li>
							<li><a href="">Empregos</a></li>
							<li><a href="">Imprensa</a></li>
							<li><a href="">Novidades</a></li>
						</ul>
					</div>

					<div class="col-md-2">
						<h4>comunidades</h4>
						<ul class="nav">
							<li><a href="">Artistas</a></li>
							<li><a href="">Desenvolvedores</a></li>
							<li><a href="">Marcas</a></li>
						</ul>
					</div>

					<div class="col-md-2">
						<h4>links uteis</h4>
						<ul class="nav">
							<li><a href="">Ajuda</a></li>
							<li><a href="quem-somos.php">Quem Somos</a></li>
							<li><a href="contato.php">Contatos</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<ul class="nav">
							<li class="item-rede-social"><a href=""><img src="imagens/facebook.png"></a></li>
							<li class="item-rede-social"><a href=""><img src="imagens/twitter.png"></a></li>
							<li class="item-rede-social"><a href=""><img src="imagens/instagram.png"></a></li>
						</ul>
					</div>

				</div><!-- /row -->
			</div>
		</footer>        


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>