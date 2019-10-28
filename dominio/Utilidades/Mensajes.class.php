<?php

/* 
 * Modela y maneja mensajes del sistema en general
 */

class Mensajes{
    private $mensaje;
    private $tipo;  //Muestra el tipo de error si es advertencia, error, correcto
    
    public function getMensaje() {
        return $this->mensaje;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
?>