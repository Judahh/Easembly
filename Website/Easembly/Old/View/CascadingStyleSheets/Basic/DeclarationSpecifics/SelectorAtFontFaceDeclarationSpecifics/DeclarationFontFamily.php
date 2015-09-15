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
    class DeclarationFontFamily extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignContent::DeclarationAlignContentWithStringValue($stringValue);
        public static function DeclarationFontFamilyWithStringName($stringName) {
            $instance = new parent("font-family", $stringName); //arrumar
            return $instance;
        }
        
        public static function DeclarationFontFamilyWithStringValue($stringValue) {
            $instance = new parent("font-family", $stringValue); //arrumar
            return $instance;
        }
    }

?>