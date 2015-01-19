<?php

/**
 * DeclarationPaddingTop [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationPaddingTop extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPaddingTop::DeclarationPaddingTopWithStringValue($stringValue);
    public static function DeclarationPaddingTopWithStringValue($stringValue) {
        $instance = new parent("padding-top", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingLeftWithBasicLength($basicLength) {
        $instance = new parent("padding-top", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>