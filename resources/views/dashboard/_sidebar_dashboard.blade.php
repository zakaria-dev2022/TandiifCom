<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../resources/css/app.css"> --}}
    <link rel="stylesheet" href="../resources/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
       
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            {{-- <h2 class="p-4 ">Car Wash</h2> --}}
              <img class="im" src="../resources/img/logoCarWash.png" alt="">
            <div class="liens">
                <div class="nav-links">
                    <a href="{{url('dashboard')}}" class="dashboard">Dashboard</a>
                    <a href="{{url('dashboard.employees')}}" class="employees">Employees</a>
                    <a href="{{url('dashboard.clients')}}" class="clients">Clients</a>
                    <a href="{{url('dashboard.reservations')}}" class="reservations">Reservations</a>
                    <a href="{{url('dashboard.tachs')}}" class="tasks">Taches</a>
                    <a href="{{url('dashboard.services')}}" class="services">Services</a>
                    <a href="{{url('dashboard.commentaires')}}" class="commentaire">Commentaire</a>
                    <a href="{{url('dashboard.parametre')}}" class="parametre">Paramétre</a>
                </div>
            {{-- <a href="#">Dashboard</a>
            <a href="#">Employees</a>
            <a href="#">Clients</a>
            <a href="#">Reservations</a>
            <a href="#">Tachs</a>
            <a href="#">Services</a>
            <a href="#">Commentaire</a>
            <a href="#">Paramétre</a> --}}
          </div>
        </div>
        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">@yield('title')</a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search now" aria-label="Search">
                </form>
                <div>
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Report</button>
                </div>
            </nav>
            <div class="container mt-4">
        @yield('content')
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
