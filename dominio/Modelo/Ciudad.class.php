<?php

/* 
 * Modela ciudades donde se desarrollaran los congresos.
 */

class Ciudad{
    
    private $nombre;
    private $pais;
    
    public function __construct($nombre, $pais) {
        $this->nombre = $nombre;
        $this->pais = $pais;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }


    
}


?>