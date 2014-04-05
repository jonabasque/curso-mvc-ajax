<?php
class Modelo{
	
	var $link;
	var $database;
	var $host;
	var $username;
	var $password;
	
	function Modelo($host,$user,$pass,$database){
		$this->database=$database;
		$this->username=$user;
		$this->password=$pass;
		$this->host=$host;
		$this->conecta();
	}
	
	function conecta(){
		$this->link=mysql_connect(
							$this->host,
							$this->username,
							$this->password);
		mysql_select_db($this->database,
						$this->link);
	}
	function consulta($sql){
		$respuesta=mysql_query($sql);
		return $respuesta;
	}
	function desconecta(){
		mysql_close($this->link);
	}
}
?>