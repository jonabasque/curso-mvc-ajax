<?php
	if (is_array($datos) && count($datos)>0) {
?>ID:
	<?php echo $datos[0]['id'];
			echo "<br/>";
			echo "Nombre: ";
			echo $datos[0]['username'];
			echo "<br/>";
			echo "Email: ";
			
			if($datos[0]['email']!=null){
				echo $datos[0]['email'];
			}else{
				echo "no hay email!";
			}
			echo "<br/>";
			echo "CP: ";
			echo $datos[0]['cp'];
			echo "<br/>";
			echo "Ciudad: ";
			//echo $datos[0]['idciudad'];
			
			  echo $datosc[0]['nombre'];
			  echo " (".$datospro[0]['nombre'].")";
			    echo " ".$datosp[0]['nombre'];
			echo "<br/>";
			echo "Acepta el boletin: ";
			if($datos[0]['boletin']==1){
				echo " Si";
			}else{
				echo " No";
			}
			echo "<br/>";
			echo "Acepta las condiciones: ";
			if($datos[0]['acepta']==1){
				echo " Si";
			}else{
				echo " No";
			}
			echo "<br/>";
			echo "<a href='listadousuarios.php'>Volver</a>";
		}

	?>