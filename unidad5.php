<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
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
		<h2>Consultas</h2>
		<?php
		function codigo_captcha() {
          $pattern = "0123456789abcdefghijklmnopqrstuvwxyz$%?#&";
          $codigo = '';
           for ($i=0; $i < 6; $i++) { 
    	    $codigo .= $pattern[rand(0, 40)];
    }
             return $codigo ;}


$_SESSION['captcha'] = codigo_captcha();

		?>
		<h3>Ingrese DNI para hacer su consulta</h3>
		<form method="POST" action="cargar.php" ><br><br>
			<label>Nombre:</label><br>
			<input type="text" name="Nombre" placeholder="Nombre"><br><br>
			<label>Apellido:</label><br>
			<input type="text" name="Apellido" placeholder="Apellido"><br>
			<label>email:</label><br>
			<input type="email" name="Email" placeholder="Correo electrónico"><br><br>
			<label>DNI(sólo números):</label><br>
			<input type="number" name="DNI" placeholder="22333555"><br><br>
			<input type="textarea" name="consultas" placeholder="deje su consulta"><br>

			<label>Código de verificación</label><br><br>
				<img src="captcha.php"><br>
				<input type="text" name="codigo_captcha" maxlength="6"><br>
			<input type="submit" value="Hacer Consulta"><br>
		</form>

		<?php 
		if (isset($_GET['error'])) { echo "<p>El código de verificación es incorrecto</p>";
		}
		if (isset($_GET['ok'])) {
			echo "<p>Consulta exitosa</p>";}

		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>