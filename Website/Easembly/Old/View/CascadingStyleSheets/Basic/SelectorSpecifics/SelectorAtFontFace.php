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

class SelectorAtFontFace extends Selector {
//Constructor
//   instantiation: 
//      $declaration = SelectorAtFontFace::SelectorAtFontFaceWithStringValue($stringValue);
        public static function SelectorAtFontFace() {
            $instance = new parent("font-face", "@", "");
            return $instance;
        }
    }

?>