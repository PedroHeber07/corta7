<?php

session_start();

include_once('db.class.php');

$nomeusu = $_SESSION['usuario'];
$emailusu =  $_POST['email'];
$senhausu = md5($_POST['senha']);


$objDb = new db();
$link = $objDb->conecta_mysql();


$sql1 = "SELECT * FROM usuarios WHERE usuario = '$nomeusu'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcusu = $dados_func['id'];
//echo $funcempresa;

$sql = "UPDATE usuarios SET email='$emailusu', senha='$senhausu' WHERE id='$funcusu'";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao Atualizar o Usuário!!!";
}

?>