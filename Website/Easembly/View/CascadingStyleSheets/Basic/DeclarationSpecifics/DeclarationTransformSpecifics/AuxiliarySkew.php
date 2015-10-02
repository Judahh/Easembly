<?php

/**
 * AuxiliarySkew [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class AuxiliarySkew {
    private $stringAuxiliarySkew;

    private function __construct($stringAuxiliarySkew) {
        $this->stringAuxiliarySkew = $stringAuxiliarySkew;
    }

    public static function AuxiliarySkewWithBasicSkew($basicSkew) {
        $instance = new self($basicSkew);
        return $instance;
    }
    
    public static function AuxiliarySkewWithBasicSkewHorizontal($basicSkewHorizontal) {
        $instance = new self($basicSkewHorizontal);
        return $instance;
    }
    
    public static function AuxiliarySkewWithBasicSkewVertical($basicSkewVertical) {
        $instance = new self($basicSkewVertical);
        return $instance;
    }
    
    public static function AuxiliarySkewWithBasicSkewHorizontalWithBasicSkewVertical($basicSkewHorizontal, $basicSkewVertical) {
        $instance = new self($basicSkewHorizontal . " " . $basicSkewVertical);
        return $instance;
    }

    public function stringAuxiliarySkew() {
        return $this->stringAuxiliarySkew;
    }
}

?>