<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnCount
 *
 * @author Silvio
 */
class DeclarationColumnCount extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationColumnCount::DeclarationColumnCountStringValue($stringValue);
//      $declaration = DeclarationColumnCount::DeclarationColumnCountIntegerValue($integerValue);
        public static function DeclarationColumnCountWithStringValue($stringValue) {
            $instance = new parent("column-count", $stringValue);
            return $instance;
        }

        public static function DeclarationColumnCountWithIntegerValue($integerValue) {
            $instance = new parent("column-count", $integerValue);
            return $instance;
        }
                
        public static function stringValueAuto() {
            return "auto";
        }
   
}
