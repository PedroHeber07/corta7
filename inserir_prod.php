<?php

session_start();

include_once('db.class.php');

$primproduto = $_POST['primproduto'];
$primquantidade =  $_POST['primquantidade'];
$secproduto =  $_POST['secproduto'];
$secquantidade = $_POST['secquantidade'];
$terproduto = $_POST['terproduto'];
$terquantidade = $_POST['terquantidade'];
$idatend = $_POST['inputIdAtend'];

$objDb = new db();
$link = $objDb->conecta_mysql();

//recuperando chave estrangeira
$sql = "SELECT * FROM tbatendimento WHERE id_atendimento = '$idatend'";
$resultado_id = mysqli_query($link, $sql);
$dados_atend = mysqli_fetch_array($resultado_id);
$funcatend = $dados_atend['id_atendimento'];

$sql1 = "SELECT * FROM tbprodutos WHERE produtoid = '$primproduto'";
$resultado_prod1 = mysqli_query($link, $sql1);
$dados_prod1 = mysqli_fetch_array($resultado_prod1);
$funcprod1 = $dados_prod1['produtoid'];
$funcquant1 = $dados_prod1['uni_estoque'];

$sql2 = "SELECT * FROM tbprodutos WHERE produtoid = '$secproduto'";
$resultado_prod2 = mysqli_query($link, $sql2);
$dados_prod2 = mysqli_fetch_array($resultado_prod2);
$funcprod2 = $dados_prod2['produtoid'];
$funcquant2 = $dados_prod2['uni_estoque'];

$sql3 = "SELECT * FROM tbprodutos WHERE produtoid = '$terproduto'";
$resultado_prod3 = mysqli_query($link, $sql3);
$dados_prod3 = mysqli_fetch_array($resultado_prod3);
$funcprod3 = $dados_prod3['produtoid'];
$funcquant3 = $dados_prod3['uni_estoque'];

$quant_prod1 = $funcquant1 - $primquantidade;
$quant_prod2 = $funcquant2 - $secquantidade;
$quant_prod3 = $funcquant3 - $terquantidade;

$sql5 = "UPDATE tbprodutos SET uni_estoque = '$quant_prod1' WHERE produtoid= '$funcprod1'";
$resultado_quant1 = mysqli_query($link, $sql5);
$sql6 = "UPDATE tbprodutos SET uni_estoque = '$quant_prod2' WHERE produtoid= '$funcprod2'";
$resultado_quant2 = mysqli_query($link, $sql6);
$sql7 = "UPDATE tbprodutos SET uni_estoque = '$quant_prod3' WHERE produtoid= '$funcprod3'";
$resultado_quant3 = mysqli_query($link, $sql7);

$sql4 = " INSERT INTO tbitens(quant_produto_atendimento, fk_produto_atend, fk_atendimento) values ('$primquantidade','$funcprod1','$funcatend'), ('$secquantidade','$funcprod2','$funcatend'), ('$terquantidade','$funcprod3','$funcatend')";

if (mysqli_query($link, $sql4)){
	header('Location: atendimentoscadastrados.php');

} else {	
	echo "Erro ao registrar o Produtos no atendimento!!!";
}

?>