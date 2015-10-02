<?php

/**
 * DeclarationTransformTranslate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class AuxiliaryTranslate {

    private $stringAuxiliaryTranslate;

    private function __construct($stringAuxiliaryTranslate) {
        $this->stringAuxiliaryTranslate = $stringAuxiliaryTranslate;
    }

    public static function AuxiliaryTranslateWithBasicTranslate($basicTranslate) {
        $instance = new self($basicTranslate);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateThreeDimensional($basicTranslateThreeDimensional) {
        $instance = new self($basicTranslateThreeDimensional);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateHorizontal($basicTranslateHorizontal) {
        $instance = new self($basicTranslateHorizontal);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateVertical($basicTranslateVertical) {
        $instance = new self($basicTranslateVertical);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateLongitudinal($basicTranslateLongitudinal) {
        $instance = new self($basicTranslateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateHorizontalWithBasicTranslateVerticalWithBasicTranslateLongitudinal($basicTranslateHorizontal, $basicTranslateVertical, $basicTranslateLongitudinal) {
        $instance = new self($basicTranslateHorizontal . " " . $basicTranslateVertical . " " . $basicTranslateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateHorizontalWithBasicTranslateLongitudinal($basicTranslateHorizontal, $basicTranslateLongitudinal) {
        $instance = new self($basicTranslateHorizontal . " " . $basicTranslateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateVerticalWithBasicTranslateLongitudinal($basicTranslateVertical, $basicTranslateLongitudinal) {
        $instance = new self($basicTranslateVertical . " " . $basicTranslateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateHorizontalWithBasicTranslateVertical($basicTranslateHorizontal, $basicTranslateVertical) {
        $instance = new self($basicTranslateHorizontal . " " . $basicTranslateVertical);
        return $instance;
    }
    
    public static function AuxiliaryTranslateWithBasicTranslateWithBasicTranslateLongitudinal($basicTranslate, $basicTranslateLongitudinal) {
        $instance = new self($basicTranslate . " " . $basicTranslateLongitudinal);
        return $instance;
    }

    public function stringAuxiliaryTranslate() {
        return $this->stringAuxiliaryTranslate;
    }

}

?>