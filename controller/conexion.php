<?php 
session_start();
class Plug{
	public static function con(){
		$conexion=mysql_connect("pruebas.ecommercetests.com","pruebasuser","814H0sNjqB0");
		if(!($conexion)){
			echo"Error al conectar a la base de datos";
			exit();
		}
			if(!@mysql_select_db("ecommercepruebas",$conexion)){
				echo "Error al seleccionar la base de datos";
				exit();
			}
			mysql_query("SET NAMES 'utf8'");
			return $conexion;
	}
}
?>