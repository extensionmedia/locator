require('./bootstrap');

$(document).ready(function(){

    var Base_URL = window.location.origin;

    var Skeleton_Loader = ``;

    $.ajax({
        url: "/skeleton",
        method: "GET",
    }).done(function(response) {
        Skeleton_Loader = response
    }).fail(function (error) {
        console.log(error);
    });


    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        $(".navigation").each(function(){
            if(state == null){
                if($(this).data('url') == Base_URL){
                    $(this).trigger('click')
                }
                console.log('should go to home')
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
        $("content").html(Skeleton_Loader)

        var content = $(this).data('content');

        $.ajax({
            url: "/content",
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {content: content},
        }).done(function(response) {
            $("content").html(response)
        }).fail(function (error) {
            console.log(error);
        });

    })

})
