<?php

echo '<select name="municipios" class="form-control">';
require ("conexion.php");
$consulta= "SELECT * FROM municipios"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
?>
<option value="">Seleccione</option>
<?
while($fila = mysql_fetch_array($resultado)){	
		if($fila['id_estado'] == $_GET['c']){
			echo "<option value='".$fila['id_mcpio']."'>".$fila['municipio']."</option>";;
		}
	}
mysql_close($conexion);
echo '</select>';
?>
