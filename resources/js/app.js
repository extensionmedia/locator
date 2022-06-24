require('./bootstrap');

$(document).ready(function(){

    var Base_URL = window.location.origin;

    var Skeleton_Loader = `
        <div class="container bg-white shadow-lg h-full">
            container
        </div>


        <div class="hidden w-60 h-24 border-2 rounded-md mx-auto mt-20">
            <div class="flex animate-pulse flex-row items-center h-full justify-center space-x-5">
                <div class="w-12 bg-gray-300 h-12 rounded-full "> </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-36 bg-gray-300 h-6 rounded-md "> </div>
                    <div class="w-24 bg-gray-300 h-6 rounded-md "> </div>
                </div>
            </div>
        </div>
    `;


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
        var url = $(this).data('url');

        var payload = JSON.stringify({
                content : 'rent'
            });

        $.ajax({
            url: "/content",
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: payload,
        }).done(function(response) {
            $("content").html(response)
        }).fail(function (error) {
            console.log(error);
        });

    })

})
