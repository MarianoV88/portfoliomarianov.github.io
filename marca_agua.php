<?php
$base = 'imagenes/img1.jpg';
$marca_agua = 'imagenes/marca.png';

$imagen = imagecreatefrompng($marca_agua); 
$imagen2 = imagecreatefromjpeg($base);

imagecopy($imagen2, $imagen, 50, 50, 0, 0, imagesx($imagen), imagesy($imagen));

header("Content-type: image/jpeg");  
imagejpeg($imagen2);  
?>