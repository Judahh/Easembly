<?php
//namespace View\Languages;

class MultilingualText {
    private static $instance;

    protected function __construct() {
    }

    //$multilingualText = MultilingualText::MultilingualText();

    public static function MultilingualText() {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
//        $instance = new self();
//        return $instance;
    }

    private function getStringText($stringFilePath){
        $file = fopen($stringFilePath, "r") or die("Unable to open file!");
        $string=fread($file,filesize($stringFilePath));
        fclose($file);
        return $string;
    }

    private function getStringVariableText($fileText, $stringVariable){
        $findStart   = '=\\0"';
        $findEnd   = '"\\0;';
        for($index=0;$index<strlen($fileText);$index++) {
            $pos1 = strpos($fileText, $findStart);
            if(trim(substr($fileText, 0, $pos1)," \n")==$stringVariable){
                $fileText=substr($fileText, $pos1+4);
                $pos2 = strpos($fileText, $findEnd);
                return substr($fileText, 0, $pos2);
            }
            $pos2 = strpos($fileText, $findEnd);
            $fileText=substr($fileText, $pos2+4);
        }
        return "";
    }

    public function getMultilingualFile($file, $stringVariable){
        return $this->getStringVariableText($this->getStringText($file), $stringVariable);
    }

    public function getMultilingualText($stringLanguage, $stringPageType, $stringPageSubType, $stringPage, $stringVariable){
        return $this->getStringVariableText($this->getStringText("../../../../../../Languages/".$stringPageType."/".$stringPageSubType."/".$stringPage."/".$stringLanguage.".lang"), $stringVariable);
    }

    public function getMultilingualTextFromWindow($stringLanguage, $stringPageSubType, $stringPage, $stringVariable){
        return $this->getMultilingualText($stringLanguage, "Window", $stringPageSubType, $stringPage, $stringVariable);
    }

    public function getMultilingualTextFromWindowFromCommon($stringLanguage, $stringPage, $stringVariable){
        return $this->getMultilingualTextFromWindow($stringLanguage, "Common", $stringPage, $stringVariable);
    }

    public function getMultilingualTextFromWindowFromPopUp($stringLanguage, $stringPage, $stringVariable){
        return $this->getMultilingualTextFromWindow($stringLanguage, "PopUp", $stringPage, $stringVariable);
    }

    public function languageToNative($language){
        switch ($language){
            case "Portuguese-Brazil":
                return "Português/Brasil";
            default:
                return "English/USA";
        }
    }

    public function languageToEnglish($language){
        switch ($language){
            case "Português/Brasil":
                return "Portuguese-Brazil";
            default:
                return "English-USA";
        }
    }
} 