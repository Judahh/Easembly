<?php

/**
 * DeclarationNavLeft [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationNavLeft extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavLeft::DeclarationNavLeftStringValue($stringValue);
        public static function DeclarationNavLeftWithStringValue($stringValue) {
            $instance = new parent("nav-left", $stringValue);
            return $instance;
        }
        
        public static function stringValueAuto() {
            return "auto";
        }
        
        public static function stringValueIdentification() {
            return "id";
        }
        
        public static function stringValueTargetName() {
            return "target-name";
        }
        
}

?>