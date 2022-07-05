<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ @config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>  
        <script src="{{asset('js/jquery.3.6.0.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>

        @yield('includes') 

        <style>
            body{
                font-family: 'Roboto Flex', sans-serif;
            }
        </style>
    </head>
<body>
    <div id="app" class="h-screen w-full relative flex bg-gray-800 overflow-hidden">

        <div class="vertical_menu w-[5px] md:w-[50px] lg:w-[174px]">
            @include('layout.vertical_nav')
        </div>

        <main class="flex-1 pt-4 pr-2 lg:pr-4">

            <div class="bg-white h-full w-full flex flex-col" style="border-top-left-radius: 30px; border-top-right-radius: 30px">

                <div class="bg-gray-150 w-full h-12 shadow" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                    @include('layout.header')
                </div>

                <content class="flex-1 px-4 pt-4 bg-gray-50 w-full overflow-auto">
                  @yield('content') 
                </content>
                
            </div>

        </main>
        
    </div>
    <div class="show_menu md:hidden cursor-pointer fixed left-0 bottom-0 text-center text-white text-2xl w-8 py-1 bg-gray-700 bg-opacity-20 hover:bg-opacity-60 rounded-r-lg mb-4 ml-2">
        <i class="fa-solid fa-arrow-right-arrow-left"></i>
    </div>
    <script>
        $(document).ready(function(){
            $(".show_menu").on('click', function(){
                if($(".vertical_menu").css('width') == "5px"){
                    $(".vertical_menu").css('width', '50px');
                    $(this).addClass("ml-12")
                }else{
                    $(".vertical_menu").css('width', '5px');
                    $(this).removeClass("ml-12").addClass("ml-2")
                }
            })
        })
    </script>
</body>
</html>