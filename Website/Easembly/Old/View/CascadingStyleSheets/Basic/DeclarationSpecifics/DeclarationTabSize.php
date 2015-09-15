<?php

/**
 * DeclarationTabSize [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTabSize extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationTabSize::DeclarationTabSizeWithStringValue($stringValue);
    public static function DeclarationTabSizeWithStringValue($stringValue) {
        $instance = new parent("tab-size", $stringValue);
        return $instance;
    }
    
    public static function stringValueLeft() {
        return "left";
    }
    
    public static function stringValueRight() {
        return "right";
    }
    
    public static function stringValueCenter() {
        return "center";
    }
    
    public static function stringValueJustify() {
        return "justify";
    }
    
    public static function stringValueNumber() {
        return "number";
    }
    
    public static function DeclarationTextIndentWithBasicLength($basicLength) {
        $instance = new parent("tab-size", $basicLength->stringBasicLength());
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