<?php

session_start();

require_once('db.class.php');

$nomeEmpresa = $_POST['inputNomeEmpresa'];
$cnpj =  $_POST['inputCnpj'];
$nomeFantasia = $_POST['inputNomeFantasia'];
$emailEmpresa = $_POST['inputEmailEmp'];
$contatoEmpresa =  $_POST['inputContatoEmp'];
$endEmpresa = $_POST['inputEndereco'];
$bairroEmpresa = $_POST['inputBairroEmp'];
$cidadeEmpresa =  $_POST['inputCidadeEmp'];
$estadoEmp = $_POST['inputEst'];
$cepEmpresa = $_POST['inputCEP'];
$fk_usuario = $_SESSION['id_usuario'];


$objDb = new db();
$link = $objDb->conecta_mysql();


$nome_existe = false;
$cnpj_existe = false;


	//verificar se A Empresa Já existe já existe
$sql = " select * from tbempresa where nome = '$nomeEmpresa' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_empresa = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_empresa['nome'])){
		$nome_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o registro do nome Empresa!";
}

	//verificar se o email já existe
$sql = " select * from tbempresa where cnpjemp = '$cnpj' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_empresa = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_empresa['cnpjemp'])){
		$cnpj_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o registro do CNPJ da Empresa!";
}

if($nome_existe || $cnpj_existe){

	$retorno_get = '';

	if($nome_existe){
		$retorno_get.=	"erro_nome=1&";		
	}


	if($cnpj_existe){
		$retorno_get.=	"erro_cnpj=1&";		
	}

	header('Location: home.php?'.$retorno_get);
	die();

}


$sql = " INSERT INTO tbempresa(nome, fantasia, emailempresa, foneemp, endemp, bairroemp, cidadeemp, ufemp, cepemp, cnpjemp, fk_usuario) values('$nomeEmpresa','$nomeFantasia','$emailEmpresa','$contatoEmpresa','$endEmpresa','$bairroEmpresa','$cidadeEmpresa','$estadoEmp','$cepEmpresa','$cnpj', '$fk_usuario')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar Empresa!!!";
}

?>