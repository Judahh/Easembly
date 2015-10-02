<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnWidth
 *
 * @author Asus
 */
class DeclarationColumnWidth extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationColumnWidth::DeclarationColumnWidthStringValue($stringValue);
//      $declaration = DeclarationColumnWidth::DeclarationColumnWidthIntegerValue($integerValue);
        public static function DeclarationColumnWidthWithStringValue($stringValue) {
            $instance = new parent("column-width", $stringValue);
            return $instance;
        }
        
        public static function DeclarationColumnWidthWithIntegerValue($integerValue) {
            $instance = new parent("column-width", $integerValue);
            return $instance;
        }
                
        public static function stringValueAuto() {
            return "auto";
        }
}
