<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationLetterSpacing
 *
 * @author Silvio
 */
class DeclarationLetterSpacing extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationLetterSpacing::DeclarationLetterSpacingStringValue($stringValue);
//      $declaration = DeclarationLetterSpacing::DeclarationLetterSpacingIntegerValue($integerValue);
        public static function DeclarationLetterSpacingWithStringValue($stringValue) {
            $instance = new parent("letter-spacing", $stringValue);
            return $instance;
        }

        public static function DeclarationLetterSpacingWithBasicSimpleLength($basicSimpleLength) {
            $instance = new parent("letter-spacing", $basicSimpleLength->stringBasicSimpleLength());
            return $instance;
        }
                
        public static function stringValueNormal() {
            return "normal";
        }
   
}
