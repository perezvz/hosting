<?php
	require_once("controller/creader.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<? include ("html/css.html"); ?>
	</head>
	<body>
		<? include ("html/menu.html"); ?>
		<div id="wrap">
            <div class="container"> <!-- Container -->
                <br>
				<?php 
					if(isset($_SESSION['user'])){
					include ("html/singout.html"); ?>
					<div class="row"> <!-- Row -->
	                    <div class="col-sm-6 col-sm-offset-2"><!--Inicio Main-->
							<h2><small>Cursos del Empleado</small></h2>
							<div class="table-responsive"><!--Div Responsive-->
								<br>
								<?php
									$id=$_SESSION['id'];
									$objIndice=new CReader();
									$objIndice->conocimiento($id);
								?>
							</div><!--Fin Div Responsive-->
						</div><!--Fin Main-->
	                </div> <!-- Row -->
				<?
				}
				elseif ( isset($_SESSION["ser_comun"]) ) {
					include ("html/singout.html");
					$objIndice=new CReader();
					$objIndice->empleado('tbl_empleado');
				}
				else {
				?>
				 <div class="row" id="login_form"> <!-- Row -->
					<div class="col-sm-6 col-sm-offset-2" style="background:#E6E0DA" id="cat_error"> <!-- Div -->
					<br>
						<form class="form-horizontal" role="form" name="forConocer" action="controller/msignin.php" method="post">
							<h4 class="form-signin-heading" align="center">Servicios</h4>
							<div class="form-group">
							<label for="user" class="col-sm-3">Usuario</label>
								<div class="col-sm-6">
								<input class="form-control" type="text" id="user" name="user" placeholder="prueba" autofocus required >
								</div>
								<p class="text-success">Telefono</p>
							</div>
							<div class="form-group">
							<label for="pw" class="col-sm-3">Contraseña</label>
								<div class="col-sm-6">
								<input class="form-control" type="password" id="pw" name="pw"  placeholder="test" required >
								</div>
								<p class="text-success">Telefono</p>
							</div>


							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-6">
									<button class="btn btn-sm btn-danger" onclick="window.location='index.php';" name="Regresar" type="reset">
										<span class="glyphicon glyphicon-arrow-left"></span> Cancelar
									</button>
									<button class="btn btn-sm btn-primary" type="submit" name="login" value="login">
									Sing In <span class="glyphicon glyphicon-send"></span>
									</button>
								</div>
							</div>
						</form>
					</div> <!-- Div -->
                    <div class="col-sm-6 col-sm-offset-2"><!--Inicio Main-->
						<h2 id="shadow" class="popup"><small> </small></h2>
						
						<div class="table-responsive"><!--Div Responsive-->
							<br>
							
						</div><!--Fin Div Responsive-->
					</div><!--Fin Main-->
                </div> <!-- Row -->
                 <?php } ?>
                <br>

            </div><!-- Container -->
        </div>
		<?php include ("html/footer.html"); ?>
	</body>
</html>