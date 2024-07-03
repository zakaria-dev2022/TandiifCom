@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
Consulter Service 
@endsection
@section('title_principale')
Service
@endsection
@section('content')
<style>
    .employee-photo {
        position: absolute;
        top: 120px;
        right: 50px;
        max-width:190px;
        max-height: 130px;
        /* border: 1px solid black; */
        border-radius: 5%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="container mt-3" id="employee-info">
    <div class="card position-relative">
        <div class="card-header text-center d-flex align-items-center justify-content-between">
            <h4>Informations de <span class="text-info"> {{$service->type}} </span></h4>
            <a onclick="return confirm('Voulez-vous return au page préceedent ?');" href="{{route('services.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
        </div>
        <div class="card-body">
            <img src="{{asset($service->photo) }}" alt="Photo de l'employé" class="employee-photo">
            <p><span class="text-info fw-bold">Type:</span> {{ $service->type }}</p>
            <p><span class="text-info fw-bold">Prix: </span>{{ $service->prix }}</p>
            <p class="p-0 col-6"><span class="text-info fw-bold">Description:</span> {{ $service->description }}</p>
        </div>
    </div>
</div>
    
@endsection
