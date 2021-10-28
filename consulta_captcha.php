<?php 
session_start();
if($_POST['codigo_captcha']==$_SESSION['captcha']) {
$_SESSION['usuario']=$_POST['dni']; 
header("Location: ver_consulta.php");
} else {
header("Location: unidad5.php?error");
}
?>