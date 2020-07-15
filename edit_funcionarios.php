<?php

session_start();

include_once('db.class.php');

$idfunc = $_POST['inputidfunc'];
$nomefunc = $_POST['inputNomeFunc'];
$rg =  $_POST['inputRgFunc'];
$cpf =  $_POST['inputCpfFunc'];
$dataNasc = $_POST['inputNascFunc'];
$contatofunc =  $_POST['inputContatoFunc'];
$endfunc = $_POST['inputEnderecoFunc'];
$bairrofunc = $_POST['inputBairroFunc'];
$cidadefunc =  $_POST['inputCidadeFunc'];
$estadofunc = $_POST['inputEstFunc'];
$cepfunc = $_POST['inputCEPFunc'];
$pisfunc = $_POST['inputPisFunc'];
$fk_empresa = $_POST['inputempresaFunc'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql1 = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = "UPDATE tbfuncionario SET nome_func='$nomefunc', fone_func='$contatofunc', func_nasc='$dataNasc', func_end='$endfunc', func_bairro='$bairrofunc', func_cidade='$cidadefunc', func_uf='$estadofunc', func_cep='$cepfunc', func_cpf='$cpf', func_rg='$rg', fk_empresa='$funcempresa' WHERE id_func='$idfunc'";

if (mysqli_query($link, $sql)){
	header('Location: funcionarioscadastrados.php');

} else {	
	echo "Erro ao Atualizar o Funcionario!!!";
}

?>