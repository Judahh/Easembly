/**
 * Created by Judah on 1/29/15.
 */
var typeText="01001010 01110101 01100100 01100001 01101000 00100000 01001000 01101111 01101100 01100001 01101110 01100100 01100001 00100000 01000011 01101111 01110010 01110010 01100101 01101001 01100001 00100000 01001100 01101001 01101101 01100001 ";

var divIdCodeBackgroundType="";

function type(delay,currentChar) {
    var cut=1;
    var typeTextSubString= typeText.substr(currentChar, 1);

    currentChar++;
    if(typeTextSubString==" "){
        currentChar++;
        cut++;
        var typeTextSubString= typeText.substr(currentChar-2, 2);
    }
    
    postMessage([typeTextSubString,cut]);

    if (currentChar>typeText.length){
        currentChar=0;

        setTimeout(function() {type(delay,currentChar)}, delay);
    }else{
        setTimeout(function() {type(delay,currentChar)}, delay);
    }
}

type(50,0);