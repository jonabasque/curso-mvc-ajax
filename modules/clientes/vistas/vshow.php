<label >ID: <?php echo $datos[0]['id'];?></label><br/>
<label>Nombre:<?php echo $datos[0]['nombre'];?></label>	<br/>
<label>CIF:<?php if($datos[0]['cif']!=null){
		echo $datos[0]['cif'];
	}else{
		echo "no hay Cif!";
	}?></label>	<br/>
<?php
if ($delete==true) {
	echo "<a href='index.php?module=clientes&action=delete&id=".
			$datos[0]['id']."&confirm=1'>Borrar Realmente</a><br/>";
}
?>
<a href='index.php?module=clientes&action=listado'>Volver</a>