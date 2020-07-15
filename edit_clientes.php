<?php

session_start();

include_once('db.class.php');

$idcli = $_POST['inputidcli'];
$nomecli = $_POST['inputNomeCliente'];
$rgcli =  $_POST['inputRgCli'];
$nasccli =  $_POST['inputNascCliente'];
$cpfcli = $_POST['inputCpfCli'];
$emailcli = $_POST['inputEmailCli'];
$contatocli =  $_POST['inputContatoCliente'];
$endcli = $_POST['inputEnderecoCli'];
$bairrocli = $_POST['inputBairroCli'];
$cidadecli =  $_POST['inputCidadeCli'];
$estadocli = $_POST['inputEstCli'];
$cepcli = $_POST['inputCEPCli'];
$fk_empresa = $_POST['inputempresaCli'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql1 = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql1);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = "UPDATE tbclientes SET nomecli='$nomecli', endcli='$endcli', cidadecli='$cidadecli', bairrocli='$bairrocli', ufcli='$estadocli', cepcli='$cepcli', rgcli='$rgcli', cpfcli='$cpfcli ', fonecli='$contatocli', emailcli='$emailcli', fk_empresa='$funcempresa' WHERE id_cliente='$idcli'";

if (mysqli_query($link, $sql)){
	header('Location: clientescadastrados.php');

} else {	
	echo "Erro ao Atualizar o Funcionario!!!";
}

?>