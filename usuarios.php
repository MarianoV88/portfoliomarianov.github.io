<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $edad;
    function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function imprime_caracteristicas() { 
        echo "<ul><li>Nombre: ".$this->nombre .
        "</li>";
        echo "<li>Apellido: ".$this->apellido .
        "</li>";
        echo  "<li>Edad: ".$this->edad .
        "</li></ul><hr>";
    }
}
?>