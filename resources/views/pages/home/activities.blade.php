<div class="px-3 py-4 mb-4 hoverflow-y-auto">
    <div class="">
        @foreach ($activities as $activity)

            <div class="flex items-center mb-3">
                <div class="w-10 test hidden lg:flex">
                    <img 
                        class="object-cover w-8 h-8 rounded-full cursor-pointer" 
                        src="{{ $activity['profile_photo_path'] }}"
                    > 
                </div>
                <div class="bg-gray-50 flex-1 px-4 py-2 rounded-lg shadow relative cursor-pointer hover:shadow-lg border border-gray-200
                       transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-100
                ">
                    <div class="flex justify-between items-center mb-1">
                        <div class="font-bold text-xs">
                            {{ $activity['name'] }}
                        </div>
                        <div class="text-xs text-orange-400" style="font-size:10px">
                            {{ $activity['created_at'] }} PM
                        </div>
                    </div>
                    <div class="font-light text-gray-400 text-xs break-words">
                        <p>{{ $activity['activity'] }}</p>
                    </div>

                </div>
            </div>
        @endforeach
        <div class="my-4 text-gray-600 text-center text-xs font-bold">
            20 November
        </div>
    </div>
</div>