<?php

/**
 * DeclarationTextIndent [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextIndent extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextIndent::DeclarationTextIndentWithStringValue($stringValue);
    public static function DeclarationTextIndentWithStringValue($stringValue) {
        $instance = new parent("text-indent", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTextIndentWithBasicLength($basicLength) {
        $instance = new parent("text-indent", $basicLength->stringBasicLength());
        return $instance;
    }
    
}
