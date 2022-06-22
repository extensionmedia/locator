@extends('app')
@section('includes')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
@endsection

@section('content')
    <div class="container pb-4">
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

        <div class="lg:flex gap-4">
            <div class="bg-white rounded shadow-lg flex-1 py-4 px-4">
                <canvas id="myChart" class="w-full"></canvas>
            </div>
            <div class="bg-white rounded shadow-lg flex-1">
                
            </div>

        </div>
    </div>

    <script>
        const labels = [
          '01',
          '02',
          '03',
          '04',
          '05',
          '06',
          "08",
          "09",
          "10",
          "11",
          "12"
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: '2021',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [14500, 33456, 19000, 65000, 25000, 13450, 4500, 3456, 9000, 19000, 25000, 13450],
          },
          {
            label: '2022',
            backgroundColor: 'rgb(0, 99, 132)',
            borderColor: 'rgb(0, 99, 132)',
            data: [19500, 3456, 19000, 75000, 75000, 1450, 4500, 83456, 19000, 67000, 5000, 1450],
          }]
        };
      
        var _options = {
            borderRadius: 1,
            barPercentage: 1.5,
            barThickness: 8,
        };

        const config = {
          type: 'bar',
          data: data,
          options: _options,
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
      </script>

@endsection