<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=aquí su DB","Su usuario","Su contraseña");
		return $link;

	}

}
