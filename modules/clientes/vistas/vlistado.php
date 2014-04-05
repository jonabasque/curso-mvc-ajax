
<a href='index.php?module=clientes&action=add'>Add</a><br />
<form action="index.php?module=clientes&action=listado" method="post">
	<label for="patron">Buscar:</label>
	<input type="text" name="patron" id="patron" value="<?php
								if(isset($_POST['patron']) &&
								$_POST['patron']!=null && $_POST['patron']!=""){
									echo $_POST['patron'];
								}
							?>"/>

	<input type="submit" name="submit" id="submit" value="Buscar" />
</form>
<br/>

<?php
if (is_array($datos)) {
?>
<table>
<?php
		foreach ($datos as $key => $value) {
?>
			<tr>
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['nombre'];?></td>
			<td><?php echo $value['cif'];?></td>
			<td>
			<a href='index.php?module=clientes&action=show&id=<?php echo $value['id'];?>'>Mostrar</a><br/>
			<a href='index.php?module=clientes&action=edit&id=<?php echo $value['id'];?>'>Editar</a><br/>
			<a href='index.php?module=clientes&action=delete&id=<?php echo $value['id'];?>'>Borrar</a><br/>
			</td>
			</tr>
<?php
		}
?>
</table>
<?php
}
?>
