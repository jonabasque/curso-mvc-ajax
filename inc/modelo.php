<?php
function conecta($host,$username,$password,$database){
	mysql_connect($host,$username,$password);
	mysql_select_db($database);
}
function consulta($sql){
	$respuesta=mysql_query($sql);
	return $respuesta;
}
function desconecta(){
	mysql_close();
}
?>