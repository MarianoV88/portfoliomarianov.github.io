<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> clase unidad 4</title>
</head>
<body>
<?php
$ruta = 'imagenes/unidad4.jpg';
$base = imagecreatefromjpeg($ruta);

$img_ancho = imagesx($base);
$img_alto = imagesy($base);

$ancho_thumb = 150;
$alto_thumb = 150;

$img_thumb = imagecreate($ancho_thumb, $alto_thumb);

imagecopyresized($img_thumb, $base, 0, 0, 0, 0, $ancho_thumb, $alto_thumb, $img_ancho, $img_alto);

imagejpeg($img_thumb, 'imagenes/unidad4_thumb.jpg') ;

echo "<p>Thumbnail creado</p>" ;

?>
</body>
</html>