<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
    class DeclarationAlignSelf extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignSelf::DeclarationAlignSelfWithStringValue($stringValue);
        public static function DeclarationAlignSelfWithStringValue($stringValue) {
            $instance = new parent("align-self", $stringValue); //arrumar
            return $instance;
        }
        
        public static function stringValueAuto() {
            return "auto";
        }
        
        public static function stringValueStretch() {
            return "stretch";
        }
        
        public static function stringValueCenter() {
            return "center";
        }
        
        public static function stringValueFlexStart() {
            return "flex-start";
        }
        
        public static function stringValueFlexEnd() {
            return "flex-end";
        }
        
        public static function stringValueBaseline() {
            return "baseline";
        }
    }

?>