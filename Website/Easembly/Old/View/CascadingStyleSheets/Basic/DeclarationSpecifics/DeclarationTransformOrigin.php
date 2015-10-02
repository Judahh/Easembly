<?php

/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransformOrigin extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransformOrigin::DeclarationTransformOriginWithStringValue($stringValue);
    public static function DeclarationTransformOriginWithStringValue($stringValue) {
        $instance = new parent("transform-origin", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicHorizontalAxis($basicHorizontalAxis) {
        $instance = new parent("x-axis", $basicHorizontalAxis->stringBasicHorizontalAxis());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicVerticalAxis($basicVerticalAxis) {
        $instance = new parent("y-axis", $basicVerticalAxis->stringBasicVerticalAxis());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicSimpleLengthLongitudinal($basicSimpleLengthLongitudinal) {
        $instance = new parent("z-axis", $basicSimpleLengthLongitudinal->stringBasicSimpleLength());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicHorizontalAxisWithBasicVerticalAxis($basicHorizontalAxis, $basicVerticalAxis) {
        $instance = new parent("x-axis", $basicHorizontalAxis->stringBasicHorizontalAxis() ." ". $basicVerticalAxis->stringBasicVerticalAxis());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicHorizontalAxisWithBasicSimpleLengthLongitudinal($basicHorizontalAxis, $basicSimpleLengthLongitudinal) {
        $instance = new parent("x-axis", $basicHorizontalAxis->stringBasicHorizontalAxis() ." ". $basicSimpleLengthLongitudinal->stringBasicSimpleLength());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicVerticalAxisWithBasicSimpleLengthLongitudinal($basicVerticalAxis, $basicSimpleLengthLongitudinal) {
        $instance = new parent("x-axis", $basicVerticalAxis->stringBasicVerticalAxis() ." ". $basicSimpleLengthLongitudinal->stringBasicSimpleLength());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicHorizontalAxisWithBasicVerticalAxisWithBasicSimpleLengthLongitudinal($basicHorizontalAxis, $basicVerticalAxis, $basicSimpleLengthLongitudinal) {
        $instance = new parent("x-axis", $basicHorizontalAxis->stringBasicHorizontalAxis() ." ". $basicVerticalAxis->stringBasicVerticalAxis() ." ". $basicSimpleLengthLongitudinal->stringBasicSimpleLength());
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