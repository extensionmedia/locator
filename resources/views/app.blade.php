<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Roboto Flex', sans-serif;
            }
        </style>
    </head>
<body>
    <div class="h-screen w-full relative flex bg-gray-800 overflow-hidden">
        <div class=" w-[50px] lg:w-[174px]">
            @include('layout.vertical_nav')
        </div>
        <div class="flex-1 pt-4 pr-4">
            <div class="bg-white h-full" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                content
            </div>
        </div>
        
    </div>
</body>
</html>