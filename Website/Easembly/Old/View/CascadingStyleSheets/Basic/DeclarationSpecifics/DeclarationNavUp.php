<?php

/**
 * DeclarationNavUp [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationNavUp extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavUp::DeclarationNavUpStringValue($stringValue);
        public static function DeclarationNavUpWithStringValue($stringValue) {
            $instance = new parent("nav-up", $stringValue);
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