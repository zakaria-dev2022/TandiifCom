@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
Consulter Employee
@endsection
@section('title_principale')
Employee
@endsection

@section('content')
<style>
    .employee-photo {
        position: absolute;
        top: 120px;
        right: 50px;
        max-width:180px;
        height: 190px;
        /* border: 1px solid black; */
        border-radius: 5%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .document-photo {
            width: 230px;
            height: 120px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
</style>
<div class="container mt-3" id="employee-info">
    <div class="card position-relative">
        <div class="card-header text-center d-flex align-items-center justify-content-between">
            <h4>Informations de <span class="text-info"> {{$employee->nom ." ". $employee->prenom}} </span></h4>
            <a onclick="return confirm('Voulez-vous return au page préceedent ?');" href="{{route('employees.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
        </div>
        <div class="card-body">
            <img src="{{asset($employee->photo) }}" alt="Photo de l'employé" class="employee-photo">
            <p><span class="text-info fw-bold">Nom:</span> {{ $employee->nom }}</p>
            <p><span class="text-info fw-bold">Prénom: </span>{{ $employee->prenom }}</p>
            <p><span class="text-info fw-bold">CIN:</span> {{ $employee->cin }}</p>
            <p><span class="text-info fw-bold">Téléphone:</span> {{ $employee->tel }}</p>
            <p><span class="text-info fw-bold">Adresse:</span> {{ $employee->adresse }}</p>
            <p><span class="text-info fw-bold">Ville:</span> {{ $employee->ville }}</p>
            <p><span class="text-info fw-bold">Email:</span> {{ $employee->gmail }}</p>
            <p><span class="text-info fw-bold">Date de Naissance:</span> {{ $employee->date_naissance }}</p>
            <p><span class="text-info fw-bold">Type de Permis:</span> {{ $employee->type_permis }}</p>
        <div class="col-12 d-flex justify-content-around">
            <p><span class="text-info fw-bold">Copie CIN:</span> </p>
            <p><span class="text-info fw-bold">Copie Permis:</span> </p>
        </div>
        <div class="col-12 d-flex justify-content-around">
        <img src="{{asset($employee->copy_cin)}}" alt="Copie CIN" class="document-photo">
        <img src="{{asset($employee->copy_permis)}}" alt="Copie Permis" class="document-photo">
        </div>
        </div>
    </div>
</div>
    
@endsection
