<?php

/**
 * DeclarationTransitionTimingFunction [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationTransitionTimingFunction extends DeclarationTransition {
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransitionTimingFunction::DeclarationTransitionTimingFunctionWithStringValue($stringValue);
    public static function DeclarationTransitionTimingFunctionWithStringValue($stringValue) {
        $instance = new parent("transition-timing-function", $stringValue);
        return $instance;
    }

    public static function DeclarationTransitionTimingFunctionWithBasicCubicBezier($basicCubicBezier) {
        $instance = new parent("transition-timing-function", $basicCubicBezier->basicCubicBezier());
        return $instance;
    }

    public static function stringValueEase() {
        return "ease";
    }

    public static function stringValueLinear() {
        return "linear";
    }

    public static function stringValueEaseIn() {
        return "ease-in";
    }

    public static function stringValueEaseOut() {
        return "ease-out";
    }

    public static function stringValueEaseInOut() {
        return "ease-in-out";
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