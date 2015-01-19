<?php

/**
 * DeclarationTransitionProperty [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransitionProperty extends DeclarationTransition{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransitionProperty::DeclarationTransitionPropertyWithStringValue($stringValue);
    public static function DeclarationTransitionPropertyWithStringValue($stringValue) {
        $instance = new parent("transition-property", $stringValue);
        return $instance;
    }
  
    public static function stringValueNone() {
        return "none";
    }
    
    public static function stringValueAll() {
        return "all";
    }
    
    public static function stringValueProperty() {
        return "property";
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