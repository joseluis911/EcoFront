<?php 

require_once "conexion.php";

class ModeloAlertas{

	static public function mdlMostrarAlerta($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;
	}


}