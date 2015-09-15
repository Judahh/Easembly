<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BrowserDiffer
 *
 * @author Judah
 */
class BrowserDiffer {

    private $arrayStringBrowserPrefix;
    private static $browserDifferInstance = null;

    private function __construct() {
        array_push($this->arrayStringBrowserPrefix, "");
        array_push($this->arrayStringBrowserPrefix, "-o-");
        array_push($this->arrayStringBrowserPrefix, "-ms-");
        array_push($this->arrayStringBrowserPrefix, "-moz-");
        array_push($this->arrayStringBrowserPrefix, "-webkit-");
    }

    public static function getInstance() {
        if (self::$browserDifferInstance == null) {
            self::$browserDifferInstance = new self;
        }

        return self::$browserDifferInstance;
    }

    public function getArrayStringBrowserPrefix() {
        return $this->arrayStringBrowserPrefix;
    }
}
