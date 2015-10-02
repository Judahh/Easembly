<?php

/**
 * OutlineNameValue [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class OutlineNameValue {
    private static $outlineNameValueInstance = null;
    private $arrayOutlineNameValue;

    private function __construct() {
        array_push($this->arrayOutlineNameValue, "stringOutlineColor");
        array_push($this->arrayOutlineNameValue, "stringOutlineStyle");
        array_push($this->arrayOutlineNameValue, "stringOutlineWidth");
    }

    public static function getInstance() {
        if (self::$outlineNameValueInstance == null) {
            self::$outlineNameValueInstance = new self;
        }

        return self::$outlineNameValueInstance;
    }

    public function getArrayOutlineNameValue() {
        return $this->arrayOutlineNameValue;
    }

}

?>