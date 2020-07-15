<?php

session_start();

include_once('db.class.php');

$idprod= $_POST['inputidProduto'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbprodutos where produtoid='$idprod'";

if (mysqli_query($link, $sql)){
	header('Location: produtoscadastrados.php');

} else {	
	echo "Erro ao Excluir o Produto!!!";
}

?>