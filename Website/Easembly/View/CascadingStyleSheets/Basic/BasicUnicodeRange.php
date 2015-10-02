<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicUnicodeRange
 *
 * @author Judah
 */
class BasicUnicodeRange {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicUnicodeRangeWithBasicHexdecimalRange($basicHexdecimalRange) {
        $instance = new self("U+".$basicHexdecimalRange->stringBasicHexdecimalRange()); //arrumar
        return $instance;
    }

    public function stringBasicUnicodeRange() {
        return $this->stringValue;
    }
}
