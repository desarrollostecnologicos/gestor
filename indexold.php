<?php
$dir    = './presentaciones/';
$archivos1 = scandir($dir);

echo '<ul>'; //Abrimos una lista HTML para mostrar los archivos

foreach ($archivos1 as $i => $archivo) {

	if ($archivo != '.' && $archivo != '..'){
		$ruta_archivo = $dir.$archivo;

		echo "<li><a href='".$ruta_archivo."' target='_blank'>Archivo: ".$archivo."</a></li>"; 

	}
}
echo '</ul>';//Se cierra la lista
?>