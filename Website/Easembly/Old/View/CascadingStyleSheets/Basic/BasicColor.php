<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicColor
 *
 * @author Judah
 */
class BasicColor {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicColorWithIntHexdecimalColor($intHexdecimalColor) {
        $instance = new self("#".$intHexdecimalColor);
        return $instance;
    }
    
    public static function BasicColorWithIntRedWithIntGreenWithIntBlue($intRed, $intGreen, $intBlue) {
        $instance = new self("rgb(".$intRed.",".$intGreen.",".$intBlue.")");
        return $instance;
    }
    
    public static function BasicColorWithIntRedWithIntGreenWithIntBlueWithFloatOpacity($intRed, $intGreen, $intBlue, $floatOpacity) {
        $instance = new self("rgba(".$intRed.",".$intGreen.",".$intBlue.",".$floatOpacity.")");
        return $instance;
    }
    
    public static function BasicColorWithIntHueWithIntPercentSaturationWithIntPercentLightness($intHue, $intPercentSaturation, $intPercentLightness) {
        $instance = new self("hsl(".$intHue.",".$intPercentSaturation."%,".$intPercentLightness."%)");
        return $instance;
    }
    
    public static function BasicColorWithIntHueWithIntPercentSaturationWithIntPercentLightnessWithFloatOpacity($intHue, $intPercentSaturation, $intPercentLightness, $floatOpacity) {
        $instance = new self("hsla(".$intHue.",".$intPercentSaturation."%,".$intPercentLightness."%,".$floatOpacity.")");
        return $instance;
    }
    
    public static function BasicColorWithStringValue($stringValue) {
        $instance = new self($stringValue);
        return $instance;
    }

    public function stringBasicColor() {
        return $this->stringValue;
    }
}
