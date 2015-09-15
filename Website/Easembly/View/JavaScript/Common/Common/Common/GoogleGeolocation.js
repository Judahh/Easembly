var geocoder;
var map;
var positionReceived;
var infowindow;
var marker

function initializeMapCanvas() {
    geocoder = new google.maps.Geocoder();
    infowindow = new google.maps.InfoWindow();
    var mapOptions = {
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        enableHighAccuracy: true
    };
    map = new google.maps.Map(document.getElementById('DivIdMapCanvas'),
        mapOptions);

    // Try HTML5 geolocation
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            positionReceived = new google.maps.LatLng(latitude,
                longitude);

            marker = new google.maps.Marker({
                position: positionReceived,
                map: map,
                title: '',
                draggable:true,
                animation: google.maps.Animation.DROP
            });

            map.setCenter(positionReceived);

            geocoder.geocode({'latLng': positionReceived}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {

                    var noResults=true;

                    for(var index=0;index<results.length;index++){
                        if (results[index]) {
                            infowindow.setContent(results[index].formatted_address);
                            infowindow.open(map, marker);
                            document.getElementById('TextAreaIdMainLocationAddress').value=results[index].formatted_address;
                            noResults=false;
                            index=results.length;
                        }
                    }

                    google.maps.event.addListener(marker, 'dragend', function(event) {
                        reloadMarker(marker, event.latLng);
                    });

                    if(noResults) {
                        //alert('No results found');
                    }
                } else {
                    //alert('Geocoder failed due to: ' + status);
                }
            });

        }, function() {
            handleNoGeolocation(true);
        });
    } else {
        // Browser doesn't support Geolocation
        handleNoGeolocation(false);
    }
}

function reloadMarker(marker, pos) {

    geocoder.geocode({'latLng': pos}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {

            var noResults=true;

            for(var index=0;index<results.length;index++){
                if (results[index]) {
                    infowindow.setContent(results[index].formatted_address);
                    infowindow.open(map, marker);
                    document.getElementById('TextAreaIdMainLocationAddress').value=results[index].formatted_address;
                    noResults=false;
                    index=results.length;
                }
            }

            //google.maps.event.addListener(marker, 'dragend', function(event) {
            //    reloadMarker(marker, event.latLng);
            //});

            if(noResults) {
                //alert('No results found');
            }
        } else {
            //alert('Geocoder failed due to: ' + status);
        }
    });
}

function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
    } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
    }

    var options = {
        map: map,
        position: new google.maps.LatLng(60, 105),
        title: ''
    };

    var marker = new google.maps.Marker(options);
    map.setCenter(options.position);
}

function simpleAddressValidator(textAreaIdMainLocationAddress) {
    var element = document.getElementById(textAreaIdMainLocationAddress);
    var value = element.value;
    addressValidator(value, element);
}

// FullAddress jQuery Validator
function addressValidator(value, element, paras) {

    // Convert the value variable into something a bit more descriptive
    var CurrentAddress = value;

    // If the address is blank, then this is for the required validator to deal with.
    if (value.length == 0) {
        return true;
    }

    // If we've already validated this address, then just return the previous result
    if ($(element).data("LastAddressValidated") == CurrentAddress) {
        return $(element).data("IsValid");
    }

    // We have a new address to validate, set the IsChecking flag to true and set the LastAddressValidated to the CurrentAddress
    $(element).data("IsChecking", true);
    $(element).data("LastAddressValidated", CurrentAddress);

    // Google Maps doesn't like line-breaks, remove them
    CurrentAddress = CurrentAddress.replace(/\n/g, "");

    // Create a new Google geocoder
    geocoder.geocode({ 'address': CurrentAddress }, function (results, status) {

        // The code below only gets run after a successful Google service call has completed.
        // Because this is an asynchronous call, the validator has already returned a 'true' result
        // to supress an error message and then cancelled the form submission.  The code below
        // needs to fetch the true validation from the Google service and then re-execute the
        // jQuery form validator to display the error message.  Futhermore, if the form was
        // being submitted, the code below needs to resume that submit.

        // Google reported a valid geocoded address
        if (status == google.maps.GeocoderStatus.OK) {

            // Get the formatted Google result

            var result=results[0];

            var noResults=true;
            //var marker;

            var address;

            for(var index=0;index<results.length;index++){
                result=results[index];
                address = result.formatted_address;
                if (results[index]) {
                    //marker = new google.maps.Marker({
                    //    position: result.geometry.location,
                    //    map: map,
                    //    title: '',
                    //    draggable:true,
                    //    animation: google.maps.Animation.DROP
                    //});

                    infowindow.setContent(results[index].formatted_address);
                    infowindow.open(map, marker);
                    noResults=false;
                    index=results.length;
                    map.setCenter(result.geometry.location);
                    $(element).val(address);
                }
            }



            if(!noResults) {

                //google.maps.event.addListener(marker, 'dragend', function(event) {
                //    reloadMarker(marker, event.latLng);
                //});

                // Count the commas in the fomatted address.
                // This doesn't look great, but it helps us understand how specific the geocoded address
                // is.  For example, "CA" will geocde to "California, USA".
                numCommas = address.match(/,/g).length;

                // A full street address will have at least 3 commas.  Alternate techniques involve
                // fetching the address_components returned by Google Maps.  That code looks even more ugly.
                if (numCommas >= 3) {

                    // Replace the first comma found with a line-break
                    //address = address.replace(/, /, "\n");

                    // Cache this latest result
                    $(element).data("LastAddressValidated", address);

                    // We have a valid geocoded address
                    $(element).data("IsValid", true);
                } else {
                    // Google Maps was able to geocode the address, but it wasn't specific
                    // enough (not enough commas) to be a valid street address.
                    $(element).data("IsValid", false);
                }

            }else{
                $(element).data("IsValid", false);
            }

            // Otherwise the address is invalid
        } else {
            $(element).data("IsValid", false);
        }

        // We're no longer in the midst of validating
        $(element).data("IsChecking", false);

        // Get the parent form element for this address field
        var form = $(element).parents('form:first');

        // This code is being run after the validation for this field,
        // if the form was being submitted before this validtor was
        // called then we need to re-submit the form.
        if ($(element).data("SubmitForm") == true) {
            form.submit();
        } else {
            // Re-validate this property so we can return the result.

            form.validate().element(element);
        }
    });

    // The FullAddress validator always returns 'true' when initially called.
    // The true result will be return later by the geocode function (above)
    return true;
}

function reloadGoogleGeolocation(file){
    var fileArray = file.split("/");
    var fileElement = fileArray[fileArray.length-1];
    if(fileElement=="Home.php"||fileElement=="Goods.php"||fileElement=="OtherStuff.php"){
        initializeMapCanvas();
        var no = new ComboBox('InputIdLocationName');
        //alert("COMBO!!!");
    }
}
