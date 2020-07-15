<?php

session_start();

include_once('db.class.php');

$idcli = $_POST['inputidCli'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbclientes where id_cliente='$idcli'";

if (mysqli_query($link, $sql)){
	header('Location: clientescadastrados.php');

} else {	
	echo "Erro ao Excluir o Cliente!!";
}

?>