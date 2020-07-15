<?php

session_start();

require_once('db.class.php');

$descprodut = $_POST['inputNomePro'];
$valorprod =  $_POST['inputPrecoPro'];
$uniestoque =  $_POST['inputUniPro'];
$fk_empresa = $_POST['inputempresaProd'];


$objDb = new db();
$link = $objDb->conecta_mysql();


//recuperando chave estrangeira
$sql = "SELECT * FROM tbempresa WHERE nome = '$fk_empresa'";
$resultado_id = mysqli_query($link, $sql);
$dados_func = mysqli_fetch_array($resultado_id);
$funcempresa = $dados_func['idempresa'];
//echo $funcempresa;

$sql = " INSERT INTO tbprodutos(descricao_pro, preco_venda, uni_estoque, fk_empresa) values('$descprodut','$valorprod','$uniestoque','$funcempresa')";

if (mysqli_query($link, $sql)){
	header('Location: home.php');

} else {	
	echo "Erro ao registrar o Produto!!!";
}

?>