<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColumnRuleNameValue
 *
 * @author Silvio
 */
class ColumnRuleNameValue {
    private static $columnRuleNameValueInstance = null;
    private $arrayColumnRuleNameValue;

    private function __construct() {
        array_push($this->arrayColumnRuleNameValue, "columnRuleWidth");
        array_push($this->arrayColumnRuleNameValue, "columnRuleStyle");
        array_push($this->arrayColumnRuleNameValue, "columnRuleColor");
    }

    public static function getInstance() {
        if (self::$columnRuleNameValueInstance == null) {
            self::$columnRuleNameValueInstance = new self;
        }

        return self::$columnRuleNameValueInstance;
    }

    public function getArrayColumnRuleNameValue() {
        return $this->arrayColumnRuleNameValue;
    }

}
