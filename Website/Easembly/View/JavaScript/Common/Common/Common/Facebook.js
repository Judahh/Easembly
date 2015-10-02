// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        logged();
    } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
        notAuthorized();
    } else {
        // The person is not logged into Facebook, so we're not sure if
        // they are logged into this app or not.
        loggedOut();
    }
}

function getFacebookJavaScriptSDK(){
    //alert('Click ok to init');
    $.ajaxSetup({ cache: true });
    $.getScript(getFacebookSDKSource(), function(){
        FB.init({
            appId      : getFacebookAppId(),
            cookie     : true,  // enable cookies to allow the server to access
            xfbml      : true,
            version    : 'v2.3'
        });
        $('#loginbutton,#feedbutton').removeAttr('disabled');
        //FB.getLoginStatus(updateStatusCallback);
        checkLoginState();
        //getFacebookLoginStatus(updateStatusCallback);
    });
}

// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}


//window.fbAsyncInit = function() {
//    FB.init({
//        appId      : getFacebookAppId(),
//        cookie     : true,  // enable cookies to allow the server to access
//        xfbml      : true,
//        version    : 'v2.3'
//    });
//};

//(function(d, s, id){
//    var js, fjs = d.getElementsByTagName(s)[0];
//    if (d.getElementById(id)) {return;}
//    js = d.createElement(s); js.id = id;
//    js.src = getFacebookSDKSource();
//    fjs.parentNode.insertBefore(js, fjs);
//}(document, 'script', 'facebook-jssdk'));

// Now that we've initialized the JavaScript SDK, we call
// FB.getLoginStatus().  This function gets the state of the
// person visiting this page and can return one of three states to
// the callback you provide.  They can be:
//
// 1. Logged into your app ('connected')
// 2. Logged into Facebook, but not your app ('not_authorized')
// 3. Not logged into Facebook and can't tell if they are logged into
//    your app or not.
//
// These three cases are handled in the callback function.

//FB.getLoginStatus(function(response) {
//    statusChangeCallback(response);
//});


function getFacebookLoginStatus(response){
    statusChangeCallback(response);
}

function updateStatusCallback(){
    //alert('Status updated!!');
    //FB.getLoginStatus();
    // Your logic here
}

// Here we run a very simple test of the Graph API after login is
// successful.  See statusChangeCallback() for when this call is made.
//function testAPI() {
//    console.log('Welcome!  Fetching your information.... ');
//    FB.api('/me', function(response) {
//        console.log('Successful login for: ' + response.name);
//        document.getElementById('status').innerHTML =
//            'Thanks for logging in, ' + response.name + '!';
//    });
//}

//FB.logout(function(response) {
//    // Person is now logged out
//});

function facebookLogout(response){
    //
}

function logged(){
    //alert('Logged!');
    $("#DivLoginText").toggle();
    $("#DivLogoutText").toggle();
    getProfilePicture();
    //document.getElementById('status').innerHTML = 'Logged!';
}

function notAuthorized(){
    alert('Not Authorized!');
    //document.getElementById('status').innerHTML = 'Not Authorized!';
}

function loggedOut(){
    //alert('Logged Out!');
    $("#DivLogoutText").toggle();
    $("#DivLoginText").toggle();
    removeProfilePicture();
    //document.getElementById('status').innerHTML = 'Logged Out!';
}


//function getProfilePicture() {
//    //FB.api('/me/feed', 'post', {message: 'Hello, world!'});
//    FB.api("/me", {fields: "id,name,picture"}, function(response) {
//
//        FB.api(
//            {
//                method: 'fql.query',
//                query: 'SELECT pid,src_big FROM photo WHERE aid IN (SELECT aid FROM album WHERE owner=me() AND name = "Profile Pictures")'
//            },
//            function(data1) {
//                alert( data1[0].src_big );
//            }
//        );
//
//    });
//}

function removeProfilePicture() {
    $("#DivIdProfilePicture").text('0');
    $("#ImgIdProfilePicture").innerHTML = "";
}

