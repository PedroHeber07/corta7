<?php

session_start();

include_once('db.class.php');

$fornentrada = $_POST['inputFornEntrada'];
$funcentrada=  $_POST['inputFuncEntrada'];
$empresaentrada = $_POST['inputEmpEntrada'];


$objDb = new db();
$link = $objDb->conecta_mysql();

//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$empresaentrada'";
$resultado_id = mysqli_query($link, $sql);
$dados_emp = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_emp['idempresa'];
//echo $funcempresa;

//recuperando chave estrangeira
$sql1 = "SELECT * FROM tbfornecedor  WHERE nome_fornecedor = '$fornentrada'";
$resultado_id1 = mysqli_query($link, $sql1);
$dados_forn = mysqli_fetch_array($resultado_id1);
$funcforn = $dados_forn['id_fornecedor'];
//echo $funcforn;

//recuperando chave estrangeira
$sql2 = "SELECT * FROM tbfuncionario  WHERE nome_func = '$funcentrada'";
$resultado_id2 = mysqli_query($link, $sql2);
$dados_func = mysqli_fetch_array($resultado_id2);
$funcfunc = $dados_func['id_func'];
//echo $funcfunc;

$sql4 = " INSERT INTO entradaProduto (fk_empresa, fk_entrada_func, fk_entrada_forn) values('$funcempresa','$funcfunc','$funcforn')";

if (mysqli_query($link, $sql4)){
	header('Location: entradascadastradas.php');

} else {	
	echo "Erro ao registrar a Entrada!!!";
}

?>