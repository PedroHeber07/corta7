<?php

class db{
		//host, usuario, senha e banco de dados

	private $host = 'localhost';
	private $usuario = 'u591578783_root';
	private $senha = 'pedro123';
	private $database = 'u591578783_corta7_db';



	public function conecta_mysql(){
		//criar a conexao
		$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
		//ajustando charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');
		//verificar se houve erro de conexao
		if(mysqli_connect_errno()){
			echo "Erro ao Tentar se conectar com o banco de dados MYSQL ".mysqli_connect_error();
		}

		return $con;
	}
}

?>