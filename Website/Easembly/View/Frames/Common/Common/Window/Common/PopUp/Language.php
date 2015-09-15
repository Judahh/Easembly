<?php
//    include ('../../../../../../Languages/MultilingualText.php');
    include ('../../../../../../Languages/CheckLanguage.php'); 
?>
<div id="DivIdGlass">
    <div id="DivIdPopUp">
        <div id="DivIdPopUpHeader">
            <div id="DivIdHalf">
                <div id="DivIdFullWidthFloat">
                    <div id="DivIdProjectTitle">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                <div id="DivIdProjectTitleText">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextLanguages">
                                            <?php
                                                $multilingualText = MultilingualText::MultilingualText();
                                                echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Language", "languages");
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DivIdPopUpClose">
                <div id="DivIdNeon" onclick="popUpClose('DivIdPopUpBox')">
                    <div id="DivIdRedCircle"></div>
                </div>
            </div>
        </div>

        <div id="DivIdPopUpBody">
            <div id="DivIdPopUpBodyWrap">
                <div id="DivIdHalf">
                    <?php
                        $multilingualText = MultilingualText::MultilingualText();
                        $dir    = '../../../../../../Languages/Window/PopUp/Language';
                        $files = scandir($dir);


                        for($index=0; $index<count($files); $index++){
                            if(strpos($files[$index], '.lang') !== false && !((strpos($files[$index], 'Native') !== false)||(strpos($files[$index], 'FacebookReduced') !== false)||(strpos($files[$index], 'BrowserReduced') !== false))){
                                $newLanguage=explode(".lang",$files[$index])[0];
                                $newLanguageNative=$multilingualText->getMultilingualTextFromWindowFromPopUp("Native", "Language", $newLanguage);
                                ?>
                                    <button id="ButtonIdSimple" onclick="changeLanguageTemporary('<?php echo $newLanguageNative ?>')">
                                        <div id="DivIdNeon">
                                            <div id="DivIdText">
                                                -<?php echo $newLanguageNative ?>
                                            </div>
                                        </div>
                                    </button>
                                <?php
                            }
                        }
                    ?>
                    <!--
                    <button id="ButtonIdSimple" onclick="changeLanguageTemporary('English/USA')">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                -English/USA
                            </div>
                        </div>
                    </button>
                    <button id="ButtonIdSimple" onclick="changeLanguageTemporary('Português/Brasil')">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                -Português/Brasil
                            </div>
                        </div>
                    </button>
                    !-->
                    <div id="DivIdNeon">
                        <div id="DivIdText">
                            <div id="DivIdSelectedLanguage">
                                <div id="DivIdTextSelected">
                                    <?php
                                        $multilingualText = MultilingualText::MultilingualText();
                                        echo "-".$multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Language", "selected").": ".$multilingualText->languageToNative($language);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="DivIdPopUpFooter">
            <div id="DivIdHalf">
                <div id="DivIdPopUpOK">
                    <button id="ButtonIdSimple" onclick="changeLanguageAndPopUpClose('DivIdPopUpBox')">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                <?php
                                    $multilingualText = MultilingualText::MultilingualText();
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Language", "oK");
                                ?>
                            </div>
                        </div>
                    </button>
                </div>
                <div id="DivIdPopUpCancel">
                    <button id="ButtonIdSimple" onclick="popUpClose('DivIdPopUpBox')">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                <?php
                                    $multilingualText = MultilingualText::MultilingualText();
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Language", "cancel");
                                ?>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="DivIdLanguage"></div>