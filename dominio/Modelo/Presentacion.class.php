<?php

include_once "Usuario.class.php";

/**
* Modela las presentaciones en los congresos.
*
*/

class Presentacion{

    private $nombre;
    private $expositor;    //Instancia de Usuario
    private $documento;
    private $urlDocumento;
    
    public function __construct($nombre, $expositor) {
        $this->nombre = $nombre;
        $this->expositor = $expositor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getExpositor() {
        return $this->expositor;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getUrlDocumento() {
        return $this->urlDocumento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setExpositor($expositor) {
        $this->expositor = $expositor;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function setUrlDocumento($urlDocumento) {
        $this->urlDocumento = $urlDocumento;
    }


}

?>