<?php

session_start();

require_once('db.class.php');

$nomecli = $_POST['inputNomeCliente'];
$rgcli =  $_POST['inputRgCli'];
$nasccli =  $_POST['inputNascCliente'];
$cpfcli = $_POST['inputCpfCli'];
$emailcli = $_POST['inputEmailCli'];
$contatocli =  $_POST['inputContatoCliente'];
$endcli = $_POST['inputEnderecoCli'];
$bairrocli = $_POST['inputBairroCli'];
$cidadecli =  $_POST['inputCidadeCli'];
$estadocli = $_POST['inputEstCli'];
$cepcli = $_POST['inputCEPCli'];
$fk_empresa = $_POST['inputempresaCli'];


$objDb = new db();
$link = $objDb->conecta_mysql();


//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql);
$dados_func = mysqli_fetch_array($resultado_id);
$cliempresa = $dados_func['idempresa'];
//echo $funcempresa;

$rg_existe = false;
$cpf_existe = false;
//verificar se o cpf do cliente Já existe no sistema
$sql = " select * from tbclientes where cpfcli = '$cpfcli' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_cli = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_cli['cpfcli'])){
		$cpf_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o cpf do Cliente!";
}

	//verificar se o rg já existe
$sql = " select * from tbclientes where rgcli = '$rgcli' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_cli = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_cli['rgcli'])){
		$rg_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o registro do rg do Cliente!";
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

$sql = " INSERT INTO tbclientes(nomecli, endcli, cidadecli, bairrocli, ufcli, cepcli, rgcli, cpfcli, fonecli, emailcli, fk_empresa) VALUES ('$nomecli','$endcli','$cidadecli','$bairrocli','$estadocli','$cepcli','$rgcli','$cpfcli','$contatocli','$emailcli','$cliempresa')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar o Cliente!!!";
}

?>