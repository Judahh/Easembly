<?php

/**
 * BasicSkewVertical [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicSkewVertical extends BasicSkew{
    public static function BasicRotateHorizontalWithbasicAngleVertical($basicAngleVertical) {
        $instance = new parent("Y", $basicAngleVertical->stringBasicVertical());
        return $instance;
    }
}

?>