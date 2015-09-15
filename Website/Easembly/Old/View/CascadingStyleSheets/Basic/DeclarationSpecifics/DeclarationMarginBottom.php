<?php

/**
 * DeclarationMarginBottom [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationMarginBottom extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationMarginBottom::DeclarationMarginBottomWithStringValue($stringValue);
    public static function DeclarationMarginBottomWithStringValue($stringValue) {
        $instance = new parent("margin-bottom", $stringValue);
        return $instance;
    }
    
    public static function DeclarationMarginBottomWithBasicLength($basicLength) {
        $instance = new parent("margin-bottom", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
}

?>