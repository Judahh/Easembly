<?php

/**
 * BasicScaleLongitudinal [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicScaleLongitudinal extends BasicScale{
    public static function LongitudinalWithFloatHorizontal($floatScaleLongitudinal) {
        $instance = new parent("Z", $floatScaleVertical);
        return $instance;
    }
}

?>