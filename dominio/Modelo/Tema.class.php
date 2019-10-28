<?php

/* 
 * Modela un tema a ser tratado en los distintos congresos
 */

class Tema {
    private $titulo;
    private $expositor;
    private $descripcion;
    private $idioma;
    
    public function __construct($titulo, $expositor, $idioma) {
        $this->titulo = $titulo;
        $this->expositor = $expositor;
        $this->idioma = $idioma;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getExpositor() {
        return $this->expositor;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setExpositor($expositor) {
        $this->expositor = $expositor;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    public function equals ($tema){
        
        $exp1 = $this->getExpositor();
        $exp2 = $tema->getExpositor();
        if (strcmp($this->getTitulo(), $tema->getTitulo()) == 0 && $exp1->equals($exp2)
                && $this->getIdioma() == $tema->getIdioma())
                return TRUE;
        else {
            return FALSE;
        }
    }

    
}


?>