<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=db745916378.db.1and1.com;dbname=db745916378",
						"dbo745916378",
						"S@ntiago123",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}
