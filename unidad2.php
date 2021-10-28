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
        <h2>Eventos</h2>
    <h3>Ingrese la fecha del proximo evento</h3>
        <form method="POST" action="unidad2.php">
            
            <input type="number" min="1" max="31" name="dia" required placeholder="Dia">
            <input type="number" min="1" max="12" name="mes" required placeholder="Mes">
            <input type="number" min="2021" max="2100" name="anio" required placeholder="Año">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <aside > 
       <?php
if($_POST){
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	
	$dia= $_POST['dia'];
	$mes= $_POST['mes'];
	$anio= $_POST['anio'];


	$fechaActual= date("d-m-Y");
	$fechaIndicada= date("$dia-$mes-$anio");

	if(strtotime($fechaIndicada) <= strtotime($fechaActual)) {
		echo "<p>El evento requerido ha finalizado, por favor seleccione una fecha posterior a ".$fechaActual."</p>"; 
	} else {
		$calculo = strtotime($fechaIndicada) - strtotime($fechaActual);
		$tiempoRestante = intval($calculo/86400);
	
		echo "<p>En ".$tiempoRestante." día(s) tendrá lugar el evento requerido</p>";
	}
}

?>
    </aside >
    <footer
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>