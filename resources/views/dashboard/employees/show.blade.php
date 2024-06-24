@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
Consulter l'employee "<span class="text-info"> {{$employee->nom ." ". $employee->prenom}} </span>"
@endsection
@section('content')

{{-- <div class="container mt-5" id="employee-info">
    <div class="card">
        <div class="card-header">
            <h4>Informations sur l'employé</h4>
        </div>
        <div class="card-body">
            <p>Nom:< {{ $employee['nom'] }}</p>
            <p>Prénom:< {{ $employee['prenom'] }}</p>
            <p>CIN:< {{ $employee['cin'] }}</p>
            <p>Téléphone:< {{ $employee['tel'] }}</p>
            <p>Adresse:< {{ $employee['adresse'] }}</p>
            <p>Ville:< {{ $employee['ville'] }}</p>
            <p>Email:< {{ $employee['gmail'] }}</p>
            <p>Date de Naissance:< {{ $employee['date_naissance'] }}</p>
            <p>Type de Permis:< {{ $employee['type_permis'] }}</p>
            <p>Voiture:< {{ $employee['voiture_id'] }}</p>
            <p>Copie CIN:< <img src="{{ $employee['copy_cin'] }}" alt="Copie CIN" style="max-width: 100px;"></p>
            <p>Copie Permis:< <img src="{{ $employee['copy_permis'] }}" alt="Copie Permis" style="max-width: 100px;"></p>
            <p>Photo:< <img src="{{ $employee['photo'] }}" alt="Photo de l'employé" style="position: absolute;top: 20px;left: 20px;max-width: 100px;"></p>
        </div>
    </div>
</div>
@endsection --}}
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
