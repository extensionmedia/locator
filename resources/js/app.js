require('./bootstrap');

$(document).ready(function(){

    var Base_URL = window.location.origin;

    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        $(".navigation").each(function(){
            if(state == null){
                if($(this).data('url') == Base_URL){
                    $(this).trigger('click')
                }
            }else{
                if($(this).data('url') == state){
                    $(this).trigger('click')
                }
            }
        })
    });

    $('.navigation').on('click', function(e){

        e.preventDefault()

        $(".navigation").removeClass('bg-gray-600')
        $(this).addClass('bg-gray-600')

        window.history.pushState($(this).data('url'), "", $(this).data('url'));

        $.ajax({
            url         :   $(this).data('url'),
            success     :   function(response){
                $("content").html(response)
            }
            
        })

    })

})
