<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TransferenciaBancaria{
    
    private $ctaOrigen;
    private $bancoOrigen;  //Const de EntidadFinanciera
    private $ctaDestino;
    private $bancoDestino; //Const de EntidadFinanciera
    
    public function __construct($ctaOrigen, $bancoOrigen, $ctaDestino, $bancoDestino) {
        $this->ctaOrigen = $ctaOrigen;
        $this->bancoOrigen = $bancoOrigen;
        $this->ctaDestino = $ctaDestino;
        $this->bancoDestino = $bancoDestino;
    }

    
    public function getCtaOrigen() {
        return $this->ctaOrigen;
    }

    public function getBancoOrigen() {
        return $this->bancoOrigen;
    }

    public function getCtaDestino() {
        return $this->ctaDestino;
    }

    public function getBancoDestino() {
        return $this->bancoDestino;
    }

    public function setCtaOrigen($ctaOrigen) {
        $this->ctaOrigen = $ctaOrigen;
    }

    public function setBancoOrigen($bancoOrigen) {
        $this->bancoOrigen = $bancoOrigen;
    }

    public function setCtaDestino($ctaDestino) {
        $this->ctaDestino = $ctaDestino;
    }

    public function setBancoDestino($bancoDestino) {
        $this->bancoDestino = $bancoDestino;
    }


}

?>