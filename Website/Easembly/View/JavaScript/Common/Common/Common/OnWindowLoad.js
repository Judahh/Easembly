var editorLoaded;
window.onload = function(){
    editorLoaded = false;
    //onVideoWindowLoad();

    getLastPage();
    //goToPage("Home");
    getMenu("DivIdMenuRight","MenuRight","SubMenuRight");
    //getFacebookJavaScriptSDK();
    getLanguageToFacebook();
    fileTreeController();
    //initializeMapCanvas();
    //$.validator.addMethod("ClassMainLocationAddressValidator", addressValidator);

    //startTypeWorker();



    //var appCache = window.applicationCache;
    //appCache.update();

//// Fired after the first cache of the manifest.
//    appCache.addEventListener('cached', handleCacheEvent, false);
//
//// Checking for an update. Always the first event fired in the sequence.
//    appCache.addEventListener('checking', handleCacheEvent, false);
//
//// An update was found. The browser is fetching resources.
//    appCache.addEventListener('downloading', handleCacheEvent, false);
//
//// The manifest returns 404 or 410, the download failed,
//// or the manifest changed while the download was in progress.
//    appCache.addEventListener('error', handleCacheError, false);
//
//// Fired after the first download of the manifest.
//    appCache.addEventListener('noupdate', handleCacheEvent, false);
//
//// Fired if the manifest file returns a 404 or 410.
//// This results in the application cache being deleted.
//    appCache.addEventListener('obsolete', handleCacheEvent, false);
//
//// Fired for each resource listed in the manifest as it is being fetched.
//    appCache.addEventListener('progress', handleCacheEvent, false);
//
//// Fired when the manifest resources have been newly redownloaded.
//    appCache.addEventListener('updateready', handleCacheEvent, false);
}

//google.maps.event.addDomListener(window, 'load', initializeMapCanvas);
//$('body').on('DOMNodeInserted', "#DivIdHome", function(){initializeMapCanvas();});
//$('body').on('DOMNodeInserted', "#DivIdGoods", function(){initializeMapCanvas();});
//$('body').on('DOMNodeInserted', "#DivIdOtherStuff", function(){initializeMapCanvas();});

//$('#DivIdHome').onload(function(){initializeMapCanvas();});
//$('#DivIdGoods').onload(function(){initializeMapCanvas();});
//$('#DivIdOtherStuff').onload(function(){initializeMapCanvas();});