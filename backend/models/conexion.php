<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=aqu� su DB","Su usuario","Su contrase�a");
		return $link;

	}

}
