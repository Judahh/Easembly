<div id="DivIdCode">
    <div id="DivIdCodeTitle">
        <div id="DivIdText">
            <div id="DivIdCodeTitleText" contenteditable="true">
                Code Title
            </div>
        </div>
    </div>
    <div id="DivIdTableCodeWrap">
        <table id="TableIdCode" border="0" cellpadding="0" cellspacing="0">
            <?php
                for($index=1;$index<51;$index++) {
            ?>
                    <tr id="TrIdCode">
                        <td id="TdIdColumnLine">
                            <div id="DivIdText">
                                <?php
                                    echo $index."<br>";
                                ?>
                            </div>
                        </td>
                        <td id="TdIdColumnCode">
                            <div id="DivTextAreaIdColumnCode" contenteditable="true">
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
