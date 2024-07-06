@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')

@section('title')
    Modifier Réservation
@endsection

@section('title_principale')
    Réservation
@endsection

@section('content')
<div class="card-body">
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <a onclick="return confirm('Voulez-vous annuler la modification de cette réservation ?');" href="{{ route('reservations.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button type="submit" class="btn btn-success btn-lg my-3">Modifier</button>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" value="{{ $reservation->nom }}" name="nom" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" value="{{ $reservation->prenom }}" name="prenom" placeholder="Prénom">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cin">CIN</label>
                <input type="text" class="form-control" value="{{ $reservation->cin }}" name="cin" placeholder="CIN">
            </div>
            <div class="form-group col-md-6">
                <label for="tel">Téléphone</label>
                <input type="text" class="form-control" value="{{ $reservation->tel }}" name="tel" placeholder="Téléphone">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" value="{{ $reservation->adresse }}" name="adresse" placeholder="Adresse">
            </div>
            <div class="form-group col-md-6">
                <label for="matricule_voiture">Matricule Voiture</label>
                <input type="text" class="form-control" value="{{ $reservation->matricule_voiture }}" name="matricule_voiture" placeholder="Matricule Voiture">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" value="{{ $reservation->ville }}" name="ville" placeholder="Ville">
            </div>
            <div class="form-group col-md-6">
                <label for="gmail">Email</label>
                <input type="email" class="form-control" value="{{ $reservation->gmail }}" name="gmail" placeholder="Email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="service_id">ID du Service</label>
                <input type="text" class="form-control" value="{{ $reservation->service_id }}" name="service_id" placeholder="ID du Service">
            </div>
            <div class="form-group col-md-6">
                <label for="date_reservation">Date de Réservation</label>
                <input type="date" class="form-control" value="{{ $reservation->date_reservation }}" name="date_reservation">
            </div>
        </div>

    </form>
</div>
@endsection
