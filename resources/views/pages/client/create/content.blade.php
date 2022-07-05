<div class="h-full">
    <div class="w-full mb-4">
        <div class="flex justify-between items-center">
            @include('components.page_title', ['title'=>'Client', 'subTitle'=>'Ajouter un nouveau Client'])
            <div class="flex items-center gap-4">
                @include('components.buttons.btn_save')
            </div>
        </div>       
    </div>

    <div class="bg-gray-200 flex gap-4 justify-center items-center h-48 py-8 px-4 overflow-x-scroll">
        <div class="h-full border-4 border-green-600 shadow relative">
            <img class="h-full" src="{{asset('images/clients/cin.jpg')}}" alt="">
            <div class="bg-green-600 py-1 px-3 text-white text-xs absolute top-0 right-0 rounded -mt-4">
                Principale
            </div>
        </div>
        <div class="bg-contain bg-center h-full w-52  border border-red-600 bg-no-repeat" style="background-image: url({{asset('images/clients/cin.jpg')}})"></div>
        <div class="bg-contain bg-center h-full w-52  border border-red-600 bg-no-repeat" style="background-image: url({{asset('images/clients/permis.jpg')}})"></div>
        <div class="bg-contain bg-center h-full w-52  border border-red-600 bg-no-repeat" style="background-image: url({{asset('images/clients/cin2.jpg')}})"></div>
    </div>
</div>