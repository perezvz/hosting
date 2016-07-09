<?php
include "conexion.php";
/*
* 	Clase Reader
*	Obtine datos
*/
class CReader{
	private $all;
	private $all2;
	
	function __construct(){
		$this->all=array();
		$this->all2=array();
	}
	//Consultar todos los datos
	public function obt_all($dato){
		$sql="select * from $dato";
		$res=mysql_query($sql,Plug::con());
		while ($reg=mysql_fetch_assoc($res)){
			$this->all[]=$reg;
		}
			return $this->all;
	}
	//Consultar todos los datos
	public function obt_mn($dato){
		$sql="SELECT c.id, c.curso, c.porcentaje, em.nombre, em.id, c.tbl_empleado_id, d.salario 
		FROM (tbl_conocimientos c INNER JOIN tbl_empleado em ON c.tbl_empleado_id = em.id) 
		INNER JOIN tbl_datos_economicos d ON em.id = d.tbl_empleado_id 
		WHERE em.id = $dato";
		$res=mysql_query($sql,Plug::con());
		while ($reg=mysql_fetch_assoc($res)){
			$this->all[]=$reg;
		}
			return $this->all;
	}
	function cursos($dato){
		$area = new CReader();
		$pro=$area->obt_all($dato);
		echo "
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Lenguaje</th>
					</tr>
				</thead>
				<tbody>
		";
		for ($i=0;$i<sizeof($pro);$i++){
			echo "
					<tr>
						<td>".$pro[$i]['lenguaje']."</td>
					</tr>
			";
		}
		echo "
				</tbody>
			</table>
		";
	}

	function empleado($dato){
		$area = new CReader();
		$pro=$area->obt_all($dato);
		echo "
			<table class='table table-striped table-responsive'>
				<thead>
					<tr>
						<th>Nombre Empleado</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th>Dirección</th>
					</tr>
				</thead>
				<tbody>
		";
		for ($i=0;$i<sizeof($pro);$i++){
			echo "
					<tr>
						<td>".$pro[$i]['nombre']."</td>
						<td>".$pro[$i]['edad']."</td>
						<td>".$pro[$i]['telefono']."</td>
						<td>".$pro[$i]['direccion']."</td>
					</tr>
			";
		}
		echo "
				</tbody>
			</table>
		";
	}

	function conocimiento($dato){
		$area = new CReader();
		$pro=$area->obt_mn($dato);
		echo "
			<table class='table table-striped table-responsive'>
				<thead>
					<tr>
						<th>Curso</th>
						<th>% avance</th>
						<th>Nombre</th>
						<th>Lenguaje</th>
					</tr>
				</thead>
				<tbody>
		";
		for ($i=0;$i<sizeof($pro);$i++){
			echo "
					<tr>
						<td>".$pro[$i]['curso']."</td>
						<td>".$pro[$i]['porcentaje']."%</td>
						<td>".$pro[$i]['tbl_empleado_id']."</td>
						<td>".$pro[$i]['salario']."</td>
					</tr>
			";
		}
		echo "
				</tbody>
			</table>
		";
	}

}

?>