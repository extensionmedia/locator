@extends('app')
@section('includes')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
@endsection

@section('content')
    <div class="mx-auto container pb-4">
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

        <div class="lg:flex gap-4 mt-4 w-full overflow-hidden">
            <div class="bg-white rounded shadow-lg flex-1 py-4 px-4">

            </div>
            <div class="bg-white rounded shadow-lg flex-1 py-4 px-4">
               @include('pages.home.charts.bar_sum_by_month')
            </div>

        </div>
    </div>

@endsection