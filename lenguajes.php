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
                <div class="row"> <!-- Row -->
                    <div class="col-sm-6 col-sm-offset-2"><!--Inicio Main-->
						<h2><small>Informacion de Lenguajes</small></h2>
						<div class="table-responsive"><!--Div Responsive-->
							<br>
							<?php
								$objIndice=new CReader();
								$objIndice->cursos('tbl_lenguajes');
							?>
						</div><!--Fin Div Responsive-->
					</div><!--Fin Main-->
                </div> <!-- Row -->
                <br>
            </div>
        </div>
		<?php include ("html/footer.html"); ?>
	</body>
</html>