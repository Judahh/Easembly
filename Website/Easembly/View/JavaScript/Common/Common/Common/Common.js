var typeWorker;
var require;

function toggleDivId(divId) {
    var element = document.getElementById(divId);
    if (element.style.display == 'none') {
        openElement(element);
    }else {
        closeElement(element);
    }
}

function fadeInDivId(divId,time){
    var element = document.getElementById(divId);
    fadeIn(element,time);
}

function fadeOutDivId(divId,time){
    var element = document.getElementById(divId);
    fadeOut(element,time);
}

function fadeIn(element,time){
    fade(element,time,0,100);
}

function fadeOut(element,time){
    fade(element,time,100,0);
}

function audioFadeIn(element,time){
    audioFade(element,time,0,100);
}

function audioFadeOut(element,time){
    audioFade(element,time,100,0);
}

function closeDivId(divId){
    var element = document.getElementById(divId);
    closeElement(element);
}

function openDivId(divId){
    var element = document.getElementById(divId);
    openElement(element);
}

function closeElement(element){
    element.style.display = "none";
}

function openElement(element){
    element.style.display = "block";
}

function fade(element,time,initial,end){
    var increment = 0;
    if(initial < end){
        element.style.opacity = initial/100;
        element.style.filter = "alpha(opacity="+initial+")";
        increment = 1;
    }
    if(initial > end){
        increment = -1;
    }

    openElement(element);

    var opacity = initial;

    if(opacity == end){
        if(end == 0){
            closeElement(element);
        }
    }

    var interval = setInterval(
        function(){
            if((opacity == end)){
                if(end == 0){
                    closeElement(element);
                }
                clearInterval(interval);
            }else {
                opacity += increment;
                element.style.opacity = opacity/100;
                element.style.filter = "alpha(opacity="+opacity+")";
            }
        },time * 10);
}

function audioFade(element,time,initial,end){
    var increment = 0;
    if(initial < end){
        increment = 1;
    }
    if(initial > end){
        increment = -1;
    }

    var volume = initial;

    if(volume == end){
        if(end == 0){
            closeElement(element);
            element.pause();
        }
    }

    var interval = setInterval(
        function(){
            if((volume == end)){
                if(end == 0){
                    closeElement(element);
                    element.pause();
                }
                clearInterval(interval);
            }else {
                volume += increment;
                element.volume = volume/100;
            }
        },time * 10);
}

function goVerticalDivId(divId,time,initial,end,top){
    var element = document.getElementById(divId);
    goVertical(element,time,initial,end,top);
}

function goUp(element,time){
    goVertical(element,time,0,200,true);
}

function goDown(element,time){
    goVertical(element,time,0,200,false);
}

function goRight(element,time){
    goHorizontal(element,time,0,200,true);
}

function goLeft(element,time){
    goHorizontal(element,time,0,200,false);
}

function goBackLeft(element,time){
    goHorizontal(element,time,-100,0,false);
}

function goVertical(element,time,initial,end,top){
    var increment = 1;

    var vertical = initial;

    var interval = setInterval(
        function(){
            if((vertical == end)){
                clearInterval(interval);
            }else {
                vertical += increment;
                if(top){
                    element.style.bottom = vertical + "px";
                }else{
                    element.style.top = vertical + "px";
                }
            }
        },time * 10
    );
}

function goHorizontal(element,time,initial,end,right){
    var increment = 1;

    var horizontal = initial;

    var interval = setInterval(
        function(){
            if((horizontal == end)){
                clearInterval(interval);
            }else {
                horizontal += increment;
                if(right){
                    element.style.right = -horizontal + "px";
                }else{
                    element.style.right = horizontal + "px";
                }
            }
        },time * 10
    );
}

function requireBase(script) {
    //alert("ENTROU!");
    $.ajax({
        url: script,
        dataType: "script",
        async: false,           // <-- This is the key
        success: function () {
            // all good...
        },
        error: function () {
            throw new Error("Could not load script " + script);
        }
    });
}

function loadFile(fileName, fileType, dataMain, id){
    if (fileType=="js"){ //if filename is a external JavaScript file
        var fileref=document.createElement('script');
        fileref.setAttribute("type","text/javascript");
        fileref.setAttribute("id", id);
        fileref.setAttribute("src", fileName);
        fileref.setAttribute("data-main", dataMain);
    } else if (fileType=="css"){ //if filename is an external CSS file
        var fileref=document.createElement("link");
        fileref.setAttribute("id", id);
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("type", "text/css");
        fileref.setAttribute("href", fileName);
    }
    if (typeof fileref!="undefined") {
        document.getElementsByTagName("head")[0].appendChild(fileref);
    }
}

