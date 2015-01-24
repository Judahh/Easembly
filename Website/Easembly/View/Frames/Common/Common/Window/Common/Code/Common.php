<div id="DivIdCode">
    <div id="DivIdProjectTitle">
        <div id="DivIdText">
            <div id="DivIdProjectTitleText" contenteditable="true">
                Project Title
            </div>
        </div>
    </div>

    <div id="DivIdCodeTitle">
        <div id="DivIdText">
            <div id="DivIdCodeTitleText" contenteditable="true">
                Code Title
            </div>
        </div>
    </div>

    <div id="DivIdTableCodeWrap">
        <table id="TableIdCode" border="0" cellpadding="0" cellspacing="0" contenteditable="true">
            <tbody>
                <?php
                    for($index=1;$index<51;$index++) {
                ?>
                        <tr id="TrIdCode">
                            <td id="TdIdColumnLine" contenteditable="false">
                                <div id="DivIdText" contenteditable="false">
                                    <div id="DivIdColumnLineText" contenteditable="false"></div>
                                </div>
                            </td>
                            <td id="TdIdColumnCode">
                                <div id="DivIdColumnCodeText">
                                    <?php
                                        echo "Code Example " . $index;
                                    ?>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
