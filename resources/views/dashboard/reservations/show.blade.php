@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')

@section('title')
    Consulter Réservation
@endsection

@section('title_principale')
    Réservation
@endsection

@section('content')

<div class="container mt-5">
    <div class="card position-relative">
        <div class="card-header text-center d-flex align-items-center justify-content-between">
            <h4>Informations de la réservation</h4>
            <a onclick="return confirm('Voulez-vous retourner à la page précédente ?');" href="{{ route('reservations.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        </div>
        <div class="card-body">
            <p><span class="text-info fw-bold">Nom:</span> {{ $reservation->nom }}</p>
            <p><span class="text-info fw-bold">Prénom:</span> {{ $reservation->prenom }}</p>
            <p><span class="text-info fw-bold">CIN:</span> {{ $reservation->cin }}</p>
            <p><span class="text-info fw-bold">Téléphone:</span> {{ $reservation->tel }}</p>
            <p><span class="text-info fw-bold">Adresse:</span> {{ $reservation->adresse }}</p>
            <p><span class="text-info fw-bold">Ville:</span> {{ $reservation->ville }}</p>
            <p><span class="text-info fw-bold">Email:</span> {{ $reservation->gmail }}</p>
            <p><span class="text-info fw-bold">Matricule Voiture:</span> {{ $reservation->matricule_voiture }}</p>
            <p><span class="text-info fw-bold">ID du Service:</span> {{ $reservation->service_id }}</p>
            <p><span class="text-info fw-bold">Date de Réservation:</span> {{ $reservation->date_reservation }}</p>
        </div>
    </div>
</div>

@endsection