function checkCodeEditorLoad(){
    return (document.getElementById("ScriptId"+"RequireJS")!=null);
}

function codeEditorLoad(){
    //alert("asfasdf");
    if(!checkCodeEditorLoad()) {
        require = {
            baseUrl: window.location.protocol + "//" + window.location.host + window.location.pathname.split("/").slice(0, -1).join("/"),
            paths: {
                ace: "View/JavaScript/Common/Common/Common/Editor/ace-1.1.9/lib/ace"
            },
            waitSeconds: 30
        };

        loadFile("View/JavaScript/Common/Common/Common/Editor/ace-1.1.9/demo/kitchen-sink/require.js", "js", "View/JavaScript/Common/Common/Common/Editor/ace-1.1.9/demo/kitchen-sink/demo", "ScriptIdRequireJS");

        //requireBase("View/JavaScript/Common/Common/Common/Editor/require.js");

        //$.getScript("View/JavaScript/Common/Common/Common/Editor/require.js", function(){
        //
        //    alert("Script loaded but not necessarily executed.");
        //
        //});

        //$(".TextAreaClassLined").linedtextarea(
        //    {selectedLine: 1}
        //);
        //$("#mytextarea").linedtextarea();

        //env.editor.setTheme("Clean");
    }
}

function getLastPage(){
    var lastPage=getFromCache('lastPage');
    if(lastPage==null){
        goToPage("Home");
    }else{
        goToPage(lastPage);
    }
}

function getCodeEditorCount(){
    var count=getFromCache('codeEditorCount');
    if(count==null){
        saveInCache('codeEditorCount',0);
    }
    return count;
}

function getFromCache(name){
    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    var cached=domStorage[name];
    var cached2=sessionStorage.getItem(name);

    if (cached==null||cached==''||cached==undefined) {
        cached=cached2;
    }

    if (cached==null||cached==''||cached==undefined) {
        cached=null;
    }
    return cached;
}

function saveInCache(name, file){
    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    sessionStorage.setItem(name, file);
    domStorage[name]=file;
}

function saveInCacheAFile(file, element){
    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    var doc = document.getElementById(element).innerHTML;
    //alert("VAI SALVAR!");
    //alert(doc);
    sessionStorage.setItem(file, doc);
    domStorage[file]=doc;
}

function boolIsToSaveElementInCache(file) {
    if(file.includes('CodeEditor')||file.includes('EditorSettings')){
        return false;
    }
    return true;
}

function removeAceScripts() {
    //var allScripts = document.getElementsByTagName("script");
    //var src=null;
    //for(var index = 0, max = allScripts.length; index < max; index++) {
    //    if(allScripts[index]!=undefined||allScripts[index]!=null) {
    //        src = allScripts[index].getAttribute("src");
    //        if (src != null) {
    //            if (stringContainsString(src, "ace-1.1.9")) {
    //                allScripts[index].innerHTML = null;
    //                allScripts[index].remove();
    //            }
    //        }
    //    }
    //}
}

function stringContainsString(string,stringB) {
    return (string.indexOf(stringB) != -1);
}

function codeEditorCheck(file) {
    //alert("asfasdfasdfasdfasdfasdf");
    //alert(file);
    if(file.includes('CodeEditor')) {
        saveInCache('codeEditorCount',1);
        //alert(getCodeEditorCount());
        if(document.getElementById("DivIdPopUpBox").innerHTML==""||document.getElementById("DivId"+"EditorSettings")==null) {
            //alert("LOAD!");
            request("DivIdPopUpBox", "View/Frames/Common/Common/Window/Common/PopUp/" + "EditorSettings" + ".php", "GET");
        //}else{
        //    alert("CARREGOU!");
        //    codeEditorLoad();
        }
        //document.getElementById("DivIdSubMenuSettingsHolder").style.display="block";
        //document.getElementById("DivIdSubMenuSettingsHolder2").style.display="block";
    }

    if(file.includes('EditorSettings')) {
        if(checkCodeEditorLoad()) {
            //document.getElementById("ScriptId" + "RequireJS").innerHTML = null;
            //document.getElementById("ScriptId" + "RequireJS").remove();
            //removeAceScripts();

            if(getCodeEditorCount()!=1){
                //alert("BOOM:"+getCodeEditorCount());
                openPopUp('EditorSettings');
                saveInCache('codeEditorCount',0);
                location.reload();
            }
            //goToPage('CodeEditor');
        }
        //alert("CARREGOU!");
        if(document.getElementById("DivId"+"CodeEditor")!=null){
            codeEditorLoad();
            //saveInCacheAFile("View/Frames/Common/Common/Window/Common/PopUp/" + "EditorSettings" + ".php", "DivId"+"PopUpBox");
            //saveInCacheAFile("View/Frames/Common/Common/Window/Common/Common/" + "CodeEditor" + ".php", "DivId"+"Page");
        }
    }
}

