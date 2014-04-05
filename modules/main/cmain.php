<?php
	//include_once '../../inc/controlador.php';
	class Cmain extends Controlador{
		var $nolayout=false;
		function Cmain($module,&$modelo,&$vista){
			parent::Controlador($module,$modelo,$vista);
			if (isset($_GET['output'])) {
				$this->nolayout=true;
				$this->pasa_vista("output",$_GET['output']);
			}
			$this->carga_accion();
			if ($this->nolayout==false) {
				$vista->display("index.tpl");	
			}else{
				$vista->display("main.tpl");
			}
			
	}
		function action_index(){
		}
	}
?>
