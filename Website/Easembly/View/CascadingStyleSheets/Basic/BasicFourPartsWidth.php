<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationWidth
 *
 * @author Judah
 */
class BasicFourPartsWidth{

    private $stringBasicFourPartsWidth;

    private function __construct($stringBasicFourPartsWidth) {
        $this->stringBasicFourPartsWidth = $stringBasicFourPartsWidth;
    }
    
    public static function BasicFourPartsWidthWithStringValue($stringValue) {
        $instance = new parent($stringValue);
        return $instance;
    }
    
    public static function BasicFourPartsWidthWithBasicWidthAllParts
            ($basicWidthAllParts) {
        $instance = new parent($basicWidthAllParts->stringBasicWidth());
        return $instance;
    }
    
    public static function 
            BasicFourPartsWidthWithBasicWidthTopAndBottomPartsWithBasicWidthRightAndLeftParts
            ($basicWidthTopAndBottomParts, $basicWidthRightAndLeftParts) {
        $instance = new parent($basicWidthTopAndBottomParts->stringBasicWidth()." ".$basicWidthRightAndLeftParts->stringBasicWidth());
        return $instance;
    }
    
    public static function 
            BasicFourPartsWidthWithBasicWidthTopPartWithBasicWidthRightAndLeftPartsWithBasicWidthBottomPart
            ($basicWidthTopPart, $basicWidthRightAndLeftParts, $basicWidthBottomPart) {
        $instance = new parent($basicWidthTopPart->stringBasicWidth()." ".$basicWidthRightAndLeftParts->stringBasicWidth()." ".$basicWidthBottomPart->stringBasicWidth());
        return $instance;
    }
    
    public static function 
            BasicFourPartsWidthWithBasicWidthTopPartWithBasicWidthRightPartWithBasicWidthBottomPartWithBasicWidthLeftPart
            ($basicWidthTopPart, $basicWidthRightPart, $basicWidthBottomPart, $basicWidthLeftPart) {
        $instance = new parent($basicWidthTopPart->stringBasicWidth()." ".$basicWidthRightPart->stringBasicWidth()." ".$basicWidthBottomPart->stringBasicWidth()." ".$basicWidthLeftPart->stringBasicWidth());
        return $instance;
    }
    
    public function stringBasicFourPartsWidth() {
        return $this->stringBasicFourPartsWidth;
    }
}

?>