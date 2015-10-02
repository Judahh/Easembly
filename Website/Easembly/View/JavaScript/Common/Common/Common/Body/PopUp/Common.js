function getLanguage(){
    if(getCookie("language")==null) {
        var file="View/Languages/RetrieveLanguage.php";
        var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
        var cached=domStorage[file];
        var cached2=sessionStorage.getItem(file);

        if (cached==null||cached==''||cached==undefined) {
            cached=cached2;
        }


        if (cached==null||cached==''||cached==undefined) {
            getMultilingualGETCurrentLanguageBasic();
        }else{
            setLanguage(getStringVariableText(cached,"language"));
        }
    }
}

function setLanguage(language){
    setCookie("language", language, 5);

    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    sessionStorage.setItem("language", language);
    domStorage["language"]= language;
}


function getCookie(name) {
    var cookiename = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
    }
    return null;
}

function removeCookie(name, path, domain) {
    // If the cookie exists
    if (getCookie(name)) {
        setCookie(name, "", 1);
    }
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function testAjax(){
    // Create a new XHR request object.
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

    // Open the AJAX connection.
    ajaxRequest.open("GET", "indexPage.php", false);

    // Send the request. Since this request is being made
    // *Synchronously*, we don't have to keep a ready-state
    // change handler.
    ajaxRequest.send();
}

function changeLanguageTemporary(language) {
    document.getElementById("DivIdSelectedLanguage").innerHTML=document.getElementById("DivIdSelectedLanguage").innerHTML.split(": ")[0]+": "+language;
}

function languageToNative(language){
    switch (language){
        case "Portuguese-Brazil":
            return "Português/Brasil";
        default:
            return "English/USA";
    }
}

function languageToEnglish(language){
    switch (language){
        case "Português/Brasil":
            return "Portuguese-Brazil";
        default:
            return "English-USA";
    }
}

function changeLanguageAndPopUpClose(window) {
    var language = document.getElementById("DivIdSelectedLanguage").innerHTML.split(": ")[1].split("</div>")[0];
    language=languageToEnglish(language);
    if(language!=getCookie("language")) {
        setLanguage(language);

        testAjax();
        sessionStorage.clear();
        localStorage.clear();
        //var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
        //if(domStorage!=null) {
        //    domStorage=null;//.clear();
        //}

        document.getElementById("DivIdPopUpBox").innerHTML = "";

        goToPage(document.getElementById("DivIdCode").children[0].id.split("DivId")[1]);

        getMenu("DivIdMenuRight","MenuRight","SubMenuRight");
    }

    popUpClose(window);
}

function openPopUp(window) {
    if(document.getElementById("DivIdPopUpBox").innerHTML==""||document.getElementById("DivId"+window)==null) {
        request("DivIdPopUpBox", "View/Frames/Common/Common/Window/Common/PopUp/" + window + ".php", "GET");
    }
    popUpOpen("DivIdPopUpBox");
}

function popUpClose(window) {
    fadeOutDivId(window,0.5);
}

function popUpOpen(window) {
    fadeInDivId(window,0.5);
}