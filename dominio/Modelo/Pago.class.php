<?php

/* 
* Clase que modela el pago de las inscripciones
 */

class Pago{
    private $monto;
    private $fecha;
    private $congreso;
    private $user;
    private $descripcion;
    private $realizado = false;
    private $tipo;
    
    
    
    function _construct($monto, $fecha, $congreso, $usuario, $tipoPago){
        $this->monto = $monto;
        $this->fecha = $fecha;
        $this->congreso = $congreso;
        $this->user = $usuario;
        $this->tipo = $tipoPago;
        
    }
    
    public function getMonto() {
        return $this->monto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCongreso() {
        return $this->congreso;
    }

    public function getUser() {
        return $this->user;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getRealizado() {
        return $this->realizado;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setMonto($monto) {
        $this->monto = $monto;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setCongreso($congreso) {
        $this->congreso = $congreso;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setRealizado($realizado) {
        $this->realizado = $realizado;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}

?>