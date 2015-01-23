<div id="DivIdCode">
    <div id="DivIdCodeTitle">
        <div id="DivIdText">
            <div id="DivIdCodeTitleText" contenteditable="true">
                Code Title
            </div>
        </div>
    </div>
    <div id="DivIdTableCodeWrap">
        <table id="TableIdCode" border="0" cellpadding="0" cellspacing="0" contenteditable="true">
            <?php
                for($index=1;$index<51;$index++) {
            ?>
                    <tr id="TrIdCode">
                        <td id="TdIdColumnLine" contenteditable="false">
                            <div id="DivIdText" contenteditable="false">
                                <div id="DivIdColumnText" contenteditable="false">
                                    <?php
                                        echo $index."<br>";
                                    ?>
                                </div>
                            </div>
                        </td>
                        <td id="TdIdColumnCode">
                            <div id="DivTextAreaIdColumnCode">
                                <?php
                                    echo "Code Example " . $index;
                                ?>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>
