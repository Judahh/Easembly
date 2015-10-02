<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Declaration ColumnGap
 *
 * @author Silvio
 */
class DeclarationColumnGap extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationColumnGap::DeclarationColumnGapStringValue($stringValue);
//      $declaration = DeclarationColumnGap::DeclarationColumnGapIntegerValue($integerValue);
        public static function DeclarationColumnGapWithStringValue($stringValue) {
            $instance = new parent("column-gap", $stringValue);
            return $instance;
        }

        public static function DeclarationColumnGapWithIntegerValue($integerValue) {
            $instance = new parent("column-gap", $integerValue);
            return $instance;
        }
                
        public static function stringValueNormal() {
            return "normal";
        }
   
}
