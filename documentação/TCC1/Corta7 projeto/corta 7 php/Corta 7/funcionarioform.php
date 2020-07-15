<div class="panel panel-default">
	<div class="panel-body">
		<h3 style="font-size: 35px;
		font-weight: 700;
		letter-spacing: -0.04em; color: #7c25f8;">Funcionários </h3> 
		<hr />
		<div class="row justify-content-center mb-6">
			<div class="col-sm-12 col-md-10 col-gl-8">
				<form method="post" action="#" id="formFunc">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="inputNomeFunc">Nome</label>
							<input type="text" class="form-control" id="inputNomeFunc" name="inputNomeFunc" placeholder="Digite o nome do Funcionário">
						</div>
						<div class="form-group col-sm-6">
							<label for="inputRgCli">R.G</label>
							<input type="text" class="form-control" id="inputRgCli" name="inputRgCli"placeholder="Ex. XX.XXX.XXX-X">
						</div>
						<div class="form-group col-sm-6">
							<label for="inputCpfFunc">CPF</label>
							<input type="text" class="form-control" id="inputCpfFunc" name="inputCpfFunc"placeholder="Ex. XXX.XXX.XXX-XX">
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputNascFunc">Nascimento</label>
								<input type="date" class="form-control" id="inputNascFunc" name="inputNascFunc">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputEmailFunc">Email</label>
								<input type="inputEmailFunc" class="form-control" id="inputEmailFunc" name="inputEmailCli" placeholder="Digite o e-mail do Funcionário">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputContatoCliente">Contato</label>
								<input type="text" class="form-control" id="inputContatoCliente" name="inputContatoCliente" placeholder="Digite Cel/Tel do cliente">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputEnderecoCli">Endereço</label>
								<input type="text" class="form-control" id="inputEnderecoCli" name="inputEnderecoCli"placeholder="Digite o Endereço do cliente">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputBairroCli">Bairro</label>
								<input type="text" class="form-control" id="inputBairroCli" name="inputBairroCli"placeholder="Digite o bairro do cliente ">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-5">
								<label for="inputCidadeCli">Cidade</label>
								<input type="text" class="form-control" id="inputCidadeCli" name="inputCidadeCli" placeholder="Digite aqui a cidade do cliente">
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
								<input type="text" class="form-control" id="inputCEPCli" name="inputCEPCli" placeholder="XXXXX-XXX">
							</div>
						</div>
						<div class="form-row">
							<div class="col-sm-6">
								<label for="inputPisFunc">PIS/PASEP</label>
								<input type="text" class="form-control" id="inputPisFunc" name="inputPisFunc" placeholder="Ex. XXX.XXXXX.XX-X">
								<br />
							</div>
							<div class="col-sm-6">
								<label for="inputPisFunc">Remuneração</label>
								<input type="text" class="form-control" id="inputPisFunc" name="inputPisFunc" placeholder="R$">
								<br />
							</div>
						</div>
						<div class="form-row">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-roxo btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Salvar </button>
								<button type="submit" class="btn btn-danger btn-sm" style="text-transform: uppercase; transition: background 0.4s, color 0.4s; color: white;"> Excluir </button>
								<a tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
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