function request(element,file,format) {
    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    var cached=domStorage[file];
    var cached2=sessionStorage.getItem(file);

    if (cached==null||cached==''||cached==undefined) {
        cached=cached2;
    }

    //cached=null;
    //alert("Cached of "+file+"=("+cached+")");

    if (cached==null||cached==''||cached==undefined||((file.includes('EditorSettings')||file.includes('CodeEditor')) && editorLoaded==false)) {
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
                var ajaxDisplay = document.getElementById(element);
                ajaxDisplay.innerHTML = ajaxRequest.responseText;

                if(boolIsToSaveElementInCache(file)) {
                    sessionStorage.setItem(file, ajaxRequest.responseText);
                    domStorage[file] = ajaxRequest.responseText;
                }

                codeEditorCheck(file);
                //reloadGoogleGeolocation(file);
            }
        }

        ajaxRequest.open(format, file, true);
        ajaxRequest.send();
    }else{
        document.getElementById(element).innerHTML=cached;
        //alert("EXISTE!!!");
        codeEditorCheck(file);
        //reloadGoogleGeolocation(file);
    }
}

function updateProgress (oEvent) {
    if (oEvent.lengthComputable) {
        var percentComplete = oEvent.loaded / oEvent.total;
        var progressBar = document.getElementById("DivIdProgressBar");
        progressBar.style.width=percentComplete+"%";
    } else {
        // Unable to compute progress information since the total size is unknown
    }
}

function transferComplete(evt) {
    var progressBarHolder = document.getElementById("DivIdProgressBarHolder");
    progressBarHolder.style.height="0px";
}

function transferFailed(evt) {
    //alert(getMultilingualTextFromWindowFromPopUp("English-USA", "Error", "AnErrorOccurredWhileTransferringTheFile"));
}

function transferCanceled(evt) {
    alert(getMultilingualTextFromWindowFromPopUp("English-USA", "Error", "TheTransferHasBeenCanceledByTheUser"));
}

function handleCacheEvent(evt) {

    if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
        // Browser downloaded a new app cache.
        // Swap it in and reload the page to get the new hotness.
        window.applicationCache.swapCache();
        if (confirm('A new version of this site is available. Load it?')) {
            window.location.reload();
        }
    } else {
        // Manifest didn't changed. Nothing new to server.
    }

}

function handleCacheError(evt) {
    alert(getMultilingualTextFromWindowFromPopUp("English-USA", "Error", "cacheFailedToUpdate"));
}

function startTypeWorker() {
    if(typeof(Worker) !== "undefined") {
        if(typeof(typeWorker) == "undefined") {
            typeWorker = new Worker("View/JavaScript/Common/Common/Common/TypeWorker.js");//View/JavaScript/Common/Common/Common/TypeWorker.js
        }
        typeWorker.onmessage = function(event) {
            var divIdCodeBackgroundType = document.getElementById("DivIdCodeBackgroundType");
            var typeTextSubString=event.data[0];
            var cut=event.data[1];
            if(isOverflow(divIdCodeBackgroundType)){
                divIdCodeBackgroundType.innerHTML = divIdCodeBackgroundType.innerHTML.substr(cut, divIdCodeBackgroundType.innerHTML.length + cut -1) + typeTextSubString;
            }else {
                divIdCodeBackgroundType.innerHTML += typeTextSubString;
            }
        };
    } else {
        alert(getMultilingualTextFromWindowFromPopUp("English-USA", "Error", "yourBrowserDoesNotSupportWebWorkers"));
    }
}

