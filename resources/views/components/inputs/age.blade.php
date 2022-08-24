<div class="age-container form-select mb-4 border border-green-200 p-1 -m-1 bg-green-50">
    <div class="flex justify-between mb-1">
        <div class="text-sm font-light text-gray-500">{{$label}}</div>
        <div class="flex gap-4">
            <div class="age font-light px-3 rounded text-green-600 bg-green-200 text-sm">

            </div>
        </div>
    </div>
    <input value="{{$value}}" id="{{$id}}" name="{{$name}}" type="date" class="input-age form-input appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
</div>
<script>
    $(document).ready(function(){
        $('.input-age').on('change', function(){
            var dob = $(this).val()
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(age < 18){
                $('.age-container').removeClass('bg-green-50 border-green-200').addClass('bg-pink-50 border-pink-200')
                $('.age').removeClass('text-green-600 bg-green-200').addClass('text-pink-600 bg-pink-200')
            }else{
                $('.age-container').removeClass('bg-pink-50 border-pink-200').addClass('bg-green-50 border-green-200')
                $('.age').removeClass('text-pink-600 bg-pink-200').addClass('text-green-600 bg-green-200')
            }
            $('.age').html('Age : '+age+' ans');
        })
    })
</script>