<?php

/**
 * BasicRotateThreeDimension [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicRotateThreeDimensional extends BasicRotate{
    public static function BasicRotateThreeDimensionalWithFloatHorizontalWithFloatVerticalWithFloatLongitudinal($floatHorizontal, $floatVertical, $floatLongitudinal, $basicAngle) {
        $instance = new parent("3d", $floatHorizontal . "," . $floatVertical . "," . $floatLongitudinal . "," . $basicAngle->stringBasicAngle());
        return $instance;
    }
}

?>