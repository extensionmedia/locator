<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ @config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap" rel="stylesheet">
        <script src="{{asset('js/jquery.3.6.0.js')}}"></script>

        @yield('includes') 

        <style>
            body{
                font-family: 'Roboto Flex', sans-serif;
            }
        </style>
    </head>
<body>
    <div class="h-screen w-full relative flex bg-gray-800 overflow-hidden">

        <div class="w-[5px] md:w-[50px] lg:w-[174px]">
            @include('layout.vertical_nav')
        </div>

        <div class="flex-1 pt-4 pr-2 lg:pr-4">

            <div class="bg-white h-full w-full flex flex-col" style="border-top-left-radius: 30px; border-top-right-radius: 30px">

                <div class="bg-gray-150 w-full h-12 shadow" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                    @include('layout.header')
                </div>

                <div class="flex-1 px-4 pt-4 bg-gray-50 w-full overflow-y-auto">
                  @yield('content') 
                </div>
                
            </div>

        </div>
        
    </div>
    <script>
        $(document).ready(function(){
            //Jquery
        })
    </script>
</body>
</html>