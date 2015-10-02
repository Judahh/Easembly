<?php

/**
 * DeclarationTextAlignLast [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTextAlignLast extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTextAlignLast::DeclarationTextAlignLastWithStringValue($stringValue);
    public static function DeclarationTextAlignLastWithStringValue($stringValue) {
        $instance = new parent("text-align-last", $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
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
    
    public static function stringValueStart() {
        return "start";
    }
    
    public static function stringValueEnd() {
        return "end";
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