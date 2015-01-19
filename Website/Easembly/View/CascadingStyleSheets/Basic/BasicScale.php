<?php

/**
 * BasicScale [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class BasicScale {
    private $stringScaleType;
    private $stringScaleValue;

    private function __construct($stringScaleType, $stringScaleValue) {
        $this->stringScaleType = $stringScaleType;
        $this->stringScaleValue = $stringScaleValue;
    }

    public static function BasicScaleWithStringScaleTypeWithStringScaleValue($stringScaleType, $stringScaleValue) {
        $instance = new self($stringScaleType, $stringScaleValue);
        return $instance;
    }

    public function stringBasicScale() {
        return "scale" . $this->stringScaleType . "(" . $this->stringScaleValue . ")";
    }
}

?>