function stopTypeWorker() {
    typeWorker.terminate();
    typeWorker = undefined;
}

function isOverflow(element){
    if(element.offsetHeight > getHeight()){
        return true;
    }else{
        return false;
    }
}

function getHeight() {
    var body = document.body,
        html = document.documentElement;

    return  Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
}

function weekDays(i){
    switch (i){
        case 0:
            return "Monday";
        case 1:
            return "Sunday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        default:
            return "Saturday";
    }
}

function sendMailJobOffer(company, name, description) {
    var link = "mailto:judahholanda7@gmail.com"
    + "?subject=" + escape("Job Offer from "+name+" of "+company)
    + "&body=" + escape(description);

    window.location.href = link;
}

function sendMail() {
    var fullDescription='';
    var company=document.getElementById("InputIdCompany").value;
    var name=document.getElementById("InputIdName").value;

    //var emails;
    //var phones;
    //var address;

    var e=document.getElementById("SelectIdJobTitleType");

    var jobTitle=document.getElementById("InputIdJobTitle").value+"("+e.options[e.selectedIndex].value+")";

    fullDescription+="Job"+":"+jobTitle+"\n";

    e=document.getElementById("SelectIdSalaryCoin");
    var e2=document.getElementById("SelectIdSalaryType");

    var salary=document.getElementById("InputIdSalary").value+" "+e.options[e.selectedIndex].value+e2.options[e2.selectedIndex].value;

    if(document.getElementById("squaredOne1").checked){
        salary+=' (flexible)';
    }

    fullDescription+="Salary:"+salary+"\n";

    var week="";

    for(var i=0;i<7;i++){
        if(document.getElementById("squaredOne"+(i+2)).checked) {
            week+=weekDays(i)+", ";
        }
    }

    week=week.substr(0,week.length-2);

    var weekFlexible=document.getElementById("squaredOne9").checked;

    if(weekFlexible){
        week+=' (flexible)';
    }

    fullDescription+="Days:"+week+"\n";

    var inT=document.getElementById("InputIdHourIn").value+"h";

    if(document.getElementById("squaredOne10").checked){
        inT+=' (flexible)';
    }

    var outT=document.getElementById("InputIdHourOut").value+"h";

    if(document.getElementById("squaredOne11").checked){
        outT+=' (flexible)';
    }

    fullDescription+="From "+inT+" to "+outT+"\n";

    var description=document.getElementById("TextAreaIdDescription").value;

    fullDescription+="Description:\n"+description+"\n";

    var element=document.getElementById("TableIdEmail");
    fullDescription+="Email:\n";

    for(var i=0;i<element.rows.length;i++){
        fullDescription+=element.rows[i].cells[1].getElementsByTagName("input")[0].value+"\n";
    }

    element=document.getElementById("TableIdPhone");
    fullDescription+="Phone:\n";

    for(var i=0;i<element.rows.length;i++){
        fullDescription+=element.rows[i].cells[2].getElementsByTagName("input")[0].value;
        fullDescription+=" ("+element.rows[i].cells[1].getElementsByTagName("select")[0].selectedIndex.value+")\n";
    }

    element=document.getElementById("TableIdAddress");
    fullDescription+="Address:\n";

    for(var i=0;i<element.rows.length;i++){
        fullDescription+=element.rows[i].cells[1].getElementsByTagName("input")[0].value+"\n";
    }

    sendMailJobOffer(company,name,fullDescription);
}

function removeRow(element, type, index){
    if(element.rows.length>1) {
        for(var i=index;i<element.rows.length;i++){
            element.rows[i].cells[0].innerHTML='<div id="DivIdRedCircle"><div id="DivIdCircleText" onclick="remove'+type+'('+(i-1)+')">-</div></div>';
        }
        if(index==element.rows.length-1){
            element.rows[index-1].cells[(element.rows[index-1].length-1)].innerHTML='<div id="DivIdBlueCircle"><div id="DivIdCircleText" onclick="add'+type+'()">+</div></div>';
        }
        element.deleteRow(index);
    }
    if(element.rows.length==1) {
        element.rows[0].cells[0].innerHTML='';
    }
}

function removeEmail(index) {
    var element=document.getElementById("TableIdEmail");
    removeRow(element, "Email", index);
}

