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
                                                echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "EditorSettings", "editorSettings");
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
                    <table id="controls">
                        <tr>
                            <td>
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Document
                                </div>
                            </td>
                            <td>
                                <label>
                                    <select id="doc" size="1">
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Mode
                                </div>
                            </td><td>
                                <label><select id="mode" size="1">
                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Split
                                </div>
                            </td><td>
                                <label><select id="split" size="1">
                                    <option value="none">None</option>
                                    <option value="below">Below</option>
                                    <option value="beside">Beside</option>
                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Theme
                                </div>
                            </td><td>
                                <label><select id="theme" size="1">

                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Font Size
                                </div>
                            </td><td>
                                <label><select id="fontsize" size="1">
                                    <option value="10px">10px</option>
                                    <option value="11px">11px</option>
                                    <option value="12px" selected="selected">12px</option>
                                    <option value="13px">13px</option>
                                    <option value="14px">14px</option>
                                    <option value="16px">16px</option>
                                    <option value="18px">18px</option>
                                    <option value="20px">20px</option>
                                    <option value="24px">24px</option>
                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Code Folding
                                </div>
                            </td><td>
                                <label><select id="folding" size="1">
                                    <option value="manual">manual</option>
                                    <option value="markbegin" selected="selected">mark begin</option>
                                    <option value="markbeginend">mark begin and end</option>
                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Key Binding
                                </div>
                            </td><td>
                                <label><select id="keybinding" size="1">
                                    <option value="ace">Ace</option>
                                    <option value="vim">Vim</option>
                                    <option value="emacs">Emacs</option>
                                    <option value="custom">Custom</option>
                                </select></label>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <div id="DivIdTextBasic" style="color:#555555">
                                    Soft Wrap
                                </div>
                            </td><td>
                                <label><select id="soft_wrap" size="1">
                                    <option value="off">Off</option>
                                    <option value="40">40 Chars</option>
                                    <option value="80">80 Chars</option>
                                    <option value="free">Free</option>
                                </select></label>
                            </td>
                        </tr>

                        <tr><td colspan="2">
                                <table id="more-controls">
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Full Line Selection</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="select_style" id="select_style" checked>
                                                <label for="select_style"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Highlight Active Line</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="highlight_active" id="highlight_active" checked>
                                                <label for="highlight_active"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Show Invisibles</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="show_hidden" id="show_hidden">
                                                <label for="show_hidden"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Show Indent Guides</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="display_indent_guides" id="display_indent_guides" checked>
                                                <label for="display_indent_guides"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Persistent HScroll</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="show_hscroll" id="show_hscroll">
                                                <label for="show_hscroll"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Persistent VScroll</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="show_vscroll" id="show_vscroll">
                                                <label for="show_vscroll"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Animate scrolling</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="animate_scroll" id="animate_scroll" checked>
                                                <label for="animate_scroll"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Show Gutter</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="show_gutter" id="show_gutter" checked>
                                                <label for="show_gutter"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Show Print Margin</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="show_print_margin" id="show_print_margin" checked>
                                                <label for="show_print_margin"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Use Soft Tab</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="soft_tab" id="soft_tab" checked>
                                                <label for="soft_tab"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Highlight selected word</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="highlight_selected_word" id="highlight_selected_word" checked>
                                                <label for="highlight_selected_word"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Enable Behaviours</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="enable_behaviours" id="enable_behaviours" checked>
                                                <label for="enable_behaviours"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Fade Fold Widgets</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="fade_fold_widgets" id="fade_fold_widgets" checked>
                                                <label for="fade_fold_widgets"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Enable Elastic Tabstops</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="elastic_tabstops" id="elastic_tabstops" checked>
                                                <label for="elastic_tabstops"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Incremental Search</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="isearch" id="isearch" checked>
                                                <label for="isearch"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Show token info</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="highlight_token" id="highlight_token" checked>
                                                <label for="highlight_token"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Read-only</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="read_only" id="read_only">
                                                <label for="read_only"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div id="DivIdTextBasic" style="color:#555555">Scroll Past End</div>
                                        </td>
                                        <td>
                                            <div class="squaredOne">
                                                <input type="checkbox" name="scrollPastEnd" id="scrollPastEnd" checked>
                                                <label for="scrollPastEnd"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div id="DivIdButtonSendHolder">
                                                <button id="ButtonIdSend" onclick="env.editSnippets()">
                                                    <div id="DivIdText" style="color: #ffffff">
                                                        <?php
                                                        $multilingualText = MultilingualText::MultilingualText();
                                                        echo $multilingualText->getMultilingualTextFromWindowFromPopUp($language, "EditorSettings", "editSnippets");
                                                        ?>
                                                    </div>
                                                </button>
                                            </div>
<!--                                            <input type="button" value="Edit Snippets" onclick="env.editSnippets()">-->
                                        </td>
                                    </tr>
                                </table>
                            </td></tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="DivIdPopUpFooter">
            <div id="DivIdHalf">
                <div id="DivIdPopUpOK">
                    <button id="ButtonIdSimple" onclick="popUpClose('DivIdPopUpBox')">
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
            </div>
        </div>
    </div>
</div>
<div id="DivIdLanguage"></div>