<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<?php 
		include("altas.php"); 
		$lista = $prod->listProductos();
		?>
		<h2>Compras</h2>
		<table>
			<tr>
				<td>Codigo</td>
				<td>Producto</td>
				<td>Descripcion</td>
				<td>Precio</td>
				<td></td>
			</tr>
			<?php for($i=0; $i<count($lista); $i++) { ?>
			<tr>
				<td><?php echo $lista[$i]['codigo']; ?></td>
				<td><?php echo $lista[$i]['producto']; ?></td>
				<td><?php echo $lista[$i]['descripcion']; ?></td>
				<td><?php echo $lista[$i]['precio']; ?></td>
				<td><a href="comprar.php?id=<?php echo $lista[$i]['codigo']; ?>"><button type="button" class="btn">Comprar</button></a></td>
			</tr>
			<?php } ?>
		</table>
	</section>
	<aside>
    
    <h2>Carrito de compras</h2>
    <?php if ($carrito = $carr->listarCar()) {
   
    ?>
    <table class="carrito">
    	<tr>
    		<td>Producto</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td></td>
    	</tr>
    	<?php 
    	for($i=0; $i<count($carrito); $i++) { ?>
    		<tr>
    			<td><?php echo $carrito[$i]['producto']; ?></td>
				<td><?php echo $carrito[$i]['descripcion']; ?></td>
				<td><?php echo $carrito[$i]['precio']; ?></td>
				<td><a href="eliminar.php?id=<?php echo $carrito[$i]['codigo']; ?>"><button type="button" class="btn">Eliminar</button></a></td>
    		</tr>
    		<?php } } ?>
    </table>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>