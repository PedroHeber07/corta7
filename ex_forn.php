<?php

session_start();

include_once('db.class.php');

$idforn= $_POST['inputidforn'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbfornecedor where id_fornecedor='$idforn'";

if (mysqli_query($link, $sql)){
	header('Location: fornecedorescadastrados.php');

} else {	
	echo "Erro ao Excluir o Fornecedor!!!";
}

?>