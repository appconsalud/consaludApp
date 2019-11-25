<?php

include_once "Presentacion.class.php";
include_once "Usuario.class.php";
include_once "CostosUser.class.php";

/* 
 * Modela un congreso como unidad dentro del sistema.
 */

class Congreso{
    
    private $id;   //Este dato vendrá desde la BD
    private $nombre;
    private $fechaInicio;
    private $fechaFin;
    private $especialidad;
    private $ciudad;
    private $tematica;
    private $temas;
    private $costos;
    private $asistentes;
    private $expositores;
    private $programa;
    private $presentaciones;
    
    public function _construct ($n, $f, $e, $c){
        $this->nombre = $n;
        $this->fecha = $f;
        $this->especialidad = $e;
        $this->ciudad = $c;
        $this->temas = new TemasCongreso();
        $this->costos = array();
        $this->asistentes = array();
        $this->expositores = array();
        $this->presentaciones = array();
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

    public function getFechaInicio() {
        return $this->fecha;
    }

    public function getFechaFin() {
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

    public function getAsistentes() {
        return $this->asistentes;
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

    public function setFechaInicio($fecha) {
        $this->fecha = $fecha;
    }

    public function setFechaFin($fecha) {
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
        if($temas instanceof TemasCongreso){
            $this->temas = $temas;
        }else{
            throw new Exception("Lo que está ingresando a los temas del congreso NO son temas de Congreso");
        }
    }

    public function setCostos($costos) {
        if($costos instanceof CostosUser){
            $this->costos = $costos;            
        }else{
            throw new Exception("Lo que está ingresando al congreso no es un costo por usuario.");
        }

        
    }

    public function setAsistentes($asistente) {
        if($asistente instanceof Usuario){
            array_push($this->asistentes, $asistente);
        }else{
            throw new Exception("Lo que está ingresando como asistente no es un usuario válido para el congreso");
        }
    }

    public function setExpositores($expositor) {
        if($expositor instanceof Usuario){
            array_push($this->expositores, expositor);
        }else{
            throw new Exception("Lo que está ingresando no es un expositor.", 1);
            
        }
    }

    public function setPrograma($programa) {
        $this->programa = $programa;
    }

    public function setPresentaciones($presentaciones) {
        $this->presentaciones = $presentaciones;
    }

    public function addTemas($unTema){
        try{
            array_push($this->temas, $unTema);
        } catch (Exception $e) {
            echo 'Error al intentar agregar un tema a un congreso: ',  $e->getMessage(), "\n";
        }
    }

    public function addCosto($unCosto, $user){
        if(($unCosto instanceof CostoUser) || ($user instanceof TipoUser)){
            $unCosto->setTipo($user);
            array_push($this->costos, $unCosto);
        }else{
            throw new Exception("No está insertando un costo o un tipo de usuario valido", 1);
        }
    }

    public function addInscripto ($unInscripto){
        if($unInscripto instanceof Usuario){
            array_push($this->inscriptos, $unInscripto);
        }else{
            throw new Exception("Lo que ingresó no es un usuario valido ", 1);
        }
    }


    public function addExpositor($unExpositor){
        if($unExpositor instanceof Usuario){
            array_push($this->expositores, $unExpositor);
        }else{
            throw new Exception("Lo que ingresó no es un usuario valido ", 1);
        }
    }

    public function addPresentacion($unaPresentacion){
        if($unaPresentacion instanceof Presentacion){
            array_push($presentaciones, $unaPresentacion);
        }else{
            throw new Exception("Lo que está intentando ingresar no es una presentacion ", 1);
            
        }
    }

    
}


?>