<?php
include("altas.php");
$carr->eliminarProd($_GET['id']);

header("Location: unidad7.php");
?>