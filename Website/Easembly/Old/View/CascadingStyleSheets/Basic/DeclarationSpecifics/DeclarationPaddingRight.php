<?php

/**
 * DeclarationPaddingRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationPaddingRight extends Declaration{
    //Constructor
//   instantiation: 
//      $declaration = DeclarationPaddingRight::DeclarationPaddingRightWithStringValue($stringValue);
    public static function DeclarationPaddingRightWithStringValue($stringValue) {
        $instance = new parent("padding-right", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingRightWithBasicLength($basicLength) {
        $instance = new parent("padding-right", $basicLength->stringBasicLength());
        return $instance;
    }
}

?>