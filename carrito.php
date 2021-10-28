<?php
class carrito {
	private $bd;

	function __construct($base) {
		$this->bd = $base;
	}

	public function agregarCar($producto, $descripcion, $precio) {
		$respuesta = $this->bd->enviarConsulta("INSERT INTO compras VALUES (DEFAULT, '$producto', '$descripcion', $precio)");
		return $respuesta;
	}

	public function eliminarProd($codigo) {
		$respuesta = $this->bd->enviarConsulta("DELETE FROM compras WHERE codigo=$codigo");
		return $respuesta;
	}

	public function listarCar() {
		$respuesta = $this->bd->enviarConsulta("SELECT * FROM compras");
		return $respuesta;
	}
}
?>