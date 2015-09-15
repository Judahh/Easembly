<?php

/**
 * DeclarationTransformStyle [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransformStyle extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransformStyle::DeclarationTransformStyleWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationTransformStyleWithStringValue($stringValue) {
        $instance = new parent("transform-style", $stringValue);
        return $instance;
    }
    
    public static function stringValueFlat() {
        return "flat";
    }
    
    public static function stringValuePreserve3D() {
        return "preserve-3d";
    }
    
    public function stringDeclaration() {
        $stringFullDeclaration = "";
        $arrayStringBrowserPrefix = BrowserDiffer::getInstance()->getArrayStringBrowserPrefix();
        foreach ($arrayStringBrowserPrefix as &$stringBrowserPrefix) {
            $stringFullDeclaration = $stringFullDeclaration . $stringBrowserPrefix . $this->stringProperty . ":" . $this->stringValue . ";";
        }
        return $stringFullDeclaration;
    }
}

?>