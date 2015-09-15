<?php
//    include ('../../../../../../Languages/MultilingualText.php');
    include ('../../../../../../Languages/CheckLanguage.php');
?>

<div id="DivIdCode">
    <div id="DivIdCodeEditor">

        <div id="DivIdProjectTitle">
            <div id="DivIdText">
                <div id="DivIdProjectTitleText" contenteditable="true" style="color:#555555">
                    <?php
                        $multilingualText = MultilingualText::MultilingualText();
                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "CodeEditor", "projectTitle");
                    ?>
                </div>
            </div>
        </div>

        <div id="DivIdCodeTitle">
            <div id="DivIdText">
                <div id="DivIdCodeTitleText" contenteditable="true" style="color:#555555">
                    <?php
                        $multilingualText = MultilingualText::MultilingualText();
                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "CodeEditor", "codeTitle");
                    ?>
                </div>
            </div>
        </div>

        <div id="DivIdEditorHolder"><div id="editor-container"></div></div>

        <div id="DivIdButtonSendHolder">
            <button id="ButtonIdSend">
                <div id="DivIdText" style="color: #ffffff">
                    <?php
                        $multilingualText = MultilingualText::MultilingualText();
                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "CodeEditor", "run");
                    ?>
                </div>
            </button>
        </div>

<!--        <div id="DivIdTableCodeWrap">-->
<!--            <textarea class="TextAreaClassLined">-->
<!--                JavaScript was originally developed by Brendan-->
<!--                Eich of Netscape under the name Mocha,-->
<!--                which was later renamed to LiveScript,-->
<!--                and finally to JavaScript.-->
<!---->
<!--                The change of name from LiveScript to JavaScript roughly-->
<!--                coincided with Netscape adding support for-->
<!--                Java technology in its Netscape Navigator-->
<!--                web browser.-->
<!---->
<!--                JavaScript was first introduced-->
<!--                and deployed in the Netscape browser version-->
<!--                2.0B3 in December 1995.-->
<!---->
<!--                The naming has caused confusion, giving the-->
<!--                impression that the language is a spin-off of Java,-->
<!--                and it has been characterized by many as a-->
<!--                marketing ploy by Netscape to give JavaScript the-->
<!--                cachet of what was then the hot new web-programming language.-->
<!--            </textarea>-->
<!--        </div>-->

    </div>
</div>