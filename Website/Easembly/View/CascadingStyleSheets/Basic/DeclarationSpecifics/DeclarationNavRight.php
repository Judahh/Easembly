<?php

/**
 * DeclarationNavRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationNavRight extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavRight::DeclarationNavRightStringValue($stringValue);
        public static function DeclarationNavRightWithStringValue($stringValue) {
            $instance = new parent("nav-right", $stringValue);
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