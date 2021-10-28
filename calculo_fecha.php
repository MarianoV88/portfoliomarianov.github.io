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