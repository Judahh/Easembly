<?php
//namespace View\Languages;
include ('MultilingualText.php');

$setDomain = "localhost";
$days = 5;


$array = explode('/',getcwd()); $count = count($array);

$currentDirectoryName=$array[$count-1];

$addPath="../../../../../../";

if($currentDirectoryName=="Languages"){
    $addPath="../";
}
//echo getcwd() . "\n";


if (!isset($_COOKIE["language"])) {
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $multilingualText = MultilingualText::MultilingualText();
    $temporaryLanguage = $multilingualText->getMultilingualFile($addPath."Languages/Window/PopUp/Language/BrowserReduced.lang", $language);
    if($temporaryLanguage==""){
        $temporaryLanguage = $multilingualText->getMultilingualFile($addPath."Languages/Window/PopUp/Language/BrowserReduced.lang", 'default');
    }

    $language=$temporaryLanguage;

//    switch ($language){
//        case "pt-br":
//        case "pt":
//            $language = "Portuguese-Brazil";
//            break;
//        default:
//            $language = "English-USA";
//            break;
//    }
    setcookie("language", $language, $days*24*60*60*1000, '/', $setDomain, false, false);
}else{
//    var_dump($_COOKIE["language"]);
    $language = $_COOKIE["language"];
//    $language;
}