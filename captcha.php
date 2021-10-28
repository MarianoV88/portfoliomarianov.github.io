<?php
session_start();
header("Content-type: image/jpeg");
$imagen = imagecreate(120, 40);
$color_fondo = imagecolorallocate($imagen, 204, 255, 153);
$color_txt = imagecolorallocate($imagen, 153, 0, 153);
$color_linea = imagecolorallocate($imagen, 255, 51, 8);
imageline($imagen, 70, 30, 0, 10, $color_linea);
imagestring($imagen, 5, 20, 10, $_SESSION['captcha'], $color_txt);
imagejpeg($imagen);
?>