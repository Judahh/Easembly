<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationContent
 *
 * @author Silvio
 */
class DeclarationContent extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function
    DeclarationContentWithContentValue($contentValue) {
        $stringFullValue = "";
        $arrayContentValue = $contentValue->getArrayContentValue();
        $count = count($arrayContentValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayContentValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayContentValue[$count-1];
        $instance = new parent("content", $stringFullValue);
        return $instance;
    }
    
    public static function
    DeclarationContentWithStringValue($stringValue) {
        $instance = new parent("content", $stringValue);
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
