<?php
class Controlador{
	var $module;
	var $action;
	var $modelo;
	function Controlador($module,&$modelo){
		$this->module=$module;
		$this->modelo=$modelo;
		
	}
	function carga_accion(){
		//seleccion de la accion
		if (isset($_GET['action'])
			&& $_GET['action']!=NULL
			&& $_GET['action']!=""
		) {
			$this->action=$_GET['action'];
		}else{
			$this->action="index";
		}
		//ejecucion de la accion
		$nombrefunc="action_".$this->action;
		$this->$nombrefunc();
	}
	function consulta($sql){
		return $this->modelo->consulta($sql);
	}
}
?>