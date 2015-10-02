<?php

/**
 * Description of SelectorColor
 *
 * @author Judah
 */

class SelectorKeyframesSubSelectorPercent extends Selector {
//Constructor
//   instantiation: 
//      $declaration = SelectorKeyframesSubSelectorPercent::SelectorKeyframesSubSelectorPercentWithStringValue($stringValue);
        public static function SelectorKeyframesSubSelectorPercentWithIntPercent($intPercent) {
            $instance = new parent($intPercent."%", "", "");
            return $instance;
        }
    }

?>