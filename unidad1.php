<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <title>PHP y MySQL avanzados_TP 1</title>
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>

	<section> 
		<h2>Agenda de clases</h2>

		<form method="POST" action="cargar_clases.php">
			<input type="text" name="unidad" required placeholder="Unidad" maxlength="30">
			<input type="date" name="fecha" required placeholder="Fecha" maxlength="10">
			<input type="submit" value="Cargar clase">
		</form>

		<?php if(isset($_GET['ok'])) {
			echo "<h4>Clase cargada!</h4>";
		} ?>
	</section>



	<aside> 
    	<?php
		include ("conexion.php");
		$consultar_clases = mysqli_query($datos_base, "SELECT * FROM clases");
		while($listar_clases = mysqli_fetch_assoc($consultar_clases)) {
			?>
			<div class="clases">
				<p>Unidad<?php echo $listar_clases['id_clase'].": ".$listar_clases['unidad'].". (".$listar_clases['fecha'].")"; ?></p>
				<p><a href="editar.php?id=<?php echo $listar_clases['id_clase']; ?>">Editar</a> - <a href="eliminar.php?id=<?php echo $listar_clases['id_clase']; ?>">Eliminar</a></p>
				<br>
				<br>
				<br>
			</div>
			<div class="borrar"></div>
		<?php } ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>