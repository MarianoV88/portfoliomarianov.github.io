<?php

$unidad_clases=$_POST['unidad'];
$fecha_clases=$_POST['fecha'];

include('conexion.php');

mysqli_query($datos_base, "INSERT INTO clases VALUES (DEFAULT, '$unidad_clases', '$fecha_clases')");

header('Location: unidad1.php?ok');

?>