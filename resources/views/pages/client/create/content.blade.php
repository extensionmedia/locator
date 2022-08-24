<div class="h-full">
    <div class="w-full mb-4">
        <div class="flex justify-between items-center">
            @include('components.page_title', ['title'=>'Client', 'subTitle'=>'Ajouter un nouveau Client'])
            <div class="flex items-center gap-4">
                @include('components.buttons.btn_save')
            </div>
        </div>       
    </div>
@php
    $today = Carbon\Carbon::now()->toDateString()
@endphp
    <div class="lg:flex gap-4 mb-6">
        <div class="flex-1 bg-white rounded mb-6 lg:mb-0 py-4 px-4">
            @include('components.section.title', ['title'=>'Client Détails'])

            @include('components.inputs.text', ['label'=>'Nom Complet', 'id'=>'client_name', 'name'=>'client_name'])
            <div class="flex gap-4">
                <div class="flex-1">
                    @include('components.inputs.text', ['label'=>'Téléphone (1)', 'id'=>'client_telephone_1', 'name'=>'client_telephone_1'])
                </div>
                <div class="flex-1">
                    @include('components.inputs.text', ['label'=>'Téléphone (2)', 'id'=>'client_telephone_2', 'name'=>'client_telephone_2'])
                </div>
            </div>

            @include('components.inputs.age', ['label'=>'Date Naissance', 'id'=>'client_date_naissance ', 'name'=>'client_date_naissance ', 'value'=>$today])

            
            @include('components.inputs.email', ['label'=>'Email', 'id'=>'client_email ', 'name'=>'client_email'])

        </div>        
        <div class="lg:w-96 bg-white rounded py-4 px-4">

            @include('components.section.title', ['title'=>'Client Filtres'])

            <div class="form-select mb-4">
                <div class="text-sm font-light text-gray-500">client Status</div>
                <div class="inline-block relative w-full">

                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected>-- All</option>
                        @foreach ($client_statuses as $s)
                            <option @if ($s->is_default) selected @endif value="{{$s->id}}">{{$s->client_status}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>                
            </div>

            <div class="form-select mb-4">
                <div class="text-sm font-light text-gray-500">client Catégorie</div>
                <div class="inline-block relative w-full">

                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected>-- All</option>
                        @foreach ($client_categories as $c)
                            <option @if ($c->is_default) selected @endif value="{{$c->id}}">{{$c->client_category}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>                
            </div>

            <div class="form-select mb-4">
                <div class="text-sm font-light text-gray-500">client Type</div>
                <div class="inline-block relative w-full">

                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected>-- All</option>
                        @foreach ($client_types as $t)
                            <option @if ($t->is_default) selected @endif value="{{$t->id}}">{{$t->client_type}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>                
            </div>

        </div>        
    </div>


    <div class="bg-gray-200 lg:flex gap-4 justify-center items-center py-8 px-4 overflow-x-scroll">
        <div class="border-4 border-green-600 shadow relative mb-4">
            <img class="" src="{{asset('images/clients/cin.jpg')}}" alt="">
            <div class="bg-green-600 py-1 px-3 text-white text-xs absolute top-0 right-0 rounded -mt-4">
                Principale
            </div>
        </div>
        <div class="border-2 border-gray-600 shadow relative mb-4">
            <img class="" src="{{asset('images/clients/cin.jpg')}}" alt="">
        </div>
        <div class="border-2 border-gray-600 shadow relative mb-4">
            <img class="" src="{{asset('images/clients/cin.jpg')}}" alt="">
        </div>
    </div>
</div>