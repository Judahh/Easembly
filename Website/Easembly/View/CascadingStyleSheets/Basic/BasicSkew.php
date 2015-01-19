<?php

/**
 * BasicSkew [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicSkew {
    private $stringSkewType;
    private $stringSkewValue;

    private function __construct($stringSkewType, $stringSkewValue) {
        $this->stringSkewType = $stringSkewType;
        $this->stringSkewValue = $stringSkewValue;
    }

    public static function BasicSkewWithStringSkewTypeWithStringSkewValue($stringSkewType, $stringSkewValue) {
        $instance = new self($stringSkewType, $stringSkewValue);
        return $instance;
    }

    public function stringBasicSkew() {
        return "skew" . $this->stringSkewType . "(" . $this->stringSkewValue . ")";
    }
}

?>