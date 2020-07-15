<?php

session_start();

include_once('db.class.php');

$clienteatend = $_POST['inputClienteAtendimento'];
$funcatend =  $_POST['inputFuncAtend'];
$empresaatend = $_POST['inputEmpAtend'];


$objDb = new db();
$link = $objDb->conecta_mysql();

//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$empresaatend'";
$resultado_id = mysqli_query($link, $sql);
$dados_emp = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_emp['idempresa'];

//recuperando chave estrangeira
$sql1 = "SELECT * FROM tbclientes  WHERE nomecli = '$clienteatend'";
$resultado_id1 = mysqli_query($link, $sql1);
$dados_cli = mysqli_fetch_array($resultado_id1);
$funccli = $dados_cli['id_cliente'];

//recuperando chave estrangeira
$sql2 = "SELECT * FROM tbfuncionario  WHERE nome_func = '$funcatend'";
$resultado_id2 = mysqli_query($link, $sql2);
$dados_func = mysqli_fetch_array($resultado_id2);
$funcfunc = $dados_func['id_func'];

$sql4 = " INSERT INTO tbatendimento(fk_empresa_atend, fk_cliente_atend, fk_func_atend) values('$funcempresa','$funccli','$funcfunc')";

if (mysqli_query($link, $sql4)){
	header('Location: atendimentoscadastrados.php');

} else {	
	echo "Erro ao registrar o Atendimento!!!";
}

?>
