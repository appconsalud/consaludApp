<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TarjetaCredito {
    private $numeroTarjeta;
    private $numeroSeguridad;
    private $entidadEmisora; //instancia del tipo Entidad Financiera
    private $marcaTarjeta;   //instancia del tipo marca tarjeta
    
    
    public function __construct($numeroTarjeta, $numeroSeguridad, $entidadEmisora, $marcaTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
        $this->numeroSeguridad = $numeroSeguridad;
        
        //Chequear validaciones
        if($entidadEmisora !== NULL)
            $this->entidadEmisora = $entidadEmisora;
     
        if($marcaTarjeta !== null)
            $this->marcaTarjeta = $marcaTarjeta;
    }

    
    
    public function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    public function getNumeroSeguridad() {
        return $this->numeroSeguridad;
    }

    public function getEntidadEmisora() {
        return $this->entidadEmisora;
    }

    public function getMarcaTarjeta() {
        return $this->marcaTarjeta;
    }

    public function setNumeroTarjeta($numeroTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    public function setNumeroSeguridad($numeroSeguridad) {
        $this->numeroSeguridad = $numeroSeguridad;
    }

    public function setEntidadEmisora($entidadEmisora) {
        $this->entidadEmisora = $entidadEmisora;
    }

    public function setMarcaTarjeta($marcaTarjeta) {
        $this->marcaTarjeta = $marcaTarjeta;
    }


}


?>