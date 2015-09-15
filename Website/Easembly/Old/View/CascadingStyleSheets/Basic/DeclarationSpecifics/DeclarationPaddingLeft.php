<?php

/**
 * DeclarationPaddingLeft [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPaddingLeft extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPaddingLeft::DeclarationPaddingLeftWithStringValue($stringValue);
    public static function DeclarationPaddingLeftWithStringValue($stringValue) {
        $instance = new parent("padding-left", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingLeftWithBasicLength($basicLength) {
        $instance = new parent("padding-left", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>