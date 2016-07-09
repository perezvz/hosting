<?
include ("csignin.php");
	
	if(isset($_POST["login"])){
		$lcall = new Logueo();
		$username = $_POST['user'];
		$password = $_POST['pw'];
		$lcall->signin($username,$password);
	}
?> 