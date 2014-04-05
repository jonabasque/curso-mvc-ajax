<?php
class Controlador{
	var $module;
	var $action;
	var $modelo;
	var $vista;
	function Controlador($module,&$modelo,&$vista){
		$this->module=$module;
		$this->modelo=$modelo;
		$this->vista=$vista;
		$this->pasa_vista("modulo",$module);
		
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
		$this->pasa_vista("action", $this->action);
		//ejecucion de la accion
		$nombrefunc="action_".$this->action;
		$this->$nombrefunc();
	}
	function consulta($sql){
		return $this->modelo->consulta($sql);
	}
	function insert($sql){
		return $this->modelo->insert($sql);
	}
	function update($sql){
		return $this->modelo->update($sql);
	}
	function delete($sql){
		return $this->modelo->delete($sql);
	}
	function pasa_vista($nombre,$valor){
		$this->vista->pasa_vista($nombre,$valor);
	}
	function comprobar_email($email){
	    $mail_correcto = 0;
	    //compruebo unas cosas primeras
	    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
	       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
	          //miro si tiene caracter .
	          if (substr_count($email,".")>= 1){
	             //obtengo la terminacion del dominio
	             $term_dom = substr(strrchr ($email, '.'),1);
	             //compruebo que la terminación del dominio sea correcta
	             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
	                //compruebo que lo de antes del dominio sea correcto
	                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
	                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
	                if ($caracter_ult != "@" && $caracter_ult != "."){
	                   $mail_correcto = 1;
	                }
	             }
	          }
	       }
	    }
	    if ($mail_correcto)
	       return 1;
	    else
	       return 0;
	} 
}
?>