<?php

/**
	*controlador Listar Alumnos de un Curso
	*Oswaldo Marinez Fonseca
	since
*/

class listarAlumnosCtrl {
	public $modelo;
	function __construct() {
		require('Modelo/listarAlumnoMdl.php');
		$this->modelo =new listarAlumnosMdl();
	}

	function ejecutar()
	{
		$act = (isset($_GET['act'])) ? $_GET['act'] : 0;
		$grupo = (isset($_GET['grupo'])) ? $_GET['grupo'] : 0;
		$ordenado = (isset($_GET['ordenado'])) ? $_GET['ordenado'] : 0;
		if(preg_match("/^([a-zA-Z]+[a-zA-Z0-9]+[0-9]{2}+[-]+[D,d]+[0-9]{2}$)/i", $grupo))
		{
			switch($grupo) {
					case 'cc419-D03':
						$curso = "Programacion Web";
						switch($act) {
						case 'listar':
							$listacurso = $this->modelo->listarAlumnos();
							if($ordenado){
								if($ordenado == 'asc'){
									sort($listacurso);
								}
								else if($ordenado == 'des'){
									rsort($listacurso);
								}

							}
							include('Vistas/listaAlumnos.php');
						break;
						default:
							echo "Mandar parametro act ";
						}
					break;
					default:
						echo "Grupo no existe";
			}
		}
		else
			echo "Error Grupo Sintaxis";
	}
}

?>

