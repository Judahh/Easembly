<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColumnRule
 *
 * @author Silvio
 */
class DeclarationColumnRule extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function
    DeclarationColumnRuleWithColumnRuleValue($columnRuleValue) {
        $stringFullValue = "";
        $arrayColumnRuleValue = $columnRuleValue->getArrayColumnRuleValue();
        $count = count($arrayColumnRuleValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayColumnRuleValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayColumnRuleValue[$count-1];
        $instance = new parent("column-rule", $stringFullValue);
        return $instance;
    }
    
    public static function
    DeclarationColumnRuleWithStringValue($stringValue) {
        $instance = new parent("column-rule", $stringValue);
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
