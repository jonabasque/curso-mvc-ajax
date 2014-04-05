<?php
function carga_accion($module){
	//seleccion de la accion
	if (isset($_GET['action'])
		&& $_GET['action']!=NULL
		&& $_GET['action']!=""
	) {
		$action=$_GET['action'];
	}else{
		$action="index";
	}
	//ejecucion de la accion
	$nombrefunc=$module."_action_".$action;
	$nombrefunc();
}
?>