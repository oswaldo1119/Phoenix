<?php

	/**
	 *Modelo para Listar Alumnos de un curso
	*/

class listarAlumnosMdl {
	public $conexion;
	function __construct() { 
		//crear conexion a la base de datos
	}
	function listarAlumnos() {
		$Alumnos = array("Oswaldo Martinez Fonseca", "Marcos De La Cruz Gonzalez", "Nancy Michelle");
		return $Alumnos;
	}
}

?>
