<?php

require_once('db.class.php');

$nomeforn = $_POST['inputNomeForn'];
$cnpjforn =  $_POST['inputCnpjForn'];
$emailforn =  $_POST['inputEmailForn'];
$contatoforn =  $_POST['inputFoneForn'];
$fk_empresa = $_POST['inputFornEmp'];


$objDb = new db();
$link = $objDb->conecta_mysql();

//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;


$sql = " INSERT INTO tbfornecedor(nome_fornecedor, emailfornecedor, fonefornecedor, cnpjfornecedor, fk_empresa) values('$nomeforn','$emailforn','$contatoforn','$cnpjforn','$funcempresa')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar o fornecedor!!!";
}

?>