function removePhone(index) {
    var element=document.getElementById("TableIdPhone");
    removeRow(element, "Phone", index);
}

function removeAddress(index) {
    var element=document.getElementById("TableIdAddress");
    removeRow(element, "Address", index);
}

function addRow(element, type){
    element.rows[element.rows.length-1].cells[(element.rows[element.rows.length-1].cells.length-1)].innerHTML="";
    if(element.rows.length==1) {
        element.rows[0].cells[0].innerHTML='<div id="DivIdRedCircle"><div id="DivIdCircleText" onclick="remove'+type+'(0)">-</div></div>';
    }
    return element.insertRow(element.rows.length);
}

function addEmail() {
    var element=document.getElementById("TableIdEmail");
    var row=addRow(element, "Email");
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = '<div id="DivIdRedCircle"><div id="DivIdCircleText" onclick="removeEmail('+(element.rows.length-1)+')">-</div></div>';
    cell2.innerHTML = '<input id="InputIdEmail"></input>';
    cell3.innerHTML = '<div id="DivIdBlueCircle"><div id="DivIdCircleText" onclick="addEmail()">+</div></div>';
}

function phoneTypes(){
    var element=document.getElementById("TableIdPhone").children[0].children[0].children[1].children[0].children[0];
    var types=["",""];
    types[0]=customTrim(element.children[0].innerHTML);
    types[1]=customTrim(element.children[1].innerHTML);
    return types;
}

function addPhone() {
    var element=document.getElementById("TableIdPhone");
    var types=phoneTypes();
    var row=addRow(element, "Phone");
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = '<div id="DivIdRedCircle"><div id="DivIdCircleText" onclick="removePhone('+(element.rows.length-1)+')">-</div></div>';
    cell2.innerHTML = '<label><select id="SelectIdPhone"><option id="OptionIdPhone">'+types[0]+'</option><option id="OptionIdPhone">'+types[1]+'</option></select></label>';
    cell3.innerHTML = '<input id="InputIdPhone"></input>';
    cell4.innerHTML = '<div id="DivIdBlueCircle"><div id="DivIdCircleText" onclick="addPhone()">+</div></div>';
}

function addAddress() {
    var element=document.getElementById("TableIdAddress");
    var row=addRow(element, "Address");
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = '<div id="DivIdRedCircle"><div id="DivIdCircleText" onclick="removeAddress('+(element.rows.length-1)+')">-</div></div>';
    cell2.innerHTML = '<input id="InputIdAddress"></input>';
    cell3.innerHTML = '<div id="DivIdBlueCircle"><div id="DivIdCircleText" onclick="addAddress()">+</div></div>';
}

function goToSpecialPage(window,windowSpecial) {
    if(true) {//todo
        request("DivIdPage", "View/Frames/Common/Common/Window/Common/Common/" + window + ".php", "GET");
    }else{
        request("DivIdPage", "View/Frames/Common/Common/Window/Common/Common/" + windowSpecial + ".php", "GET");
    }
}

function goToPage(window) {
    saveInCache('lastPage',window);
    //saveInCache('lastPage','CodeEditor');
    request("DivIdPage","View/Frames/Common/Common/Window/Common/Common/"+window+".php","GET");
}

function getMenu(divIdMenu,menu,subMenu) {
    request(divIdMenu,"View/Frames/Common/Common/Common/Header/"+menu+"/"+subMenu+".php","GET");
}

//function scrollIntoView(elementID) {
//    var element = document.getElementById(elementID);
//    if (!!element && element.scrollIntoView) {
//        element.scrollIntoView();
//    }
//}
//
//function scrollToView(elementID) {
//    window.scroll(0, findPos(document.getElementById(elementID)));
//}

function scrollIntoView(elementID) {
    var element = document.getElementById(elementID);
    //$("#fromTHIS").click(function () {
        $("html, body").animate({scrollTop: element.offset().top}, 500);
        //console.log('executed scrollToElement');
        //return true;
    //});
}

function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return [curtop];
    }
}

function currentVerticalPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

function elementVerticalPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}

function homeSmoothScroll(eID) {
    if(!document.getElementById(eID)){
        goToPage("Home");
    }
    smoothScroll(eID);
}

function smoothScroll(eID) {
    var startY = currentVerticalPosition();
    var stopY = elementVerticalPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
    return false;
}
