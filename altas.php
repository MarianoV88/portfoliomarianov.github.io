<?php
include('clases/BaseDeDatos.php');
include('constantes.php');
include('clases/productos.php');
include('clases/carrito.php');

$base = new BaseDeDatos(SERVIDOR, USUARIO, CODIGO, BASE);
$prod = new productos($base);
$carr = new carrito($base);
?>