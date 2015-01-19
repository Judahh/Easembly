<?php

/**
 * AuxiliaryScale [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class AuxiliaryScale {
    private $stringAuxiliaryScale;

    private function __construct($stringAuxiliaryScale) {
        $this->stringAuxiliaryScale = $stringAuxiliaryScale;
    }

    public static function AuxiliaryScaleWithBasicScale($basicScale) {
        $instance = new self($basicScale);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleThreeDimensional($basicScaleThreeDimensional) {
        $instance = new self($basicScaleThreeDimensional);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleHorizontal($basicScaleHorizontal) {
        $instance = new self($basicScaleHorizontal);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleVertical($basicScaleVertical) {
        $instance = new self($basicScaleVertical);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleLongitudinal($basicScaleLongitudinal) {
        $instance = new self($basicScaleLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleHorizontalWithBasicScaleVerticalWithBasicScaleLongitudinal($basicScaleHorizontal, $basicScaleVertical, $basicScaleLongitudinal) {
        $instance = new self($basicScaleHorizontal . " " . $basicScaleVertical . " " . $basicScaleLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleHorizontalWithBasicScaleLongitudinal($basicScaleHorizontal, $basicScaleLongitudinal) {
        $instance = new self($basicScaleHorizontal . " " . $basicScaleLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleVerticalWithBasicScaleLongitudinal($basicScaleVertical, $basicScaleLongitudinal) {
        $instance = new self($basicScaleVertical . " " . $basicScaleLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleHorizontalWithBasicScaleVertical($basicScaleHorizontal, $basicScaleVertical) {
        $instance = new self($basicScaleHorizontal . " " . $basicScaleVertical);
        return $instance;
    }
    
    public static function AuxiliaryScaleWithBasicScaleWithBasicScaleLongitudinal($basicScale, $basicScaleLongitudinal) {
        $instance = new self($basicScale . " " . $basicScaleLongitudinal);
        return $instance;
    }

    public function stringAuxiliaryScale() {
        return $this->stringAuxiliaryScale;
    }
}

?>