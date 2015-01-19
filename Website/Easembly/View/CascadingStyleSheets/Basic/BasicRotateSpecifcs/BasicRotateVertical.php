<?php

/**
 * BasicRotateVertical [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class BasicRotateVertical extends BasicRotate{
    public static function BasicRotateVerticalWithbasicAngleVertical($basicAngleVertical) {
        $instance = new parent("Y", $basicAngleVertical->stringBasicAngle());
        return $instance;
    }
}

?>