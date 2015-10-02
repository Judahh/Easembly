<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SelectorColor
 *
 * @author Judah
 */
class SelectorAtKeyframes extends Selector {

    private $arraySelectorKeyframesSubSelector;

//Constructor
//   instantiation: 
//      $declaration = SelectorAtKeyframes::SelectorAtKeyframesWithStringValue($stringValue);
    public static function SelectorAtKeyframesWithStringKeyframes($stringKeyframes) {
        $instance = new parent("keyframes" . " " . $stringKeyframes, "@", "");
        return $instance;
    }

    public static function SelectorAtKeyframesWithStringKeyframesWithArraySelectorKeyframesSubSelector($stringKeyframes, $arraySelectorKeyframesSubSelector) {
        $instance = new parent("keyframes" . " " . $stringKeyframes, "@", "");
        $this->arraySelectorKeyframesSubSelector = $arraySelectorKeyframesSubSelector;
        return $instance;
    }

    public function addSelectorWithArraySelectorKeyframesSubSelector($arraySelectorKeyframesSubSelector) {
        array_push($this->arraySelectorKeyframesSubSelector, $arraySelectorKeyframesSubSelector);
    }

    public function stringSelector() {
        $stringSelector = $this->stringBasicSelector() . "{";
        foreach ($this->arraySelectorKeyframesSubSelector as &$selector) {
            $stringSelector = $stringSelector . $selector->stringSelector();
        }
        $stringSelector = $stringSelector . "}";
        unset($selector);
        return $stringSelector;
    }

}
?>