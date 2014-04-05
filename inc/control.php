<?php

include_once 'conf/config.php';
include_once "modelo.php";
include_once "vista.php";
include_once "widgets.php";
include_once 'controlador.php';
class Control{
	var $modelo;
	var $vista;
	function Control(){
		global $host,$username,$password,$database;
		//cargo el modelo
		$this->modelo=new Modelo($host,
								$username,
								$password,
								$database);
		$this->vista=new vista();
		
		$this->cargamodulo();	
		
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
		$objeto=new $nclase($module,$this->modelo,$this->vista);
	}
}
?>