<?php

/**
 * DeclarationRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTabSize::DeclarationTabSizeWithStringValue($stringValue);
class DeclarationRight extends Declaration{
    public static function DeclarationRightWithStringValue($stringValue) {
        $instance = new parent("right", $stringValue);
        return $instance;
    }
    
     public static function DeclarationRightIndentWithBasicLength($basicLength) {
        $instance = new parent("right", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }
}

?>