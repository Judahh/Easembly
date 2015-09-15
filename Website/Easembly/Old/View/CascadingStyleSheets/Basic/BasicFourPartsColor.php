<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
class BasicFourPartsColor{

    private $stringBasicFourPartsColor;

    private function __construct($stringBasicFourPartsColor) {
        $this->stringBasicFourPartsColor = $stringBasicFourPartsColor;
    }
    
    public static function BasicFourPartsColorWithStringValue($stringValue) {
        $instance = new parent($stringValue);
        return $instance;
    }
    
    public static function BasicFourPartsColorWithBasicColorAllParts
            ($basicColorAllParts) {
        $instance = new parent($basicColorAllParts->stringBasicColor());
        return $instance;
    }
    
    public static function 
            BasicFourPartsColorWithBasicColorTopAndBottomPartsWithBasicColorRightAndLeftParts
            ($basicColorTopAndBottomParts, $basicColorRightAndLeftParts) {
        $instance = new parent($basicColorTopAndBottomParts->stringBasicColor()." ".$basicColorRightAndLeftParts->stringBasicColor());
        return $instance;
    }
    
    public static function 
            BasicFourPartsColorWithBasicColorTopPartWithBasicColorRightAndLeftPartsWithBasicColorBottomPart
            ($basicColorTopPart, $basicColorRightAndLeftParts, $basicColorBottomPart) {
        $instance = new parent($basicColorTopPart->stringBasicColor()." ".$basicColorRightAndLeftParts->stringBasicColor()." ".$basicColorBottomPart->stringBasicColor());
        return $instance;
    }
    
    public static function 
            BasicFourPartsColorWithBasicColorTopPartWithBasicColorRightPartWithBasicColorBottomPartWithBasicColorLeftPart
            ($basicColorTopPart, $basicColorRightPart, $basicColorBottomPart, $basicColorLeftPart) {
        $instance = new parent($basicColorTopPart->stringBasicColor()." ".$basicColorRightPart->stringBasicColor()." ".$basicColorBottomPart->stringBasicColor()." ".$basicColorLeftPart->stringBasicColor());
        return $instance;
    }
    
    public function stringBasicFourPartsColor() {
        return $this->stringBasicFourPartsColor;
    }
}

?>