<?php

/* 
 * Modela los tipos de usuarios que puede haber dentro del sistema.
 */

abstract class TipoUser{
    
    const Estudiante = 0;
    const Especialista = 1;
    const Aprendiz = 2;
    const sinEspecialidad = 3;
}

?>