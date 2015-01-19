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

class SelectorKeyframesSubSelectorTo extends Selector {
//Constructor
//   instantiation: 
//      $declaration = SelectorKeyframesSubSelectorTo::SelectorKeyframesSubSelectorToWithStringValue($stringValue);
        public static function SelectorKeyframesSubSelectorTo() {
            $instance = new parent("to", "", "");
            return $instance;
        }
    }

?>