function getProfilePicture() {
    $("#DivIdProfilePicture").text('');
    var $photo = $('#DivIdProfilePicture');
    //var $btn = $('.btn-fb');
    //var $fbPhoto = $('img.fb-photo');

    //uploading
    //$btn.text('Uploading...');

    FB.api("/me/picture?redirect=false",  function(response) {

        var profileImage = response.data.url.split('https://')[1], //remove https to avoid any cert issues
            randomNumber = Math.floor(Math.random()*256);

        //remove if there and add image element to dom to show without refresh
        //if( $fbPhoto.length ){
        //    $fbPhoto.remove();
        //}
        //add random number to reduce the frequency of cached images showing
        //$photo.innerHTML='<img id=\"ImgIdProfilePicture\" class=\"fb-photo img-polaroid\" src=\"http://' + profileImage + '\">';
        $photo.append('<img id=\"ImgIdProfilePicture\" class=\"fb-photo img-polaroid\" src=\"http://' + profileImage + '\">');
        //$btn.addClass('hide');
    });
}


//FB.login(function(response) {
//    alert("LOGIN!!!!!");
//    if (response.authResponse) {
//        console.log('Welcome!  Fetching your information.... ');
//        //console.log(response); // dump complete info
//        access_token = response.authResponse.accessToken; //get access token
//        user_id = response.authResponse.userID; //get FB UID
//
//        FB.api('/me', function(response) {
//            user_email = response.email; //get user email
//            // you can store this data into your database
//        });
//
//    } else {
//        //user hit cancel button
//        console.log('User cancelled login or did not fully authorize.');
//
//    }
//}, {
//    scope: 'publish_stream,email'
//});

function facebookLogin(){
    //FB.login(updateStatusCallback);
    FB.login(function(response) {
        //alert("LOGIN!!!!!");
        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            access_token = response.authResponse.accessToken; //get access token
            user_id = response.authResponse.userID; //get FB UID

            FB.api('/me', function(response) {
                user_email = response.email; //get user email
                // you can store this data into your database
            });

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

        }
        statusChangeCallback(response);
    }, {
        scope: 'email,public_profile,user_photos'
    });
}

function facebookLogout(){
    //FB.login(updateStatusCallback);
    FB.logout(function(response) {
        //alert("LOGIN!!!!!");
        statusChangeCallback(response);
    });
}

function facebookLogInOut(){
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            facebookLogout();
        } else {
            facebookLogin();
        }
    });
}

function getFacebookSDKSource(){
    var reducedLanguage = getCookie("reducedFacebookLanguage");
    //alert("GOT:"+reducedLanguage);
    return '//connect.facebook.net/'+reducedLanguage+'/sdk.js';
}

function getFacebookAppId(){
    var index = 0;
    var id;
    switch (index){
        case 1:
            id='367817796762728';
        break;
        default:
            id='367189736825534';
    }
    return id;
}

function getLanguageToFacebook() {
    if (getCookie("reducedFacebookLanguage") == null||getCookie("reducedFacebookLanguage") == 'null') {
        var file = "View/Languages/RetrieveReducedFacebookLanguage.php";
        var domStorage = window.localStorage || (window.globalStorage ? globalStorage[location.hostname] : null);
        var cached = domStorage[file];
        var cached2 = sessionStorage.getItem(file);

        if (cached == null || cached == '' || cached == undefined) {
            cached = cached2;
        }


        if (cached == null || cached == '' || cached == undefined) {
            getMultilingualGETCurrentReducedFacebookLanguage(7);
        } else {
            //alert("Cached:"+cached);
            setLanguageToFacebook(getStringVariableText(cached, "reducedFacebookLanguage"));
        }
    } else {
        getMultilingualGETCurrentReducedFacebookLanguage(7);
    }
}

function setLanguageToFacebook(language){
    setCookie("reducedFacebookLanguage", language, 5);

    //alert("New:"+language);

    var domStorage=window.localStorage || (window.globalStorage? globalStorage[location.hostname] : null);
    sessionStorage.setItem("reducedFacebookLanguage", language);
    domStorage["reducedFacebookLanguage"]= language;

    getFacebookJavaScriptSDK();
}