<?php
function cogedatosusuarios($data){
	$array=array();
	$num=mysql_numrows($data);
	$i=0;
	while ($i < $num) {
		$array[$i]=array();
		$id=mysql_result($data,$i,"id");
		$array[$i]['userid']=$id;
		$nombre=mysql_result($data,$i,"username");
		$array[$i]['username']=$nombre;
		$email=mysql_result($data,$i,"email");
		$array[$i]['email']=$email;
		$cp=mysql_result($data,$i,"cp");
		$array[$i]['cp']=$cp;
		$idciudad=mysql_result($data,$i,"idciudad");
		$array[$i]['idciudad']=$idciudad;
		$boletin=mysql_result($data,$i,"boletin");
		$array[$i]['boletin']=$boletin;
		$acepta=mysql_result($data,$i,"acepta");
		$array[$i]['acepta']=$acepta;
		$i++;
	}
	return $array;
}
function imprimeusuarios($datos){
	if (is_array($datos)) {
		echo "<table>";
		foreach ($datos as $key => $value) {
			echo "<tr>";
			echo "<td>".$value['userid']."</td>";
			echo "<td>".$value['username']."</td>";
			echo "<td>".$value['email']."</td>";
			echo "<td>";
			echo "<a href='mostrarusuario.php?id=".
			$value['userid']."'>Mostrar</a>";
			echo "<br/>";
			echo "<a href='editarusuario.php?id=".
			$value['userid']."'>Editar</a>";
			echo "<br/>";
			echo "<a href='borrarusuario.php?id=".
			$value['userid']."'>Borrar</a>";
			echo "<br/>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}
function cogedatosprov($data){
	$array=array();
	$num=mysql_numrows($data);
	$i=0;
	while ($i < $num) {
		$array[$i]=array();
		$id=mysql_result($data,$i,"idprov");
		$array[$i]['idprov']=$id;
		$nombre=mysql_result($data,$i,"nombre");
		$array[$i]['nombre']=$nombre;
		$idpais=mysql_result($data,$i,"idpais");
		$array[$i]['idpais']=$idpais;
		$i++;
	}
	return $array;
}
function cogedatosciudad($data){
	$array=array();
	$num=mysql_numrows($data);
	$i=0;
	while ($i < $num) {
		$array[$i]=array();
		$id=mysql_result($data,$i,"idciudad");
		$array[$i]['id']=$id;
		$nombre=mysql_result($data,$i,"nombre");
		$array[$i]['nombre']=$nombre;
		$idprov=mysql_result($data,$i,"idprov");
		$array[$i]['idprov']=$idprov;
		$i++;
	}
	return $array;
}
function cogedatospais($data){
	$array=array();
	$num=mysql_numrows($data);
	$i=0;
	while ($i < $num) {
		$array[$i]=array();
		$id=mysql_result($data,$i,"idpais");
		$array[$i]['id']=$id;
		$nombre=mysql_result($data,$i,"nombre");
		$array[$i]['nombre']=$nombre;
		$i++;
	}
	return $array;
}

	function seleccionaprovincia($valor,$pos,$aprovs){
			
			if ($valor==$aprovs[$pos]) {
				echo ' selected="true" ';
			}
		
	}
?>
<h1>Gestion de Usuarios</h1>