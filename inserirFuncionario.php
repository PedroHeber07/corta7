<?php

session_start();

require_once('db.class.php');

$nomefunc = $_POST['inputNomeFunc'];
$rg =  $_POST['inputRgFunc'];
$cpf =  $_POST['inputCpfFunc'];
$dataNasc = $_POST['inputNascFunc'];
$contatofunc =  $_POST['inputContatoFunc'];
$endfunc = $_POST['inputEnderecoFunc'];
$bairrofunc = $_POST['inputBairroFunc'];
$cidadefunc =  $_POST['inputCidadeFunc'];
$estadofunc = $_POST['inputEstFunc'];
$cepfunc = $_POST['inputCEPFunc'];
$pisfunc = $_POST['inputPisFunc'];
$fk_empresa = $_POST['inputempresaFunc'];


$objDb = new db();
$link = $objDb->conecta_mysql();


//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$rg_existe = false;
$cpf_existe = false;
//verificar se o cpf do funcionário Já existe no sistema
$sql = " select * from tbfuncionario where func_cpf = '$cpf' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_funcionario = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_funcionario['func_cpf'])){
		$cpf_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o cpf do funcionário!";
}

	//verificar se o rg já existe
$sql = " select * from tbfuncionario where func_rg = '$rg' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_funcionario = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_funcionario['func_rg'])){
		$rg_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o registro do rg do funcionario!";
}

if($cpf_existe || $rg_existe){

	$retorno_get = '';

	if($cpf_existe){
		$retorno_get.=	"erro_cpf=1&";		
	}


	if($rg_existe){
		$retorno_get.=	"erro_rg=1&";		
	}

	header('Location: home.php?'.$retorno_get);
	die();

}

$sql = " INSERT INTO tbfuncionario(nome_func, fone_func, func_nasc, func_end, func_bairro, func_cidade, func_uf, func_cep,  func_cpf, func_rg, func_pis, fk_empresa) values('$nomefunc','$contatofunc','$dataNasc','$endfunc','$bairrofunc','$cidadefunc','$estadofunc','$cepfunc','$cpf','$rg', '$pisfunc', '$funcempresa')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar Empresa!!!";
}

?>





