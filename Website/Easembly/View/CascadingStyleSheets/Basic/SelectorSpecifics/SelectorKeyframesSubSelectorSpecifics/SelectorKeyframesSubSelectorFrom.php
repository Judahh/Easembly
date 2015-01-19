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

class SelectorKeyframesSubSelectorFrom extends Selector {
//Constructor
//   instantiation: 
//      $declaration = SelectorKeyframesSubSelectorFrom::SelectorKeyframesSubSelectorFromWithStringValue($stringValue);
        public static function SelectorKeyframesSubSelectorFrom() {
            $instance = new parent("from", "", "");
            return $instance;
        }
    }

?>