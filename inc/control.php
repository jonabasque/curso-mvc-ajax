<?php

include_once 'conf/config.php';
include_once "modelo.php";
include_once "widgets.php";
include_once 'controlador.php';
class Control{
	var $modelo;
	
	function Control(){
		global $host,$username,$password,$database;
		//cargo el modelo
		$this->modelo=new Modelo($host,
								$username,
								$password,
								$database);
		//carga header
		include_once "tema/header.php";
		$this->cargamodulo();	
		//cargafooter
		include_once "tema/footer.php";
		$this->modelo->desconecta();
	}
	
	
	function cargamodulo(){
		//print_r($_GET);
		if (isset($_GET['module'])
			&& $_GET['module']!=null 
			&& $_GET['module']!=""
		) {
			$module=$_GET['module'];
		}else{
			$module="main";
		}
		//cargar el modulo
		$modulefile="modules/".$module."/c".$module.'.php';
		include_once $modulefile;
		$nclase="C".$module;
		$objeto=new $nclase($module,$this->modelo);
	}
}
?>