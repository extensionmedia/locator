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

    <div class="w-screen h-screen flex gap-8 bg-red-500 overflow-hidden">
        <div class="w-72 bg-yellow-500 shrink-0">
            menu
        </div>
        <div class="bg-blue-500 w-full h-full overflow-auto">
            <div class="overflow-auto">
                <div class="w-96 h-[15485px] border overflow-auto">
                    content
                </div>
            </div>
        </div>

    </div>

</body>
</html>