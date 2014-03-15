<?php

/**
 * Oswaldo Martinez Fonseca
 *  since
 *
 *Este archivo recibe la peticion y decide que controlador
 *se debe ejecutar
 */

//Recibe get
$ctrl = (isset($_GET['ctrl'])) ? $_GET['ctrl'] : 0;
	switch($ctrl) {
		case 'listaAlumno':
			require('Controlador/listarAlumnosCtrl.php');
			$controlador =new listarAlumnosCtrl();
			$controlador->ejecutar();
		break;
		default:
			echo "Mandar parametro";
	}
?>
