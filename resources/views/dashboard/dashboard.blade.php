@extends('dashboard._sidebar_dashboard')
@section('title')
    Dashboard
@endsection
@section('title_principale')
    Dashboard
@endsection
@section('logo')
<img class="im" src="../resources/img/TandiifCom.png" alt="">
@endsection
@section('content')
    {{-- <div class="container mt-4"> --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Demande Emploie</h5>
                        <p class="card-text">{{$demandes}}</p>
                        <p class="card-text"><small>0.12% (30 days)</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Clients</h5>
                        <p class="card-text">{{$clients}}</p>
                        <p class="card-text"><small>0.47% (30 days)</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Employees</h5>
                        <p class="card-text">{{$employees}}</p>
                        <p class="card-text"><small>64.00% (30 days)</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Reservation</h5>
                        <p class="card-text">{{$reservations}}</p>
                        <p class="card-text"><small>0.04% (30 days)</small></p>
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
    {{-- </div> --}}

@endsection