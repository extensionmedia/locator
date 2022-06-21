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
            <div class="bg-white h-full flex flex-col" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                <div class="bg-gray-150 w-full h-12 shadow" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                    <div class="h-full border-b flex justify-between items-center px-4">
                        <div class="">
                            <i class="fa-solid fa-house"></i> 
                            <span class="font-light">
                                Dashboard
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <div class="rounded-full h-8 w-8 pt-1 text-center cursor-pointer border hover:border-pink-100 hover:bg-gray-700 hover:text-white">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="rounded-full h-8 w-8 pt-1 text-center cursor-pointer border hover:border-pink-100 hover:bg-gray-700 hover:text-white">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="flex gap-2 items-center rounded-full h-8  px-2 text-center cursor-pointer text-white border border-gray-700 bg-gray-800 hover:border-pink-700 hover:bg-pink-100 hover:text-gray-700">
                                <i class="fa-solid fa-user"></i>
                                <span class="text-xs font-light">
                                    Yassine
                                </span>
                            </div>
                        </div>
                    </div>              
                </div>

                <div class="flex-1 px-4 bg-gray-50">
                  content  
                </div>
                
            </div>
        </div>
        
    </div>
    <script>
        document.documentElement.style.setProperty("--vh", window.innerHeight * 0.01 + 'px');
    </script>
    <style>
        .h-screen {
            height: 100vh; /* Fallback for browsers that do not support Custom Properties */
            height: calc(var(--vh, 1vh) * 100);
        }
    </style>
</body>
</html>