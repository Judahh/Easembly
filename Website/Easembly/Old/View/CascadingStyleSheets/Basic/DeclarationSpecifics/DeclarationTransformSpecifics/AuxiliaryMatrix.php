<?php

/**
 * DeclarationTransformMatrix [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class AuxiliaryMatrix {
    private $stringAuxiliaryMatrix;

    private function __construct($stringAuxiliaryMatrix) {
        $this->stringAuxiliaryMatrix = $stringAuxiliaryMatrix;
    }

    public static function AuxiliaryMatrixWithBasicMatrix($basicMatrix) {
        $instance = new self($basicMatrix);
        return $instance;
    }
    
    public static function AuxiliaryMatrixWithBasicMatrixThreeDimensional($basicMatrixThreeDimensional) {
        $instance = new self($basicMatrixThreeDimensional);
        return $instance;
    }

    public function stringAuxiliaryMatrix() {
        return $this->stringAuxiliaryMatrix;
    }
}

?>