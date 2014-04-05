<?php
class Cidioma extends Controlador{
	function Cidioma($module,&$modelo,&$vista){
		parent::Controlador($module,$modelo,$vista);
		$this->carga_accion();
		$vista->display("index.tpl");
	}
	function action_change(){
		if (isset($_GET['idioma'])) {
			setcookie("idioma",$_GET['idioma'],time()+(3600*24*365));
			$_SESSION['idioma']=$_GET['idioma'];
			$this->pasa_vista("session", $_SESSION);
		}
	}
	function action_index(){
		$this->action_change();
	}
}
?>