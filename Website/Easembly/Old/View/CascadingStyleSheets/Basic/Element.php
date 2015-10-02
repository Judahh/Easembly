<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Element
 *
 * @author Judah
 */
class Element {
    private $arrayMultipleSelector;
    
    private function _construct($arrayMultipleSelector) {
        $this->arrayMultipleSelector = $arrayMultipleSelector;
    }
    
    public static function ElementWithArrayMultipleSelector($arrayMultipleSelector) {
        $instance = new self($arrayMultipleSelector);
        return $instance;
    }
    
    public function addMultipleSelectorWithMultipleSelector($multipleSelector) {
          array_push($this->arrayMultipleSelector, $multipleSelector);
    }
    
    public static function Element() {
        $instance = new self(array());
        return $instance;
    }
}
