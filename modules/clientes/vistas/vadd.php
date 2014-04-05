<form id="add" name="add" 
		action="index.php?module=clientes&action=add" method="post">
	<label for="data[nombre]">Nombre de Cliente</label>
	<input type="text" id="nombre" tabindex="1" 
	name="data[nombre]" value="<?php 
		if (isset($datos) && $datos['nombre']!=null 
			&& $datos['nombre']!=""){
				echo $datos['nombre'];
		}
	?>"/><br />
	<label for="data[cif]">CIF</label>
	<input type="text" id="cif" tabindex="2" 
	name="data[cif]" value="<?php 
		if (isset($datos) && $datos['cif']!=null 
			&& $datos['cif']!=""){
				echo $datos['cif'];
		}
	?>"/><br />
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/><br />
</form>
<br/>
<a href="listado.php">Volver</a>