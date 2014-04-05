<?php
class Cusuarios extends Controlador{
	function Cusuarios($module,&$modelo,&$vista){
		parent::Controlador($module,$modelo,$vista);
		global $host,$username,$password,$database;
		$database="usuarios";
		//cargo el modelo
		$this->modelo->desconecta();
		$this->modelo=new Modelo($host,
								$username,
								$password,
								$database);
		$this->carga_accion();
		$vista->display("index.tpl");
	}


	function seleccionaprovincia($valor,$pos,$aprovs){
			
			if ($valor==$aprovs[$pos]) {
				echo ' selected="true" ';
			}
		
	}
	function action_login(){
		if (isset($_POST['data'])) {
			//echo "proceso del formulario";
			$valida=false;
			$datos=$_POST['data'];
			if (isset($datos['username']) &&
				$datos['username']!=null &&
				$datos['username']!="" &&
				isset($datos['password']) &&
				$datos['password']!=null &&
				$datos['password']!=""
				){
				$valida=true;
			}
			if ($valida==true) {
				//comprobacion de la contraseña y el user
				
				$sql=" select * from usuario where ";
				$sql.= " username='".$datos['username']."'";
				echo $sql;
				$respuesta=$this->consulta($sql);
				if (is_array($respuesta) 
					&& count($respuesta)==1
					) {
					//todo chuta
					$enc=$respuesta[0]['encmethod'];
					switch ($enc){
						case 'none':
							$encpass=$datos['password'];
							break;
						case "MD5":
							$encpass=md5($datos['password']);
					}
					
					if($encpass==$respuesta[0]['pass']){
						$mensaje="bienvenido ".$datos['username'];
						$this->pasa_vista("mensaje", $mensaje);
						$this->redir("validated");
					}else{
						$mensaje="usuario o contraseña Inválidos ";
						$this->pasa_vista("datos", $datos);
					}
				}else{
					
				}
				$this->pasa_vista("mensaje", $mensaje);
			}
		}else{
			$datos=array();
			$datos['username']="";
			$datos['password']="";
			$this->pasa_vista("datos", $datos);
		}
		
		
	}
	function action_validated(){
		
	}
	function action_register(){
		$sql="select * from ciudad";
		$ciudades=$this->consulta($sql);
		$this->pasa_vista("ciudades", $ciudades);
		if (isset($_POST['user'])) {
			$fallo=0;
			$user=$_POST['user'];
			$errores=array();
			foreach ($user as $key => $value) {
				if ($key!="envio" 
				&& ($value==null || $value=="")) {
					$errores[$key]=array();
					$errores[$key][]="El campo está vacío<br/>";	
				}
			}
			if (strlen($user['usuario'])>12 
				|| strlen($user['usuario'])<6) {
				$errores['usuario'][]="El campo debe tener ".
				"entre 6 y 12 caracteres.<br/>";
			}
			if (strlen($user['pass'])>20 
				|| strlen($user['pass'])<8) {
				$errores['pass'][]="El campo debe tener ".
				"entre 8 y 20 caracteres.<br/>";
			}
			if (strlen($user['pass2'])>20 
				|| strlen($user['pass2'])<8) {
				$errores['pass2'][]="El campo debe tener ".
				"entre 8 y 20 caracteres.<br/>";
			}
			if ($user['pass']!=$user['pass2'] || 
				($user['pass']==null && $user['pass2']==null)) {
				$errores['pass'][]="Los dos campos de la contraseña".
				" deben coincidir.<br/>";
				$errores['pass2'][]="Los dos campos de la contraseña".
				" deben coincidir.<br/>";
			}
			if (!$this->comprobar_email($user['email'])) {
				$errores['email'][]="Debe introducir un email "
				." válido";
			}
			if(!isset($user['cond'])){
				$errores['cond']=array();
				$errores['cond'][]="Debe aceptar las condiciones.<br/>";
			}
			if (!preg_match('`[a-z]`',$user['pass'])){
				$errores['pass'][]="La clave debe tener al menos una letra minúscula<br/>";
			}
		   	if (!preg_match('`[A-Z]`',$user['pass'])){
		      	$errores['pass'][]="La clave debe tener al menos una letra mayúscula<br/>";
		   	}
		   	if (!preg_match('`[0-9]`',$user['pass'])){
		      	$errores['pass'][]="La clave debe tener al menos un número<br/>";
		   	}
			if(count($errores)!=0){
				$fallo=1;
				//print_r($errores);
			}
			if($fallo==1){
				include "vistas/vadd.php";	
			}else{
				// insert into cliente values (
				// NULL,'$datos['nombre']','$datos['cif']'
				//)
				$sql = "insert into usuario values (".
				"NULL,'".$user['usuario']."','".
				md5($user['pass'])."',".
				"'".$user['email']."',".
				"'".$user['cp']."',"
				;
				
				$sql.=$user['idciudad'].",";
				if($user['envio']=="si"){
					$envio=1;
				}else{
					$envio=0;
				}
				$sql.=$envio.",";
				if(isset($user['cond'])){
					$cond=1;
				}else{
					$cond=0;
				}
				$sql.=$cond;
				$sql.=",'MD5')";
				echo $sql."<br/>";
				//ejecuto la sql
				$respuesta=insert($sql);
				
				if ($respuesta>0) {
					//la ha añadido
					echo "Datos guardados<br/>";
					
				}else{
					//ha fallado el salvado
					echo "Ha ocurrido un fallo al guardar.<br/>";
					echo $this->modelo->getErrors();
				}
				echo "<br/>";
				$this->action_listado();
		
			}
		} else {
			
			
		}

	}
	function action_listado(){
		
		$sql = "select * from usuario";
		if(isset($_POST['patron'])
			&& $_POST['patron']!=null 
			&& $_POST['patron']!=""){
			$sql.=" where ";
			$sql.=" username LIKE '%".$_POST['patron']."%' ";
			$sql.=" OR email LIKE '%".$_POST['patron']."%' ";
			$sql.=" OR idciudad IN (
					Select idciudad 
					from ciudad 
					where nombre LIKE '%".$_POST['patron']."%' )";
			$patron=$_POST['patron'];
		}else{
			$patron="";
		}
		$this->pasa_vista("patron", $patron);
		//echo $sql."<br/>";
		$datos=$this->consulta($sql);
		$this->pasa_vista("datos", $datos);
		
		

	}
	function action_add(){
		
	}
	function action_show(){
		$sql = "select * from usuario where id=".
		$_GET['id'];
		$datos=$this->consulta($sql);
		$this->pasa_vista("datos", $datos);
		 $sql="Select * from ciudad where idciudad=";
		 $sql.=$datos[0]['idciudad'];
		  //echo $sql;
		  $datosc=$this->consulta($sql);
		$this->pasa_vista("datosc", $datosc);
			  $sql="Select * from prov where idprov=";
			  $sql.=$datosc[0]['idprov'];
			  //echo $sql;
			  $datospro=$this->consulta($sql);
		$this->pasa_vista("datospro", $datospro);
			  $sql="Select * from pais where idpais=";
			  $sql.=$datospro[0]['idpais'];
			  //echo $sql;
			  $datosp=$this->consulta($sql);
		$this->pasa_vista("datosp", $datosp);
			  
	}
	function action_edit(){
		
	}
	function action_delete(){
		
		if(isset($_GET['confirm'])
		&&$_GET['confirm']==1){
			
			$sql="delete from usuario where id=".
			$_GET['id'];
			$respuesta=$this->delete($sql);
			if($respuesta==1){
				$mensaje= "borrado usuario";	
			}else{
				$mensaje= "fallo al borrar";
			}
			$this->pasa_vista("mensaje", $mensaje);
			$this->redir("listado");
		}else{
			$this->action_show();
			$this->pasa_vista("delete", true);
		}
		

	}
	function action_index(){
		$this->action_listado();
	}
}
?>