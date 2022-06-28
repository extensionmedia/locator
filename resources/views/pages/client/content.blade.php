<div class="flex justify-between items-center">
    @include('components.page_title', ['title'=>'Client', 'subTitle'=>'Gestion des Clients'])
    <div class="flex items-center gap-4">
        @include('components.buttons.btn_print')
        @include('components.buttons.btn_add')
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
            <option selected>-- Filters</option>
            <option>Filter 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
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