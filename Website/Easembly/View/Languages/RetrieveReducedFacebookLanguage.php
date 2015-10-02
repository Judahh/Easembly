<?php
//    include ('MultilingualText.php');
    include ('CheckLanguage.php');

    $multilingualText = MultilingualText::MultilingualText();

//    echo 'reducedFacebookLanguage=\\0"'."MEUOVO".'"\\0;';
//    echo 'reducedFacebookLanguage=\\0"'.$language.'"\\0;';
//    echo "PORRA\n";
//    echo getcwd() . "\n";
    $directoryFacebookReduced="../Languages/Window/PopUp/Language/FacebookReduced.lang";
    echo 'reducedFacebookLanguage=\\0"'.$multilingualText->getMultilingualFile($directoryFacebookReduced, $language).'"\\0;';
?>