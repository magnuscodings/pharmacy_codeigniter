<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>



    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/navigation') ?>">

            <img src="assets/image/icon.jpeg" style="width: 50px; height: 50px;">
            Pharmacy Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <img src="../admin/image/user.png" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50px; height: 50px;">
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Admin</a></li>
                <li><a class="dropdown-item" href="#">Email:</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/') ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <canvas id="myBarChart"></canvas>
          </div>
      </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<script>
var datasets = [{
                  label: 'Sales',
                  data: [120, 150, 180, 200, 170, 190, 220], // Data points
                  backgroundColor: 'rgba(255, 99, 132, 0.2)',
                  borderColor: 'rgba(255, 99, 132, 1)',
                  borderWidth: 1
              },
              {
                  label: 'Net Sales',
                  data: [110, 140, 170, 195, 160, 185, 210], // Data points
                  backgroundColor: 'rgba(54, 162, 235, 0.2)',
                  borderColor: 'rgba(54, 162, 235, 1)',
                  borderWidth: 1
              },
              {
                  label: 'Average Sales',
                  data: [130, 155, 175, 205, 165, 180, 225], // Data points
                  backgroundColor: 'rgba(255, 206, 86, 0.2)',
                  borderColor: 'rgba(255, 206, 86, 1)',
                  borderWidth: 1
              }
            ];









  // Wait for the DOM to be fully loaded
  document.addEventListener("DOMContentLoaded", function () {
      // Get the canvas element
      var ctx = document.getElementById('myBarChart').getContext('2d');
      
      // Create a new Chart instance
      var myBarChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], // X-axis labels
              datasets: datasets
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  });
</script>
