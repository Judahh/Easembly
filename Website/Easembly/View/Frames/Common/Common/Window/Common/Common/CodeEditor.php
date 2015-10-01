<?php
//    include ('../../../../../../Languages/MultilingualText.php');
    include ('../../../../../../Languages/CheckLanguage.php');
?>

<div id="DivIdCode">
    <div id="DivIdCodeEditor">

<!--        <div id="DivIdProjectTitle">-->
<!--            <div id="DivIdText">-->
<!--                <div id="DivIdProjectTitleText" contenteditable="true" style="color:#555555">-->
<!--                    --><?php
//                        $multilingualText = MultilingualText::MultilingualText();
//                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "CodeEditor", "projectTitle");
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

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

        <div id="DivIdHalf">
            <table id="controls">
                <tr>
                    <td>
                        <label>
                            <select id="mode" size="1">
                            </select>
                        </label>
                    </td>
                    <td>
                        <label>
                            <select id="doc" size="1">
                            </select>
                        </label>
                    </td>
                    <td>
                        <div id="DivIdBasicButtonHolder">
                            <button id="ButtonIdBasic"  onclick="openPopUp('FileTree')">
                                <div id="DivIdText" style="color: #ffffff">
                                    <?php
                                        $multilingualText = MultilingualText::MultilingualText();
                                        echo $multilingualText->getMultilingualTextFromWindowFromCommon($language , "CodeEditor", "openFile");
                                    ?>
                                </div>
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
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
    </div>
</div>