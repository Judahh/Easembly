<?php

/**
 * DeclarationUnicodeBidirectional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationUnicodeBidirectional extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationUnicodeBidirectional::DeclarationUnicodeBidirectionalWithStringValue($stringValue);
    public static function DeclarationUnicodeBidirectionalWithStringValue($stringValue) {
        $instance = new parent("unicode-bidi", $stringValue);
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueEmbed() {
        return "embed";
    }
    
    public static function stringValueBidirectionalOverride() {
        return "bidi-override";
    }
    
}

?>