<?php
@include 'Genero.class.php';
/* 
 * Genera un titulo. 
 * Estos titulos se obtendran de la base de datos directamente como una entidad.
 */

class Titutlo{
    
    
    private $nombre;
    private $genero;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        if(get_class($genero)== "Genero"){
            $this->genero = $genero;
        }
        else {
            echo "Tipo de genero incorrecto";
        }
    }


}

?>