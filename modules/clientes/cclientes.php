<?php

class Cclientes extends Controlador{
	function Cclientes($module,&$modelo,&$vista){
			parent::Controlador($module,$modelo,$vista);
			$this->carga_accion();
			$vista->display("index.tpl");
		}
	
	
	function action_listado(){
		$sql = "select * from cliente";
		if(isset($_POST['patron'])
			&& $_POST['patron']!=null 
			&& $_POST['patron']!=""){
			$sql.=" where ";
			$sql.=" nombre LIKE '%".$_POST['patron']."%' ";
			$sql.=" OR cif LIKE '%".$_POST['patron']."%' ";
			$patron=$_POST['patron'];	
		}else{
			$patron="";
		}
		$this->pasa_vista("patron", $patron);
		//echo $sql."<br/>";
		$datos=$this->consulta($sql);
		$this->pasa_vista("datos", $datos);
		//include_once "vistas/vlistado.php";
	}
	function action_index(){
		$this->action_listado();
	}
	function action_buscar(){
	}
	function action_add(){
		if (isset($_POST['data'])) {
			//echo "proceso del formulario";
			$valida=false;
			$datos=$_POST['data'];
			if (isset($datos['nombre']) &&
				$datos['nombre']!=null &&
				$datos['nombre']!=""){
				$valida=true;
			}
			if ($valida==true) {
			
				// insert into cliente values (
				// NULL,'$datos['nombre']','$datos['cif']'
				//)
				$sql = "insert into cliente values (".
				"NULL,'".$datos['nombre']."',";
				if ($datos['cif']!=null && $datos['cif']!="") {
					$cif="'".$datos['cif']."'";
				}else{
					$cif="NULL";
				}
				//meto el cif a la sql
				$sql.=$cif;
				//cierro la sql
				$sql.=")";
				echo $sql."<br/>";
				//ejecuto la sql
				$respuesta=$this->insert($sql);
				
				if ($respuesta>0) {
					//la ha añadido
					echo "Datos guardados";
					$this->action_listado();
				}else{
					//ha fallado el salvado
					echo "Ha ocurrido un fallo al guardar";
				}
				echo "<br/>";
			}else{
				include "vistas/vadd.php";
			}
		}else{
			include "vistas/vadd.php";
		}
		
		
	}
	function action_edit(){
		
		if (isset($_POST['data'])) {
			//echo "proceso del formulario";
			$valida=false;
			$datos=$_POST['data'];
			if (isset($datos['nombre']) &&
				$datos['nombre']!=null &&
				$datos['nombre']!=""){
				$valida=true;
			}
			if ($valida==true) {
				
				// update cliente set
				// nombre='nombredado', cif='cifdado'
				// where id=6
				$sql="update cliente set ";
				$sql.="nombre='".$datos['nombre']."', ";
				$sql.="cif='".$datos['cif']."' ";
				$sql.=" where id=".$datos['id'];
				echo $sql."<br/>";
				//ejecuto la sql
				$respuesta=$this->update($sql);
				if ($respuesta==1) {
					//la ha añadido
					echo "Datos guardados";
					$this->action_listado();
				}else{
					//ha fallado el salvado
					echo "Ha ocurrido un fallo al guardar";
				}
				echo "<br/>";
			}else{
				include "vistas/vedit.php";
			}
		}else{
			$sql="select * from cliente where id=".$_GET['id'];
			$datos=$this->consulta($sql);
			echo $sql;
			
			$datos=$datos[0];
			include "vistas/vedit.php";
		}
	
	}
	function action_show($delete=false){
		
	$sql = "select * from cliente where id=".
	$_GET['id'];
	print_r($sql);
	echo "<br/>";
	$datos=$this->consulta($sql);
	
	if (is_array($datos) && count($datos)>0) {
		include_once "vistas/vshow.php";
	}
	
	}
	function action_delete(){
	
		if (isset($_GET['confirm'])
			&&$_GET['confirm']==1) {
			//borrar realmente
			$sql="delete from cliente where id=".
			$_GET['id'];
			$respuesta=$this->delete($sql);
			
			if($respuesta==1){
				echo "Elemento Borrado<br/>";
			}else{
				echo "Fallo en la BBDD, ".
				"contracte con el administrador! JURL!";
			}
			$this->action_listado();
		}else{
			$this->action_show(true);
		}
	}
}
?>
