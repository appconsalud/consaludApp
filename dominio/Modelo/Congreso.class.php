<?php

/* 
 * Modela un congreso como unidad dentro del sistema.
 */

class Congreso{
    
    private $nombre;
    private $fecha;
    private $especialidad;
    private $ciudad;
    private $tematica;
    private $temas;
    private $costos;
    private $inscriptos;
    private $expositores;
    private $programa;
    private $presentaciones;
    
    function _construct ($n, $f, $e, $c){
        $this->nombre = $n;
        $this->fecha = $f;
        $this->especialidad = $e;
        $this->ciudad = $c;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getTematica() {
        return $this->tematica;
    }

    public function getTemas() {
        return $this->temas;
    }

    public function getCostos() {
        return $this->costos;
    }

    public function getInscriptos() {
        return $this->inscriptos;
    }

    public function getExpositores() {
        return $this->expositores;
    }

    public function getPrograma() {
        return $this->programa;
    }

    public function getPresentaciones() {
        return $this->presentaciones;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setTematica($tematica) {
        $this->tematica = $tematica;
    }

    public function setTemas($temas) {
        $this->temas = $temas;
    }

    public function setCostos($costos) {
        $this->costos = $costos;
    }

    public function setInscriptos($inscriptos) {
        $this->inscriptos = $inscriptos;
    }

    public function setExpositores($expositores) {
        $this->expositores = $expositores;
    }

    public function setPrograma($programa) {
        $this->programa = $programa;
    }

    public function setPresentaciones($presentaciones) {
        $this->presentaciones = $presentaciones;
    }


    
}


?>