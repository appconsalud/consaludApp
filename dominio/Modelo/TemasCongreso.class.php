<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TemasCongreso{
    
    private $temas; //será un array y se inicializa en el constructor
    
    public function __construct() {
        $this->temas = array();
    }

    public function getTemas() {
        return $this->temas;
    }

    public function setTemas($temas) {
        $this->temas = $temas;
    }

    public function addTema($tema){
        try{
            array_push($this->temas, $tema);
        }
        catch (Exception $e){
            echo "Error al intentar ingresar un tema: ".$e->getMessage();
        }
    }

}

?>