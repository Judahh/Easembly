<?php

/**
 * DeclarationPerspective [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPerspective extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPerspective::DeclarationPerspectiveWithStringValue($stringValue);
    public static function DeclarationPerspectiveWithStringValue($stringValue) {
        $instance = new parent("perspective", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPerspectivetWithBasicSimpleLength($basicSimpleLength) {
        $instance = new parent("perspective", $basicSimpleLength->stringBasicSimpleLength());
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