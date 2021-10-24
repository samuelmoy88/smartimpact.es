require('./bootstrap');

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

function cumulativeOffset(element) {
    var top = 0, left = 0;
    do{
        top     += element.offsetTop  || 0;
        left    += element.offsetLeft || 0;
        element  = element.offsetParent;
    }while(element);
    return {
        top: top,
        left: left
    };
};

function scrollWin(id){
    window.scrollTo(
        {
            top:cumulativeOffset(document.getElementById(id)).top - 128,
            behavior:"smooth"
        }
    );
}
