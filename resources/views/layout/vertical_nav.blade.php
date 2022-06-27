<?php
$links = [
    ['<i class="fas fa-home"></i>', 'Dashboard', route("home"), "home"],
    ['<i class="fas fa-hourglass-half"></i>', 'Locations', route("rent"), "rent"],
    ['<i class="far fa-address-card"></i>', 'Clients', route("home"), "client"],
    ['<i class="fas fa-car-alt"></i>', 'Park Auto', route("home"), "car"],
    ['<i class="fas fa-cash-register"></i>', 'Depenses', route("home"), "expense"],
    ['<i class="fas fa-donate"></i>', 'Finances', route("home"), "finance"],
    ['<i class="fas fa-user-friends"></i>', 'Utilisateurs', route("home"), "user"]
]
?>
<div class="flex flex-col justify-between pb-4 h-full px-2 lg:px-0">
    <div class="flex items-center lg:px-4 h-16 border-b border-gray-600">
        <img class="lg:h-8 lg:mr-2" src="{{ asset('images/locator-icon-96x96.png') }}">
        <div class="font-bold text-white text-lg hidden lg:block">
            {{ config('app.name') }}
        </div>
        <div class="text-xs text-gray-400 ml-2 -mt-2 hidden lg:block">beta</div>
    </div>
    <div class="flex-1 overflow-y-auto lg:px-4 myscroll">
        <ul class="text-gray-200 mt-2">
            @foreach ($links as $l)
                <li>
                    <a data-content="<?= $l[3] ?>" href="<?= $l[2] ?>" class="navigation @if(Route::currentRouteName() == $l[3]) bg-gray-600  @endif flex items-center hover:bg-gray-600 cursor-pointer py-2 lg:px-2 lg:-mx-2 rounded-md mb-2 lg:mb-1" data-url="<?= $l[2] ?>">                    
                        <div class="w-full text-xl lg:text-base lg:w-6 text-center lg:text-left"><?= $l[0] ?></div>
                        <div class="flex-1 text-sm hidden lg:block"><?= $l[1] ?></div>
                    </a>
                </li>            
            @endforeach
        </ul>
    </div>
    <div class="lg:px-4">
        <ul class="text-gray-200">
            <li>
                <a href="{{route('home')}}" class="navigation flex items-center hover:bg-gray-600 cursor-pointer py-2 lg:px-2 lg:-mx-2 rounded-md mb-2 lg:mb-1" data-url="{{route('home')}}">
                    <div class="w-full text-xl lg:text-base lg:w-6 text-center lg:text-left"><i class="fas fa-cogs"></i></div>
                    <div class="flex-1 text-sm hidden lg:block">{{ __('Paramêtres') }}</div>
                </a>
            </li>
            <li>
                <a href="{{route('home')}}" class="navigation flex items-center hover:bg-gray-600 cursor-pointer py-2 lg:px-2 lg:-mx-2 rounded-md mb-2 lg:mb-1" data-url="{{route('home')}}">
                    <div class="w-full text-xl lg:text-base lg:w-6 text-center lg:text-left"><i class="far fa-question-circle"></i></div>
                    <div class="flex-1 text-sm hidden lg:block">{{ __('Support') }} </div>
                </a>
            </li>
        </ul>
    </div>


</div>
