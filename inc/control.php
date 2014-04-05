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
		//manejo de sesion
		
		
		//cargo el modelo
		$this->modelo=new Modelo($host,
								$username,
								$password,
								$database);
		$this->vista=new vista();
		if (isset($_COOKIE['idioma'])) {
			$idioma=$_COOKIE['idioma'];
		}else{
			setcookie("idioma","es",time()+(3600*24*365*3));
			$idioma="es";
		}
		$_SESSION['idioma']=$idioma;
		if (!isset($_SESSION['user'])) {
			$this->vista->pasa_vista("presentalogin", true);
		}else{
			$this->vista->pasa_vista("presentalogin", false);
		}
		$this->vista->pasa_vista("session", $_SESSION);
		
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
		if($module!="idioma"){
			$_SESSION['lastmodule']=$module;
		}
		if ($this->tengopermiso($module)) {
			//cargar el modulo
			$modulefile="modules/".$module."/c".$module.'.php';
			include_once $modulefile;
			$nclase="C".$module;
			$objeto=new $nclase($module,$this->modelo,$this->vista);	
		} else {
			$module="error";
			$this->vista->pasa_vista("modulo", $module);
			$this->vista->display("index.tpl");
		}
		
		
	}
	function tengopermiso($module){
		if($module=='usuarios' && !isset($_SESSION['user'])){
			if($_GET['action']=="login"){
				return true;
			}else{
				return false;
			}
		}
		return true;
	}
}
?>