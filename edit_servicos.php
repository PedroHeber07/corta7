<?php

session_start();

include_once('db.class.php');

$idserv = $_POST['inputidServ'];
$nomeServ = $_POST['inputNomeSer'];
$valorServ =  $_POST['inputPrecoSer'];
$fk_empresa = $_POST['inputempresaServ'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql1 = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = "UPDATE tbservicos SET nome_servico='$nomeServ', valor_servico='$valorServ', fk_empresa='$funcempresa' WHERE id_servico='$idserv'";

if (mysqli_query($link, $sql)){
	header('Location: servicoscadastrados.php');

} else {	
	echo "Erro ao Atualizar o Serviço!!!";
}

?>