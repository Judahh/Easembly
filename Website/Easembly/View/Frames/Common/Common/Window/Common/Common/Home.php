<?php
//    include ('../../../../../../Languages/MultilingualText.php');
    include ('../../../../../../Languages/CheckLanguage.php');
?>

<div id="DivIdCode">
    <div id="DivIdHome">
        <div id="DivIdProjectTitle">
            <div id="DivIdTextBasic">
                <div id="DivIdTitleTextSize">
                    <div id="DivIdTextFuturistic" style="color:#555555">
                        EASEMBLY
                    </div>
                </div>
                <div id="DivIdTitleTextSize">
                    <div id="DivIdTextName" itemprp="" style="color:#555555">
                        <?php
                            $multilingualText = MultilingualText::MultilingualText();
                            echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "Home", "slogan");
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="DivIdTableCodeWrap">
            <div id="DivFullBlock">

            </div>
        </div>

    </div>
</div>