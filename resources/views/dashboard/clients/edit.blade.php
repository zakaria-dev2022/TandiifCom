@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')

@section('title')
    Modifier Client
@endsection

@section('title_principale')
    Client
@endsection

@section('content')
<div class="card-body">
  <form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <a onclick="return confirm('Voulez-vous annuler la modification de ce client {{ $client->nom }} {{ $client->prenom }}?');" href="{{ route('clients.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
    <button class="btn btn-success btn-lg my-3">Modifier</button>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" value="{{ $client->nom }}" name="nom" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" value="{{ $client->prenom }}" name="prenom" placeholder="Prénom">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cin">CIN</label>
            <input type="text" class="form-control" value="{{ $client->cin }}" name="cin" placeholder="CIN">
        </div>
        <div class="form-group col-md-6">
            <label for="tel">Téléphone</label>
            <input type="text" class="form-control" value="{{ $client->tel }}" name="tel" placeholder="Téléphone">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" value="{{ $client->adresse }}" name="adresse" placeholder="Adresse">
        </div>
        <div class="form-group col-md-6">
            <label for="Matricule_Voiture">Matricule Voiture</label>
            <input type="text" class="form-control" value="{{ $client->Matricule_Voiture }}" name="Matricule_Voiture" placeholder="Matricule Voiture">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" value="{{ $client->ville }}" name="ville" placeholder="Ville">
        </div>
        <div class="form-group col-md-6">
            <label for="gmail">Email</label>
            <input type="email" class="form-control" value="{{ $client->gmail }}" name="gmail" placeholder="Email">
        </div>
    </div>
  </form>
</div>
@endsection
