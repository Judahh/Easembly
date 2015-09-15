<?php

/**
 * BasicRotateLongitudinal [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class BasicRotateLongitudinal extends BasicRotate{
    public static function BasicRotateLongitudinalWithbasicAngleLongitudinal($basicAngleLongitudinal) {
        $instance = new parent("Z", $basicAngleLongitudinal->stringBasicAngle());
        return $instance;
    }
}

?>