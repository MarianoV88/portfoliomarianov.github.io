<?php
include("altas.php");
$compra = $prod->getProducto($_GET['id']);
$carr->agregarCar($compra[0]['producto'], $compra[0]['descripcion'], $compra[0]['precio']);

header("Location: unidad7.php");
?>