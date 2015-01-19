function toggleDivId(divId) {
    var element = document.getElementById(divId);
    if (element.style.display == 'none') {
        open(element);
    }else {
        close(element);
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
    close(element);
}

function openDivId(divId){
    var element = document.getElementById(divId);
    open(element);
}

function close(element){
    element.style.display = "none";
}

function open(element){
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

    open(element);

    var opacity = initial;

    if(opacity == end){
        if(end == 0){
            close(element);
        }
    }

    var interval = setInterval(
        function(){
            if((opacity == end)){
                if(end == 0){
                    close(element);
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
            close(element);
            element.pause();
        }
    }

    var interval = setInterval(
        function(){
            if((volume == end)){
                if(end == 0){
                    close(element);
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
