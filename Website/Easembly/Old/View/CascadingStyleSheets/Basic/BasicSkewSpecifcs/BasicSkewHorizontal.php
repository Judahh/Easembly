<?php

/**
 * BasicSkewHorizontal [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicSkewHorizontal extends BasicSkew{
    public static function BasicRotateHorizontalWithbasicAngleHorizontal($basicAngleHorizontal) {
        $instance = new parent("X", $basicAngleHorizontal->stringBasicAngle());
        return $instance;
    }
}

?>