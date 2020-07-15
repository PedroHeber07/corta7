<?php

session_start();

include_once('db.class.php');

$primserv= $_POST['primserv'];
$primquantidade =  $_POST['primquantidade'];
$secserv=  $_POST['secserv'];
$secquantidade = $_POST['secquantidade'];
$terserv = $_POST['terserv'];
$terquantidade = $_POST['terquantidade'];
$idatend = $_POST['inputIdAtend'];

$objDb = new db();
$link = $objDb->conecta_mysql();

//recuperando chave estrangeira
$sql = "SELECT * FROM tbatendimento WHERE id_atendimento = '$idatend'";
$resultado_id = mysqli_query($link, $sql);
$dados_atend = mysqli_fetch_array($resultado_id);
$funcatend = $dados_atend['id_atendimento'];

$sql1 = "SELECT * FROM tbservicos WHERE id_servico = '$primserv'";
$resultado_serv1 = mysqli_query($link, $sql1);
$dados_serv1 = mysqli_fetch_array($resultado_serv1);
$funcserv1 = $dados_serv1['id_servico'];

$sql2 = "SELECT * FROM tbservicos WHERE id_servico = '$secserv'";
$resultado_serv2 = mysqli_query($link, $sql2);
$dados_serv2 = mysqli_fetch_array($resultado_serv2);
$funcserv2 = $dados_serv2['id_servico'];

$sql3 = "SELECT * FROM tbservicos WHERE id_servico = '$terserv'";
$resultado_serv3 = mysqli_query($link, $sql3);
$dados_serv3 = mysqli_fetch_array($resultado_serv3);
$funcserv3 = $dados_serv3['id_servico'];

$sql4 = " INSERT INTO servicos_atendimento (quant_servico, fk_servico_atend, fk_atendimento_serv) values ('$primquantidade','$funcserv1','$funcatend'), ('$secquantidade','$funcserv2','$funcatend'), ('$terquantidade','$funcserv3','$funcatend')";

if (mysqli_query($link, $sql4)){
	header('Location: atendimentoscadastrados.php');

} else {	
	echo "Erro ao registrar o Servicos no atendimento!!!";
}