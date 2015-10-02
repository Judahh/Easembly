<?php

/**
 * BasicRotate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicRotate {
    private $stringRotateType;
    private $stringRotateValue;

    private function __construct($stringRotateType, $stringRotateValue) {
        $this->stringRotateType = $stringRotateType;
        $this->stringRotateValue = $stringRotateValue;
    }

    public static function BasicTranslateWithStringRotateTypeWithStringRotateValue($stringRotateType, $stringRotateValue) {
        $instance = new self($stringRotateType, $stringRotateValue);
        return $instance;
    }

    public function stringBasicRotate() {
        return "rotate" . $this->stringRotateType . "(" . $this->stringRotateValue . ")";
    }
}

?>