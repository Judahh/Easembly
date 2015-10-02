<?php

/**
 * BasicScaleVertical [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicScaleVertical extends BasicScale{
    public static function BasicScaleVerticalWithFloatHorizontal($floatScaleVertical) {
        $instance = new parent("Y", $floatScaleVertical);
        return $instance;
    }
}

?>