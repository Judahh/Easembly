<?php

/**
 * BasicMatrix [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicMatrix {
    private $stringMatrixType;
    private $stringMatrixValue;

    private function __construct($stringMatrixType, $stringMatrixValue) {
        $this->stringMatrixType = $stringMatrixType;
        $this->stringMatrixValue = $stringMatrixValue;
    }

    public static function BasicMatrixWithStringMatrixTypeWithStringMatrixValue($stringMatrixType, $stringMatrixValue) {
        $instance = new self($stringMatrixType, $stringMatrixValue);
        return $instance;
    }

    public function stringBasicMatrix() {
        return "matrix" . $this->stringMatrixType . "(" . $this->stringMatrixValue . ")";
    }
}

?>