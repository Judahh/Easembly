<?php

/**
 * BasicScaleHorizontal [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicScaleHorizontal extends BasicScale{
    public static function BasicScaleHorizontalWithFloatHorizontal($floatScaleHorizontal) {
        $instance = new parent("X", $floatScaleHorizontal);
        return $instance;
    }
}

?>