<?php

session_start();

include_once('db.class.php');

$idforn = $_POST['inputidforn'];
$nomeforn = $_POST['inputNomeForn'];
$cnpjforn =  $_POST['inputCnpjForn'];
$emailforn =  $_POST['inputEmailForn'];
$contatoforn =  $_POST['inputFoneForn'];
$fk_empresa = $_POST['inputFornEmp'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql1 = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = "UPDATE tbfornecedor SET nome_fornecedor='$nomeforn', emailfornecedor='$emailforn ', fonefornecedor='$contatoforn', cnpjfornecedor='$cnpjforn', fk_empresa='$funcempresa' WHERE id_fornecedor='$idforn'";

if (mysqli_query($link, $sql)){
	header('Location: fornecedorescadastrados.php');

} else {	
	echo "Erro ao Atualizar o Fornecedores!!!";
}

?>