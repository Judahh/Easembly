<?php

/**
 * BasicTranslateVertical [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslateVertical extends BasicTranslate{
    public static function BasicTranslateVerticalWithBasicLengthVertical($basicLengthVertical) {
        $instance = new parent("Y", $basicLengthVertical->stringBasicLength());
        return $instance;
    }
}

?>