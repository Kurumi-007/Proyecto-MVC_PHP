<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
	<?php include "inc/Link.php";?>
</head>
<body>
	<?php
		$peticionAjax=false;
		require_once"./controladores/VistasControlador.php";
		$IV = new VistasControlador();
		$vistas=$IV -> obtener_vistas_controlador();
		if($vistas == "login"){

		}
	?>
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<?php include "inc/NavLateral.php";?>
		<!-- Page content -->
		<section class="full-box page-content">
		<?php include "inc/NavBar.php";?>
		</section>
	</main>
	<?php include "inc/Script.php";?>
</body>
</html>