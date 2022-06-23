require('./bootstrap');

$(document).ready(function(){

    var Base_URL = window.location.origin;
    $('.navigation').on('click', function(e){
        e.preventDefault()
        window.history.pushState("", "", Base_URL + $(this).data('url'));
        /*
        if (window._hasPushState) {
            window.history[options.replace ? 'replaceState' : 'pushState']({}, document.title, Base_URL + $(this).data('url'));
        }else{
            alert('not')
        }
        */
    })

})
