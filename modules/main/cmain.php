<?php
	//include_once '../../inc/controlador.php';
	class Cmain extends Controlador{
		function Cmain($module,&$modelo,&$vista){
			parent::Controlador($module,$modelo,$vista);
			$this->carga_accion();
			$vista->display("index.tpl");
		}
		function action_index(){
		}
	}
?>
