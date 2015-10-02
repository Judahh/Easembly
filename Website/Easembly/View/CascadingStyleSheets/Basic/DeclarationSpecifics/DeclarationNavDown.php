<?php

/**
 * DeclarationNavDown [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationNavDown extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavDown::DeclarationNavDownStringValue($stringValue);
        public static function DeclarationNavDownWithStringValue($stringValue) {
            $instance = new parent("nav-down", $stringValue);
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