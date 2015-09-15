<?php

/**
 * DeclarationQuotes [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationQuotes extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationQuotes::DeclarationQuotesWithStringValue($stringValue);
    public static function DeclarationQuotesWithstringQuotationMarkFirstLevelStartWithStringQuotationMarkFirstLevelEnd($stringQuotationMarkFirstLevelStart, $stringQuotationMarkFirstLevelEnd) {
        $instance = new parent("quotes", $stringQuotationMarkFirstLevelStart .",". $stringQuotationMarkFirstLevelEnd);
        return $instance;
    }
    
    public static function DeclarationQuotesWithStringQuotationMarkFirstLevelStartWithStringQuotationMarkFirstLevelEndWithStringQuotationMarkSecondLevelStartWithStringQuotationMarkSecondLevelEnd(
            $stringQuotationMarkFirstLevelStart, $stringQuotationMarkFirstLevelEnd,
            $stringQuotationMarkSecondLevelStart, $stringQuotationMarkSecondLevelEnd) {
        $instance = new parent("quotes", $stringQuotationMarkFirstLevelStart .",". $stringQuotationMarkFirstLevelEnd .",". 
                $stringQuotationMarkSecondLevelStart .",". $stringQuotationMarkSecondLevelEnd);
        return $instance;
    }
     
}

?>