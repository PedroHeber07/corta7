<?php

session_start();

include_once('db.class.php');

$idfunc = $_POST['inputidfunc'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "DELETE FROM tbfuncionario where id_func='$idfunc'";

if (mysqli_query($link, $sql)){
	header('Location: funcionarioscadastrados.php');

} else {	
	echo "Erro ao Excluir o Funcionário!!!";
}

?>