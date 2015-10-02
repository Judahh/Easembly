<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationIcon
 *
 * @author Silvio
 */
class DeclarationIcon extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationIcon::DeclarationIconStringValue($stringValue);
        public static function DeclarationIconWithStringValue($stringValue) {
            $instance = new parent("height", $stringValue);
            return $instance;
        }
              
        public static function DeclarationIconWithBasicUniformResourceLocatorWithStringValue($basicUniformResourceLocator, $stringValue) {
            $instance = new parent("cursor", $basicUniformResourceLocator->stringBasicUniformResourceLocator().",".$stringValue); //arrumar
            return $instance;
        }

        public static function stringValueAuto() {
            return "auto";
        }
}
