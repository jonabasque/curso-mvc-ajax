<?php
function cogedatos($data){
	$array=array();
	$num=mysql_numrows($data);
	$i=0;
	while ($i < $num) {
		$array[$i]=array();
		$id=mysql_result($data,$i,"id");
		$array[$i]['id']=$id;
		$nombre=mysql_result($data,$i,"nombre");
		$array[$i]['nombre']=$nombre;
		$cif=mysql_result($data,$i,"cif");
		$array[$i]['cif']=$cif;
		$i++;
	}
	return $array;
}

function clientes_action_listado(){
	$sql = "select * from cliente";
	if(isset($_POST['patron'])
		&& $_POST['patron']!=null 
		&& $_POST['patron']!=""){
		$sql.=" where ";
		$sql.=" nombre LIKE '%".$_POST['patron']."%' ";
		$sql.=" OR cif LIKE '%".$_POST['patron']."%' ";
	
	}
	echo $sql."<br/>";
	$respuesta=consulta($sql);
	$datos=cogedatos($respuesta);
	include_once "vistas/vlistado.php";
}
function clientes_action_index(){
	clientes_action_listado();
}
function clientes_action_buscar(){
}
function clientes_action_add(){
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
			$respuesta=consulta($sql);
			$respuesta=mysql_affected_rows();
			if ($respuesta==1) {
				//la ha añadido
				echo "Datos guardados";
				clientes_action_listado();
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
function clientes_action_edit(){
	
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
			$respuesta=consulta($sql);
			$respuesta=mysql_affected_rows();
			if ($respuesta>=0) {
				//la ha añadido
				echo "Datos guardados";
				clientes_action_listado();
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
		$respuesta=consulta($sql);
		echo $sql;
		$datos=cogedatos($respuesta);
		$datos=$datos[0];
		include "vistas/vedit.php";
	}

}
function clientes_action_show($delete=false){
	
$sql = "select * from cliente where id=".
$_GET['id'];
print_r($sql);
echo "<br/>";
$respuesta=consulta($sql);
$datos=cogedatos($respuesta);
if (is_array($datos) && count($datos)>0) {
	include_once "vistas/vshow.php";
}

}
function clientes_action_delete(){

	if (isset($_GET['confirm'])
		&&$_GET['confirm']==1) {
		//borrar realmente
		$sql="delete from cliente where id=".
		$_GET['id'];
		$respuesta=consulta($sql);
		$respuesta=mysql_affected_rows();
		if($respuesta==1){
			echo "Elemento Borrado<br/>";
		}else{
			echo "Fallo en la BBDD, ".
			"contracte con el administrador! JURL!";
		}
		clientes_action_listado();
	}else{
		clientes_action_show(true);
	}
}
?>
<h1>Gestion de clientes</h1>
<?php
carga_accion($module);
?>