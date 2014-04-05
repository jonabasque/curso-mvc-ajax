<?php
function imprime_fallos($arr){
		if (is_array($arr)) {
			foreach ($arr as $key => $value) {
				echo $value;
			}			
		}
		
	}
	function imprimesinoesnull($valor){
		if($valor!=null || $valor!=""){
			echo $valor;
		}
	}
	function checkedsimanda($valor){
		if($valor!=null){
			echo " checked ";
		}
	}
?>