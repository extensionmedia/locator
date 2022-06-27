
<canvas id="bar_sum_by_month" class="w-full"></canvas>

<script id="test">
    console.log('data-------------------')
    var chartData = {
        labels: [
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
        ],
      datasets: [{
        label: '2021',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [14500, 33456, 19000, 65000, 25000, 13450, 18500, 23456, 9000, 19000, 25000, 13450],
      },
      {
        label: '2022',
        backgroundColor: 'rgb(0, 99, 132)',
        borderColor: 'rgb(0, 99, 132)',
        data: [19500, 31456, 11000, 75000, 75000, 14050, 10500, 83456, 11000, 17000, 16000, 14500],
      }]
    };


    var config = {
        responsive: true,
        maintainAspectRatio: true,
        type: "bar",
        data: chartData, 
        options:{
            borderRadius: 1,
            barPercentage: 1.5,
            barThickness: 8,
            scales: {
                y: {
                    display: false
                }
            },
      }
    };

    var myChart = new Chart(
        document.getElementById('bar_sum_by_month'),
        config
    );
</script>