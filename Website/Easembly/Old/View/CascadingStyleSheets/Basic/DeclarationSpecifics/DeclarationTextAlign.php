<?php

/**
 * DeclarationTextAlign [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextAlign extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextAlign::DeclarationTextAlignWithStringValue($stringValue);
    public static function DeclarationTextAlignWithStringValue($stringValue) {
        $instance = new parent("text-align", $stringValue);
        return $instance;
    }

    public static function stringValueLeft() {
        return "left";
    }
    
    public static function stringValueRight() {
        return "right";
    }
    
    public static function stringValueCenter() {
        return "center";
    }
    
    public static function stringValueJustify() {
        return "justify";
    }
    
}

?>