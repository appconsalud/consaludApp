<?php

/* 
 * Modela un usuario dentro del sistema.
 */


class Usuario{
    private $nombre; 
    private $apellido;
    private $user; // Asociar con objeto del tipo NombreUsuario
    private $pass;
    private $fnac;
    private $rol; //asociar con un objeto del tipo rol
    private $pais;
    private $email;
    private $celular;
    private $titulo; //asociar con un objeto del tipo Titulo
    private $especialidades; //es un array de objetos Especialidad
    private $congresosAsistente; //Array de congresos 
    private $congresosExpositor; //Array de congresos
    private $activo;
    private $pagos; //Array de pagos
    private $redes; //objeto de tipo redes
    private $seguirmeExpositor = false;  // boolean que permite ver si es seguible o no
    private $seguirmeAsistente = false;  //boolean que permite ver si es seguible como asistente o no
    private $tipo; //objeto del tipo TipoUser
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getFnac() {
        return $this->fnac;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getEspecialidades() {
        return $this->especialidades;
    }

    public function getCongresosAsistente() {
        return $this->congresosAsistente;
    }

    public function getCongresosExpositor() {
        return $this->congresosExpositor;
    }

    public function isActivo() {
        return $this->activo;
    }

    public function getPagos() {
        return $this->pagos;
    }

    public function getRedes() {
        return $this->redes;
    }

    public function isSeguirmeExpositor() {
        return $this->seguirmeExpositor;
    }

    public function isSeguirmeAsistente() {
        return $this->seguirmeAsistente;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setFnac($fnac) {
        $this->fnac = $fnac;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setEspecialidades($especialidades) {
        $this->especialidades = $especialidades;
    }

    public function setCongresosAsistente($congresosAsistente) {
        $this->congresosAsistente = $congresosAsistente;
    }

    public function setCongresosExpositor($congresosExpositor) {
        $this->congresosExpositor = $congresosExpositor;
    }

    public function activar() {
        if(!$this->isActivo())
            $this->activo = true;
    }

    public function setPagos($pagos) {
        $this->pagos = $pagos;
    }

    public function setRedes($nombreRed, $usuarioRed) {
        if(!isset($this->redes)){
            $this->redes = new RedesSociales();
        }
        $redActual = $this->redes;
            switch ($nombreRed){
                case 'facebook' : $redActual->setFacebook($usuarioRed); break;
                case 'twitter' : $redActual->setTwitter($usuarioRed); break;
                case 'linkedin' : $redActual->setLinkedin($usuarioRed); break;
                case 'pinterest' : $redActual->setPinterest($usuarioRed); break;
                case 'youtube' : $redActual->setYoutube($usuarioRed); break;
                case 'instagram' : $redActual->setInstagtram($usuarioRed); break;
            }
    }

    public function activarSeguirmeExpositor() {
        if(!$this->isSeguirmeExpositor())
            $this->seguirmeExpositor = true;
    }

    public function activarSeguirmeAsistente($seguirmeAsistente) {
        if($this->isSeguirmeAsistente())
            $this->seguirmeAsistente = true;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    
    /**
     *  TENGO QUE VER COMO COMPARAR ESTOS OBJETOS, TEBNGO QUE ENCONTRAR UN IDENTIFICADOR UNICO PARA CADA USUARIO
     * @param type $user
     * @return boolean
     */
    public function equals ($user){
        return false;
    }
    
    
    
}

?>
