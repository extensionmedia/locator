<div class="form-select mb-4">
    <div class="flex justify-between mb-1">
        <div class="text-sm font-light text-gray-500">{{$label}}</div>
        <div class="flex gap-4">
            <div class="font-light text-green-600 px-3 rounded bg-green-200 text-sm">
                Age : 34 ans
            </div>
            <div class="font-light text-pink-600 px-3 rounded bg-pink-200 text-sm">
                Age : 17 ans
            </div>
        </div>
    </div>
    <input value="{{$value}}" id="{{$id}}" name="{{$name}}" type="date" class="form-input appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
</div>