<?php

session_start();

include_once('db.class.php');

$idprod = $_POST['inputidProd'];
$descprodut = $_POST['inputNomePro'];
$valorprod =  $_POST['inputPrecoPro'];
$uniestoque =  $_POST['inputUniPro'];
$fk_empresa = $_POST['inputempresaProd'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql1 = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = "UPDATE tbprodutos SET descricao_pro='$descprodut', preco_venda='$valorprod', uni_estoque='$uniestoque', fk_empresa='$funcempresa' WHERE produtoid='$idprod'";

if (mysqli_query($link, $sql)){
	header('Location: produtoscadastrados.php');

} else {	
	echo "Erro ao Atualizar o Serviço!!!";
}

?>