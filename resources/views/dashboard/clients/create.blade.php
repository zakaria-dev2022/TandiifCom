@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
    Ajouter Client
@endsection
@section('title_principale')
    Client
@endsection
@section('content')
<div class="card-body">
  <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
<a onclick="return confirm('Voulez-vous annuler l\'ajoute d\'un client ?');" href="{{route('clients.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
<button class="btn btn-primary btn-lg my-3">Ajouter</button>
          @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cin">CIN</label>
                    <input type="text" class="form-control" name="cin" placeholder="CIN">
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">Téléphone</label>
                    <input type="tel" class="form-control" name="tel" placeholder="Téléphone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" name="ville" placeholder="Ville">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gmail">Email</label>
                    <input type="email" class="form-control" name="gmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="matricule_voiture">Matricule Voiture</label>
                    <input type="text" class="form-control" name="matricule_Voiture" placeholder="Matricule Voiture">
                </div>
            </div>
        </form>
    </div>
@endsection