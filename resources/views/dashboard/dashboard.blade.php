@extends('dashboard._sidebar_dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    {{-- <div class="container mt-4"> --}}
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
    {{-- </div> --}}

@endsection