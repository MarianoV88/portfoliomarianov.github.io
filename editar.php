<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" href="estilos.css">
	<title>editar.php</title>
</head>
<body>

	<section id="inicio">
		
		<?php
		include("conexion.php");
		$id_clase = $_GET['id'];
		$consultar_clases = mysqli_query($datos_base, "SELECT * FROM clases WHERE id_clase = $id_clase");
		$datos_clases = mysqli_fetch_assoc($consultar_clases);
		?>

		<form method="POST" action="edit_clases.php">
			<p><?php echo $datos_clases['unidad']." ".$datos_clases['fecha']; ?></p>
			<input type="hidden" value="<?php echo $datos_clases['id_clase']; ?>" name="id_clase">
		</form>
	</section>

</body>
</html>