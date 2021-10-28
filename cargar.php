<?php 
session_start();
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$dni = $_POST['DNI'];
$Email = $_POST['Email'];
$consulta = $_POST['consultas'];
include('conexion.php');

mysqli_query($datos_base, "INSERT INTO consultas (Nombre, Apellido, DNI, Email, consultas) VALUES ('$nombre', '$apellido', $dni, '$Email', '$consulta')");

    if($_POST['codigo_captcha']==$_SESSION['captcha']) {
	header("Location: unidad5.php?ok");
} else  {
	header("Location: unidad5.php?error");
}


?>

