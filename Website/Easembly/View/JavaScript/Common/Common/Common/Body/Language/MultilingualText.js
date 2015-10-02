function requestVariable(file, format, stringVariable, index, subIndex) {
    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    var cached=domStorage[file];
    var cached2=sessionStorage.getItem(file);

    if (cached==null||cached==''||cached==undefined) {
        cached=cached2;
    }

    //alert("Cached of "+file+"=("+cached+")");

    if (cached==null||cached==''||cached==undefined) {
        var ajaxRequest;

        try {
            // Opera 8.0+, Firefox, Safari
            ajaxRequest = new XMLHttpRequest();
        } catch (e) {
            // Internet Explorer Browsers
            try {
                ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    // Something went wrong
                    transferFailed(null);
                    return false;
                }
            }
        }

        ajaxRequest.addEventListener("progress", updateProgress, false);
        ajaxRequest.addEventListener("load", transferComplete, false);
        ajaxRequest.addEventListener("error", transferFailed, false);
        ajaxRequest.addEventListener("abort", transferCanceled, false);
        var progressBarHolder = document.getElementById("DivIdProgressBarHolder");
        progressBarHolder.style.height = "10px";

        ajaxRequest.onreadystatechange = function () {
            if (ajaxRequest.readyState == 4) {

                var text=getStringVariableText(ajaxRequest.responseText,stringVariable);
                //alert("Var="+text);

                sessionStorage.setItem(file, ajaxRequest.responseText);
                domStorage[file]=ajaxRequest.responseText;

                callFunction(index, subIndex, text);

            }
        }

        ajaxRequest.open(format, file, true);
        ajaxRequest.send();

    }else{
        callFunction(index, subIndex, getStringVariableText(cached,stringVariable));
    }
}

function callFunction(index, subIndex, text){
    switch (index){
        case 0:
            getCurriculumVitae(subIndex);
            break;

        case 1:
            setCurriculumVitae(subIndex, text);
            break;

        case 2:
            getLanguage();
            break;

        case 3:
            setLanguage(text);
            break;

        case 4:
            getLanguageToMakeCurriculumVitae();
            break;

        case 5:
            setLanguageToMakeCurriculumVitae(text);
            break;

        case 6:
            getLanguageToFacebook();
            break;

        case 7:
            setLanguageToFacebook(text);
            break;

        default:
            break;
    }
}

function customTrim(x) {
    return x.replace(/\s|\n/gi,'');
}

function getStringVariableText(fileText, stringVariable){
    var findStart   = '=\\0"';
    var findEnd   = '"\\0;';
    for(var index=0;index<fileText.length;index++) {
        var pos1 = fileText.indexOf(findStart);
        var pos2;
        if(customTrim(fileText.substring(0, pos1))==stringVariable){
            fileText=fileText.substring(pos1+4);
            pos2 = fileText.indexOf(findEnd);
            return fileText.substring(0, pos2);
        }
        pos2 = fileText.indexOf(findEnd);
        fileText=fileText.substring(pos2+4);
    }
    return "";
}

function getMultilingualText(format, stringLanguage, stringPageType, stringPageSubType, stringPage, stringVariable, index, subIndex){
    return requestVariable("View/Languages/"+stringPageType+"/"+stringPageSubType+"/"+stringPage+"/"+stringLanguage+".lang", format, stringVariable, index, subIndex);
}

function getMultilingualGETText(stringLanguage, stringPageType, stringPageSubType, stringPage, stringVariable, index, subIndex){
    return getMultilingualText("GET",stringLanguage, stringPageType, stringPageSubType, stringPage, stringVariable);
}

function getMultilingualTextFromWindow(stringLanguage, stringPageSubType, stringPage, stringVariable, index, subIndex){
    return getMultilingualGETText(stringLanguage, "Window", stringPageSubType, stringPage, stringVariable, index, subIndex);
}

function getMultilingualTextFromWindowFromCommon(stringLanguage, stringPage, stringVariable, index, subIndex){
    return getMultilingualTextFromWindow(stringLanguage, "Common", stringPage, stringVariable, index, subIndex);
}

function getMultilingualTextFromWindowFromPopUp(stringLanguage, stringPage, stringVariable, index, subIndex){
    return getMultilingualTextFromWindow(stringLanguage, "PopUp", stringPage, stringVariable, index, subIndex);
}

function getMultilingualCurrentLanguage(format, index){
    return requestVariable("View/Languages/RetrieveLanguage.php", format, "language", index, 0);
}

function getMultilingualCurrentReducedFacebookLanguage(format, index){
    return requestVariable("View/Languages/RetrieveReducedFacebookLanguage.php", format, "reducedFacebookLanguage", index, 0);
}

function getMultilingualGETCurrentReducedFacebookLanguage(index){
    return getMultilingualCurrentReducedFacebookLanguage("GET", index);
}

function getMultilingualGETCurrentLanguage(index){
    return getMultilingualCurrentLanguage("GET", index);
}

function getMultilingualCurrentLanguageBasic(format){
    return getMultilingualCurrentLanguage(format, 3);
}

function getMultilingualGETCurrentLanguageBasic(){
    return getMultilingualCurrentLanguageBasic("GET");
}

function getMultilingualTextWithCurrentLanguage(format, stringPageType, stringPageSubType, stringPage, stringVariable, index, subIndex){
    return requestVariable("View/Languages/"+stringPageType+"/"+stringPageSubType+"/"+stringPage+"/"+getCookie("language")+".lang", format, stringVariable, index, subIndex);
}

function getMultilingualGETTextWithCurrentLanguage(stringPageType, stringPageSubType, stringPage, stringVariable, index, subIndex){
    return getMultilingualTextWithCurrentLanguage("GET", stringPageType, stringPageSubType, stringPage, stringVariable, index, subIndex);
}

function getMultilingualTextFromWindowWithCurrentLanguage(stringPageSubType, stringPage, stringVariable, index, subIndex){
    return getMultilingualGETTextWithCurrentLanguage("Window", stringPageSubType, stringPage, stringVariable, index, subIndex);
}

function getMultilingualTextFromWindowFromCommonWithCurrentLanguage(stringPage, stringVariable, index, subIndex){
    return getMultilingualTextFromWindowWithCurrentLanguage("Common", stringPage, stringVariable, index, subIndex);
}

function getMultilingualTextFromWindowFromPopUpWithCurrentLanguage(stringPage, stringVariable, index, subIndex){
    return getMultilingualTextFromWindowWithCurrentLanguage("PopUp", stringPage, stringVariable, index, subIndex);
}
