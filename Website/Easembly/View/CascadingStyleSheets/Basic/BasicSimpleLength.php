<?php

/**
 * Description of BasicSimpleLength
 *
 * @author Judah
 */

class BasicSimpleLength {

    private $floatSimpleLength;
    private $stringUnity;

    private function __construct($floatSimpleLength, $stringUnity) {
        $this->floatSimpleLength = $floatSimpleLength;
        $this->stringUnity = $stringUnity;
    }

    public static function BasicSimpleLengthWithFloatSimpleLengthWithStringUnity($floatSimpleLength, $stringUnity) {
        $instance = new self($floatSimpleLength, $stringUnity);
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthMillimeter($floatSimpleLengthMillimeter) {
        $instance = new self($floatSimpleLengthMillimeter, "mm");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthCentimeter($floatSimpleLengthCentimeter) {
        $instance = new self($floatSimpleLengthCentimeter, "cm");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthInch($floatSimpleLengthInch) {
        $instance = new self($floatSimpleLengthInch, "in");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthFontXHeight($floatSimpleLengthFontXHeight) {
        $instance = new self($floatSimpleLengthFontXHeight, "ex");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthFontSize($floatSimpleLengthFontSize) {
        $instance = new self($floatSimpleLengthFontSize, "em");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthPoint($floatSimpleLengthPoint) {
        $instance = new self($floatSimpleLengthPoint, "pt");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthPica($floatSimpleLengthPica) {
        $instance = new self($floatSimpleLengthPica, "pc");
        return $instance;
    }
    
    public static function BasicSimpleLengthWithFloatSimpleLengthPixel($floatSimpleLengthPixel) {
        $instance = new self($floatSimpleLengthPixel, "px");
        return $instance;
    }
    
    public function getFloatSimpleLength() {
        return $this->floatSimpleLength;
    }
    
    public function getStringUnity() {
        return $this->stringUnity;
    }

    public function stringBasicSimpleLength() {
        return $this->floatSimpleLength.$this->stringUnity;
    }
}
