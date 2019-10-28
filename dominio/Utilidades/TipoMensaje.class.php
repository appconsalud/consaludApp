<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TipoMensaje extends SplEnum{
    const __default = self::none;
    
    const error = 1;
    const advertencia = 2;
    const ok = 3;
}


?>