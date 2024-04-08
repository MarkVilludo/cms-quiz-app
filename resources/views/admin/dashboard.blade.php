@extends('admin.app')
@section('content')
  
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Graph Statistic</h3>
        </div>
        <div class="card-body">
          <canvas id="barChart"></canvas>
        </div>
      </div>
      </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('barChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4'],
      datasets: [{
        label: 'Statistic for Quiz App',
        data: [10, 20, 30, 40],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'gray',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 0.2)',
          'green',
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

@endsection