<?php

class ControladorAlertas{

	static public function ctrMostrarAlerta(){

		$tabla = "alertas";

		$respuesta = ModeloAlertas::mdlMostrarAlerta($tabla);

		return $respuesta;

	}



}