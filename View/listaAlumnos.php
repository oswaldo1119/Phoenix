<?php
	echo 'Listas de Alumnos del curso de '. $curso. "</br>";
	$numalumnos = count($listacurso);
	if($numalumnos > 0)
	foreach($listacurso as $nombre)
	{
		echo "</br>";
		echo $nombre;
	}
	else
		echo "Error";

?>
