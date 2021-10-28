<?php 

$fecha=$_POST['fecha'];
$id_clase=$_POST['id_clase'];

include("conexion.php");

mysqli_query($datos_base, "UPDATE clases SET fecha='$fecha' WHERE id_clase=$id_clase");

header("Location: unidad1.php");

?>