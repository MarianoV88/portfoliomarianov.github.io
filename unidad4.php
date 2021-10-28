<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link href="path/to/lightbox.css" rel="stylesheet" type = "text/css">
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
		<h2>Imágenes con PHP</h2>
         <div id="marca_agua"> 
        <img src="marca_agua.php"
         </div>


		<a href="imagenes/unidad4.jpg" data-lightbox= "imagenes" data-title="unidad4">
<img src="imagenes/unidad4_thumb.jpg">
</a>
	</section>
	
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
<script type="text/javascript" src="js¨/lightbox-plus-jquery.js"></script>
<script type= "text/javascript" src="path/to/lightbox.js"></script>
</body>
</html>