<?php

session_start();

include_once('db.class.php');

$idserv= $_POST['inputidserv'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbservicos where id_servico='$idserv'";

if (mysqli_query($link, $sql)){
	header('Location: servicoscadastrados.php');

} else {	
	echo "Erro ao Excluir o Serviço!!!";
}

?>