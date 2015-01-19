<?php

/**
 * DeclarationMarginRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMarginRight extends Declaration{
    //Constructor
//   instantiation: 
//      $declaration = DeclarationMarginRight::DeclarationMarginRightWithStringValue($stringValue);
    public static function DeclarationMarginRightWithStringValue($stringValue) {
        $instance = new parent("margin-right", $stringValue);
        return $instance;
    }
    
    public static function DeclarationMarginRightWithBasicLength($basicLength) {
        $instance = new parent("margin-right", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
}

?>