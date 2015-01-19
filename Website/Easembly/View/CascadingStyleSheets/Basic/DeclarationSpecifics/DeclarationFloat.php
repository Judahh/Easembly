<?php

/**
 * DeclarationFloat [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationFloat extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationFloat::DeclarationFloatStringValue($stringValue);
        public static function DeclarationFloatWithStringValue($stringValue) {
            $instance = new parent("float", $stringValue);
            return $instance;
        }
        
        public static function stringValueNone() {
            return "none";
        }
        
        public static function stringValueLeft() {
            return "left";
        }
        
        public static function stringValueRight() {
            return "right";
        }
}

?>