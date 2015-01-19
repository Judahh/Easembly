<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationHeight
 *
 * @author Silvio
 */
class DeclarationHeight extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationHeight::DeclarationHeightStringValue($stringValue);
//      $declaration = DeclarationHeight::DeclarationHeightIntegerValue($integerValue);
        public static function DeclarationHeightWithStringValue($stringValue) {
            $instance = new parent("height", $stringValue);
            return $instance;
        }

        public static function DeclarationHeightWithIntegerValue($integerValue) {
            $instance = new parent("height", $integerValue);
            return $instance;
        }
                
        public static function stringValueAuto() {
            return "auto";
        }    
}
