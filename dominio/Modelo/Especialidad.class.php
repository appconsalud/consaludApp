<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Especialidad{
    
    private $id;      //Obtengo desde la BD
    private $nombre;
    private $titulo; //Objeto del tipo titulo
    
    public function __construct($nombre, $titulo) {
        $this->nombre = $nombre;
        $this->titulo = $titulo;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }


}


?>