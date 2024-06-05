<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/app.css">
       
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            {{-- <h2 class="p-4 ">Car Wash</h2> --}}
              <img class="im" src="../resources/img/1.png" alt="">
            <div class="liens">
            <a href="#">Dashboard</a>
            <a href="#">UI Elements</a>
            <a href="#">Form Elements</a>
            <a href="#">Charts</a>
            <a href="#">Tables</a>
            <a href="#">Icons</a>
            <a href="#">User Pages</a>
            <a href="#">Documentation</a>
          </div>
        </div>
        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Car Wash Dashboard</a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search now" aria-label="Search">
                </form>
                <div>
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Report</button>
                </div>
            </nav>

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">SALES</h5>
                                <p class="card-text">34040</p>
                                <p class="card-text"><small>0.12% (30 days)</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-secondary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">REVENUE</h5>
                                <p class="card-text">47033</p>
                                <p class="card-text"><small>0.47% (30 days)</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">DOWNLOADS</h5>
                                <p class="card-text">40016</p>
                                <p class="card-text"><small>64.00% (30 days)</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title">RETURNS</h5>
                                <p class="card-text">61344</p>
                                <p class="card-text"><small>23.00% (30 days)</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">SALES DETAILS</h5>
                                <p class="card-text">Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to oh. On relation my so addition branched.</p>
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">PURCHASES</h5>
                                <p class="card-text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
                                <canvas id="purchasesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const purchasesCtx = document.getElementById('purchasesChart').getContext('2d');

        const salesChart = new Chart(salesCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [
                    {
                        label: 'Offline Sales',
                        data: [12000, 15000, 20000, 22000, 18000],
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    },
                    {
                        label: 'Online Sales',
                        data: [14000, 13000, 24000, 20000, 16000],
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const purchasesChart = new Chart(purchasesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Purchases',
                    data: [362, 187, 524, 509, 400],
                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
