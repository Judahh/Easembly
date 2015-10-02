<?php

/**
 * AuxiliaryRotate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class AuxiliaryRotate {
    private $stringAuxiliaryRotate;

    private function __construct($stringAuxiliaryRotate) {
        $this->stringAuxiliaryRotate = $stringAuxiliaryRotate;
    }

    public static function AuxiliaryRotateWithBasicRotate($basicRotate) {
        $instance = new self($basicRotate);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateThreeDimensional($basicRotateThreeDimensional) {
        $instance = new self($basicRotateThreeDimensional);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateHorizontal($basicRotateHorizontal) {
        $instance = new self($basicRotateHorizontal);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateVertical($basicRotateVertical) {
        $instance = new self($basicRotateVertical);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateLongitudinal($basicRotateLongitudinal) {
        $instance = new self($basicRotateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateHorizontalWithBasicRotateVerticalWithBasicRotateLongitudinal($basicRotateHorizontal, $basicRotateVertical, $basicRotateLongitudinal) {
        $instance = new self($basicRotateHorizontal . " " . $basicRotateVertical . " " . $basicRotateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateHorizontalWithBasicRotateLongitudinal($basicRotateHorizontal, $basicRotateLongitudinal) {
        $instance = new self($basicRotateHorizontal . " " . $basicRotateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateVerticalWithBasicRotateLongitudinal($basicRotateVertical, $basicRotateLongitudinal) {
        $instance = new self($basicRotateVertical . " " . $basicRotateLongitudinal);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateHorizontalWithBasicRotateVertical($basicRotateHorizontal, $basicRotateVertical) {
        $instance = new self($basicRotateHorizontal . " " . $basicRotateVertical);
        return $instance;
    }
    
    public static function AuxiliaryRotateWithBasicRotateWithBasicRotateLongitudinal($basicRotate, $basicRotateLongitudinal) {
        $instance = new self($basicRotate . " " . $basicRotateLongitudinal);
        return $instance;
    }

    public function stringAuxiliaryRotate() {
        return $this->stringAuxiliaryRotate;
    }
}

?>