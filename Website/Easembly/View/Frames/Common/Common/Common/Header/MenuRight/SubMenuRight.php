<?php
//    include ('../../../../../../Languages/MultilingualText.php');
    include ('../../../../../../Languages/CheckLanguage.php');
?>
<ul>
<!--    <li>-->
<!--        <div id="DivIdNeon">-->
<!--            <div id="DivIdMenuItem">-->
<!--                <div id="DivIdIcon" style="color: #ffffff">-->
<!--                    <div id="DivIdShake">T</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div id="DivIdSubMenuNotifications">-->
<!--            <ul>-->
<!--                <div id="DivIdSubMenuNotificationsHolder">-->
<!--                    <div id="DivIdGlass"></div>-->
<!--                </div>-->
<!--                <div id="DivIdSubMenuNotificationsHolder2">-->
<!--                    <li>-->
<!--                        <div id="DivIdDefaultCursor">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic">-->
<!--                                    --><?php
//                                        $multilingualText = MultilingualText::MultilingualText();
//                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "nothing");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->

<!--    <li>-->
<!--        <div id="DivIdNeon">-->
<!--            <div id="DivIdMenuItem">-->
<!--                <div id="DivIdIcon" style="color: #000000">-->
<!--                    <div id="DivIdSpin">X</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div id="DivIdSubMenuSettings">-->
<!--            <ul>-->
<!--                <div id="DivIdSubMenuSettingsHolder" style="display: none">-->
<!--                    <div id="DivIdGlass"></div>-->
<!--                </div>-->
<!--                <div id="DivIdSubMenuSettingsHolder2" style="display: none">-->
<!--                    <li>-->
<!--                        <div id="DivIdPointerCursor" onclick="openPopUp('EditorSettings')">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic">-->
<!--                                    --><?php
//                                    $multilingualText = MultilingualText::MultilingualText();
//                                    echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "editor");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->

    <li>
        <div id="DivIdNeon">
            <div id="DivIdMenuItem">
                <div id="DivIdIcon" style="color: #000000">
                    <div id="DivIdPulse">Y</div>
                </div>
            </div>
        </div>
        <div id="DivIdSubMenuApplications">
            <ul>
                <div id="DivIdSubMenuApplicationsHolder">
                    <div id="DivIdGlass"></div>
                </div>
                <div id="DivIdSubMenuApplicationsHolder2">
                    <li>
                        <div id="DivIdPointerCursor" onclick="goToPage('Home')">
                            <div id="DivIdNeon">
                                <div id="DivIdTextBasic">
                                    <?php
                                        $multilingualText = MultilingualText::MultilingualText();
                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "home");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </li>
<!--                    <li>-->
<!--                        <div id="DivIdPointerCursor" onclick="goToPage('Goods')">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic">-->
<!--                                    --><?php
//                                        $multilingualText = MultilingualText::MultilingualText();
//                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "goods");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div id="DivIdPointerCursor" onclick="goToPage('OtherStuff')">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic">-->
<!--                                    --><?php
//                                        $multilingualText = MultilingualText::MultilingualText();
//                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "other");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div id="DivIdPointerCursor">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic" onclick="goToPage('Work')">-->
<!--                                    --><?php
//                                        $multilingualText = MultilingualText::MultilingualText();
//                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "work");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
                </div>
            </ul>
        </div>
    </li>

    <li>
        <div id="DivIdNeon" onclick="facebookLogInOut()">
            <div id="DivIdMenuItem">
                <div id="DivIdIcon" style="color: #000000"><div id="DivIdPulse"><div id="DivIdProfilePicture">0</div></div></div>
            </div>
        </div>
        <div id="DivIdSubMenuUser">
            <ul>
                <div id="DivIdSubMenuUserHolder">
                    <div id="DivIdGlass"></div>
                </div>
                <div id="DivIdSubMenuUserHolder2">
<!--                    <li>-->
<!--                        <div id="DivIdPointerCursor" onclick="homeSmoothScroll('DivIdMyOrders')">-->
<!--                            <div id="DivIdNeon">-->
<!--                                <div id="DivIdTextBasic">-->
<!--                                    --><?php
//                                        $multilingualText = MultilingualText::MultilingualText();
//                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "projects");
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
                    <li>
                        <div id="DivIdPointerCursor" onclick="goToPage('CodeEditor')">
                            <div id="DivIdNeon">
                                <div id="DivIdTextBasic">
                                    <?php
                                        $multilingualText = MultilingualText::MultilingualText();
                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "codeNow");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!--<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div>!-->
                        <div id="DivIdPointerCursor" onclick="facebookLogInOut()">
                            <div id="DivIdNeon">
                                <div id="DivIdTextBasic">
                                    <div id="DivLoginText">
                                        <?php
                                            $multilingualText = MultilingualText::MultilingualText();
                                            echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "login");
                                        ?>
                                    </div>
                                    <div id="DivLogoutText" style="display:none;">
                                        <?php
                                            $multilingualText = MultilingualText::MultilingualText();
                                            echo $multilingualText->getMultilingualTextFromWindowFromCommon($language, "MenuRight", "logout");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </li>
</ul>