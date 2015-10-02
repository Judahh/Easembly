<?php

/**
 * DeclarationOpacity [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOpacity extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOpacity::DeclarationOpacityWithStringValue($stringValue);
        public static function DeclarationOpacityWithStringValue($stringValue) {
            $instance = new parent("opacity", $stringValue);
            return $instance;
        }
        
        public static function stringValueNumber() {
            return "number";
        }
}

?>