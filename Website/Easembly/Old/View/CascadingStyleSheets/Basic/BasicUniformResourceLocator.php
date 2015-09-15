<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicUniformResourceLocator
 *
 * @author Judah
 */
class BasicUniformResourceLocator {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicUniformResourceLocatorWithStringValue($stringValue) {
        $instance = new self("url(".$stringValue.")"); //arrumar
        return $instance;
    }

    public function stringBasicUniformResourceLocator() {
        return $this->stringValue;
    }
}
