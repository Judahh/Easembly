<?php

/**
 * DeclarationNavIndex [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationNavIndex extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavIndex::DeclarationNavIndexStringValue($stringValue);
        public static function DeclarationNavIndexWithStringValue($stringValue) {
            $instance = new parent("nav-index", $stringValue);
            return $instance;
        }
        
        public static function stringValueAuto() {
            return "auto";
        }
        
        public static function stringValueNumber() {
            return "number";
        }
        
}

?>