<?
include "conexion.php";

class Logueo { 
	function signin($username,$password){
		$sql="SELECT * FROM tbl_empleado WHERE telefono='$username' and telefono='$password'";
		$res=mysql_query($sql,Plug::con());	
		//mysql_num_rows($res);
		$reg=mysql_fetch_array($res);
		echo 'true';
		$_SESSION['user']=$reg['telefono'];
		header("Location: ../conocer.php");
		
		if (($username=='prueba') AND ($password=='test')) {
			echo 'true';
			$_SESSION['ser_comun'] ='Admin';
			header("Location: ../conocer.php");
		}
		else {
			/*echo "<script type='text/javascript'>
				alert('Datos son Incorretos');
				window.location='../conocer.php';
				</script>";
				*/
			echo "false";
		}
	}

}

?>

SELECT c.id, c.curso, c.porcentaje, em.nombre, em.id, c.tbl_empleado_id, d.salario 
FROM (tbl_conocimientos c INNER JOIN tbl_empleado em ON c.tbl_empleado_id = em.id) INNER JOIN tbl_datos_economicos d ON em.id = d.tbl_empleado_id 
WHERE em.id = 149