<?php

session_start();

include_once('db.class.php');

$idempresa = $_POST['inputidEmpresa'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbempresa where idempresa='$idempresa '";

if (mysqli_query($link, $sql)){
	header('Location: empresascadastradas.php');

} else {	
	echo "Erro ao Excluir a Empresa!!!";
}

?>