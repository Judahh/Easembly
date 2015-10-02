<?php

/**
 * DeclarationOverflowX [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOverflowX extends DeclarationOverflow{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOverflowX::DeclarationOverflowXWithStringValue($stringValue);
    public static function DeclarationOverflowXWithStringValue($stringValue) {
        $instance = new parent("overflow-x", $stringValue);
        return $instance;
    }
    
}

?>