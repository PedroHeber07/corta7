<?php

session_start();

require_once('db.class.php');

$nomeServ = $_POST['inputNomeSer'];
$valorServ =  $_POST['inputPrecoSer'];
$fk_empresa = $_POST['inputempresaServ'];


$objDb = new db();
$link = $objDb->conecta_mysql();


//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql);
$dados_func = mysqli_fetch_array($resultado_id);
$servempresa = $dados_func['idempresa'];
//echo $funcempresa;

$nomeserv_existe = false;

//verificar se o cpf do funcionário Já existe no sistema
$sql = " select * from tbservicos where nome_servico = '$nomeServ' ";
if ($resultado_id = mysqli_query($link, $sql)){
	$dados_servico = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_servico['nome_servico'])){
		$nomeserv_existe = true;
	} 
} else {
	echo "Erro ao tentar localizar o Nome do serviço!";
}

//verificar amanhã

if($nomeserv_existe){

	$retorno_get = '';
	$retorno_get.=	"erro_nomeserv=1&";		
	header('Location: home.php?'.$retorno_get);
	die();
}

$sql = " INSERT INTO tbservicos(nome_servico, valor_servico, fk_empresa) values('$nomeServ', '$valorServ', '$servempresa')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar Serviço!!!";
}

?>