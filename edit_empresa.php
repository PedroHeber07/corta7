<?php

session_start();

include_once('db.class.php');

$idempresa = $_POST['inputidEmpresa'];
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

$sql = "UPDATE tbempresa SET nome='$nomeEmpresa', fantasia='$nomeFantasia', emailempresa='$emailEmpresa', foneemp='$contatoEmpresa', endemp='$endEmpresa', bairroemp='$bairroEmpresa', cidadeemp='$cidadeEmpresa', ufemp='$estadoEmp', cepemp='$cepEmpresa', cnpjemp='$cnpj', fk_usuario='$fk_usuario' WHERE idempresa='$idempresa'";

if (mysqli_query($link, $sql)){
	header('Location: empresascadastradas.php');

} else {	
	echo "Erro ao Atualizar a Empresa!!!";
}

?>