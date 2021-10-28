<?php
class productos {
	private $bd;

	function __construct($base) {
		$this->bd = $base;
	}

	public function listProductos() {
		$respuesta = $this->bd->enviarConsulta("SELECT * FROM productos");
		return $respuesta;
	}

	public function getProducto($codigo) {
		$respuesta = $this->bd->enviarConsulta("SELECT * FROM productos WHERE codigo=$codigo");
		return $respuesta;
	}
}
?>