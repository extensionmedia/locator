<div class="h-full">
    <div class="w-full">
        <div class="flex justify-between items-center">
            @include('components.page_title', ['title'=>'Client', 'subTitle'=>'Gestion des Clients'])
            <div class="flex items-center gap-4">
                @include('components.buttons.btn_print')
                @include('components.buttons.btn_add', ['route'=>route('client.create'), 'content'=>'client.create'])
            </div>
        </div>
        <div class="md:flex items-center justify-between gap-4 mt-6 mb-4">
            <div class="relative mb-4 md:mb-0">
                <input placeholder="Chercher..." type="text" name="request" class="placeholder:text-xs block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <a href="" class="absolute top-0 right-0 mt-2 mr-3 text-gray-500 hover:text-gray-700">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="flex gap-4">
                <div class="inline-block relative flex-1">
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option selected>-- All</option>
                    @foreach ($clientCategories as $c)
                        <option value="{{$c->id}}">{{$c->client_category}}</option>
                    @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="inline-block relative flex-1">
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected>-- All</option>
                        @foreach ($clientStatuses as $s)
                            <option value="{{$s->id}}">{{$s->client_status}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="inline-block relative flex-1">
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option selected>-- Filters</option>
                    <option>Filter 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>       
            </div>
        </div>        
    </div>
    <div class="bg-white shadow-md rounded my-6 pb-6 relative">

        <table class="min-w-max w-full table-auto whitespace-nowrap">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-20 hidden md:table-cell">Img</th>
                    <th class="py-3 text-left pl-4">Client</th>
                    <th class="py-3 text-left hidden md:table-cell">Téléphone</th>
                    <th class="py-3 text-center hidden lg:table-cell">Ville</th>
                    <th class="py-3 hidden lg:table-cell">Status</th>
                    <th class="py-3 text-right pr-2">Locations</th>
                    <th class="py-3 text-right pr-2 hidden md:table-cell">Crédit</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="border-b hover:bg-gray-100 text-xs" style="transition: all .3s">
                        <td class="py-1 hidden md:table-cell" style="min-width: 60px">
                            <img class="object-cover w-10 h-10 rounded-full mx-auto" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200">
                        </td>
                        <td class="pl-4 py-2">
                            {{$client->client_name}}
                        </td>
                        <td class="w-28  hidden md:table-cell">
                            {{$client->client_telephone_1}}
                        </td>
                        <td class="w-28 text-center hidden lg:table-cell">
                            {{$client->client_city}}
                        </td>
                        <td class="w-28 text-center hidden lg:table-cell">
                            status
                        </td>
                        <td class="w-24 text-right text-xs font-bold text-orange-400 pr-2"> {{ number_format(12400, 2) }} </td>
                        <td class="w-24 text-right text-xs font-bold text-pink-600 pr-2 hidden md:table-cell ">{{ number_format(10000, 2) }} </td>
                        <td class="w-14 text-center">
                            <form class="m-0" method="POST" action="">
                                @csrf()
                                <button type="submit" class="btn"><i class="fas fa-ellipsis-h"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
