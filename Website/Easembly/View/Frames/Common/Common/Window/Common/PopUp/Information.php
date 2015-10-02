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
                                                echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Information", "information");
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
                    <div id="DivFullBlock" style="overflow: hidden;">
                        <div id="DivTextHome2">
                            <div id="DivIdTextBasic">
                                <div id="DivIdProjectTitleText2">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextName" itemprp="">
                                            <div id="DivIdOrderNow">
                                                <?php
                                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "about");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "aboutText");
                                ?>
                                <div id="DivIdProjectTitleText2">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextName" itemprp="">
                                            <div id="DivIdOrderNow">
                                                <?php
                                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "howItWorks");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "howItWorksText");
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "howItWorksText2");
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "howItWorksText3");
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "howItWorksText4");
                                ?>
                                <div id="DivIdProjectTitleText2">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextName" itemprp="">
                                            <div id="DivIdOrderNow">
                                                <?php
                                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "questions");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "questionsText");
                                ?>
                                <div id="DivIdProjectTitleText2">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextName" itemprp="">
                                            <div id="DivIdOrderNow">
                                                <?php
                                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "location");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "locationText");
                                ?>
                                <div id="DivIdProjectTitleText2">
                                    <div id="DivIdTitleTextSize">
                                        <div id="DivIdTextName" itemprp="">
                                            <div id="DivIdOrderNow">
                                                <?php
                                                echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language , "Information", "followUs");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="DivFloatLeft">
                                    <div id="DivIdNeon">
                                        <a id="DivIdIconSocialMedia" href="https://www.facebook.com/HutchDelivery" target="_blank">
                                            f
                                        </a>
                                    </div>
                                </div>
                                <div id="DivFloatLeft">
                                    <div id="DivIdNeon">
                                        <a id="DivIdIconSocialMedia" href="http://twitter.com/HutchDelivery" target="_blank">
                                            l
                                        </a>
                                    </div>
                                </div>
                                <div id="DivFloatLeft">
                                    <div
                                        class="fb-like"
                                        data-share="true"
                                        data-width="450"
                                        data-show-faces="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="DivIdPopUpFooter">
            <div id="DivIdHalf">
                <div id="DivIdPopUpCancel">
                    <button id="ButtonIdSimple" onclick="popUpClose('DivIdPopUpBox')">
                        <div id="DivIdNeon">
                            <div id="DivIdText">
                                <?php
                                    $multilingualText = MultilingualText::MultilingualText();
                                    echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "Information", "close");
                                ?>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="DivIdInformation"></div>