<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
class DeclarationAnimationPlayState extends DeclarationAnimation {
    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationPlayStateWithStringValue($stringValue) {
        $instance = new parent("animation-play-state", $stringValue); //arrumar
        return $instance;
    }
    
    public static function stringValuePaused() {
        return "paused";
    }

    public static function stringValueRunning() {
        return "running";
    }
}

?>