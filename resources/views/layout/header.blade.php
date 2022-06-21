<div class="h-full border-b flex justify-between items-center px-4">
    <div class="">
        @isset($icon) {!!$icon!!} @endisset
        <span class="font-light">
            @isset($title) {{$title}} @endisset
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