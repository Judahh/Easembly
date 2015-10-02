<?php

/**
 * BasicScaleThreeDimensional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicScaleThreeDimensional {
    public static function BasicScaleThreeDimensionalWithFloatHorizontalWithFloatVerticalWithFloatBottom($floatHorizontal, $floatVertical, $floatLongitudinal) {
        $instance = new parent("3d", $floatHorizontal . "," . $floatVertical . "," . $floatLongitudinal);
        return $instance;
    }
}

?>