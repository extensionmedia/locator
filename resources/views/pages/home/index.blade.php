@extends('app')
@section('includes')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
@endsection

@section('content')
    <div class="mx-auto container pb-8">
        <div class="text-3xl">
            Dashboard
        </div>
        <p class="font-light text-sm text-gray-500">
            La page principale de l'application
        </p>

        <div class="lg:flex gap-8 w-full mt-4">
            @foreach ($marqees as $m)
                @include('pages.home.marqees.'.$m)
            @endforeach               

        </div>

        <div class="lg:flex gap-8 lg:mt-4 xl:mt-8 w-full overflow-hidden pb-4">
            <div class="bg-white rounded shadow-lg flex-1 overflow-hidden border border-pink-100 mb-4 lg:mb-0">
                <div class="bg-pink-100 py-2 px-2 text-pink-800 font-light flex justify-between">
                    Total des recettes par Mois
                    <button class="text-pink-500 hover:text-pink-800 mx-2">
                        <i class="fa-solid fa-rotate"></i>
                    </button>
                </div>
                <div class="py-4 px-4">
                    @include('pages.home.charts.bar_sum_by_month')
                </div>
            </div>

            <div class="bg-white rounded shadow-lg flex-1 overflow-hidden border border-gray-100">
                <div class="bg-gray-100 py-2 px-2 text-gray-800 font-light flex justify-between">
                    les dérniers activités
                    <button class="text-gray-500 hover:text-gray-800 mx-2">
                        <i class="fa-solid fa-rotate"></i>
                    </button>
                </div>
                @include('pages.home.activities', ['activities'=>$activities])
            </div>
        </div>
    </div>

@endsection