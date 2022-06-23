require('./bootstrap');

$(document).ready(function(){

    var Base_URL = window.location.origin;

    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state !== null) {
           console.log('state')
        }else{
            console.log('state2222')
        }
    });

    $('.navigation').on('click', function(e){
        e.preventDefault()
        window.history.pushState("", "New title", Base_URL + $(this).data('url'));
        /*
        if (window._hasPushState) {
            window.history[options.replace ? 'replaceState' : 'pushState']({}, document.title, Base_URL + $(this).data('url'));
        }else{
            alert('not')
        }
        */
    })

})
