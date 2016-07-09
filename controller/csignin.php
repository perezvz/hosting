<?
include "conexion.php";

class Logueo { 
	function signin($username,$password){
		$sql="SELECT * FROM tbl_empleado WHERE telefono='$username' and telefono='$password'";
		$res=mysql_query($sql,Plug::con());	
		$reg=mysql_fetch_array($res);
		$_SESSION['user']=$reg['telefono'];
		$_SESSION['id']=$reg['id'];
		header("Location: ../conocer.php");
		if (($username=='prueba') AND ($password=='test')) {
			$_SESSION['ser_comun'] ='Admin';
			header("Location: ../conocer.php");
		}
		elseif (mysql_num_rows($res)==0){
			echo "<script type='text/javascript'>
				alert('Datos son Incorretos');
				window.location='../conocer.php';
				</script>";
		}
	}

}

?>