<?php

require_once("config.php");

class Database{

	public $conexao;

	function __construct(){
		$config = new Databaseconfig();
		return $this->open_db_conection($config);
	}


public function open_db_conection($config){

	$this->conexao = mysql_connect($servidor, $usuario, $senha);

	if(!$this->conexao) {
		die("Não foi possível se conectar ao banco de dados.");
	}

	return $this->conexao;
}


public function query($sql){

	$result = pg_query($this->conexao, $sql);


	return $result;
} 


private function confirm_query($result){

	if(!$result){
		die("Query failed!");
	}
}


public function escape_string($string){

	$escaped_string = pg_escape_string($this->conexao, $string);
	return $escaped_string;
}


} // END OF CLASS DATABASE

$database = new Database();
?>