<?php

/* 
 * Implementa los posibles costos que existen según el tipo de usuario que está en el sistema
 */

class CostosUser{
    private $tipo; //Es una instancia de tipoUser
    private $costo;
    
    public function getTipo() {
        return $this->tipo;
    }

    public function getCosto() {
        return $this->costo;
    }

    public function setTipo($tipo) {
        switch ($tipo){
            case "estudiante"      : $this->tipo = TipoUser::Estudiante; break;
            case "especialista"    : $this->tipo = TipoUser::Especialista; break;
            case "aprendiz"        : $this->tipo = TipoUser::Aprendiz; break;
            case "sinEspecialidad" : $this->tipo = TipoUser::sinEspecialidad; break;
        }
        
    }

    public function setCosto($costo) {
        $this->costo = $costo;
    }


}

?>