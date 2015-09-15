<?php

/**
 * DeclarationTransitionDelay [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransitionDelay extends DeclarationTransition{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransitionDelay::DeclarationTransitionDelayWithStringValue($stringValue);
    public static function DeclarationTransitionDelayWithStringValue($stringValue) {
        $instance = new parent("transition-delay", $stringValue);
        return $instance;
    }
  
    public static function DeclarationTransitionDelayWithBasicTime($basicTime) {
        $instance = new parent("transition-delay", $basicTime->stringBasicTime());
        return $instance;
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