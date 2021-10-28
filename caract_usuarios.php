<?php
 if ($_POST) {
  	$nombre = $_POST['nombre'];
  	$apellido = $_POST['apellido'];
  	$edad = $_POST['edad'];

  	include("class/usuarios.php");
  	$usuario = new Usuarios($nombre, $apellido, $edad);
    $usuario->imprime_caracteristicas();
  } 
?>