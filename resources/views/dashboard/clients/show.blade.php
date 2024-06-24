@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
Consulter le client "<span class="text-info"> {{$client->nom ." ". $client->prenom}} </span>"
@endsection
@section('content')
    {{-- <div class="container row d-flex justify-content-center mt-5">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->nom}}" type="text" name="nom" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->prenom}}" type="text" name="prenom" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->cin}}" type="text" name="cin" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->tel}}" type="text" name="tel" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->adresse}}" type="text" name="adresse" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->Matricule_Voiture}}" type="text" name="Matricule_Voiture" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->ville}}" type="text" name="ville" placeholder="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$client->gmail}}" type="text" name="gmail" placeholder="nom">

    </div> --}}


    {{-- <div class="card-body">
        <a href="{{route('employees.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
        <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control"   value="{{$client->nom}}" name="nom" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control"   value="{{$client->prenom}}" name="prenom" placeholder="Prénom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cin">CIN</label>
                    <input type="text" class="form-control"   value="{{$client->cin}}" name="cin" placeholder="CIN">
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control"   value="{{$client->tel}}" name="tel" placeholder="Téléphone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control"   value="{{$client->adresse}}" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control"   value="{{$client->ville}}" name="ville" placeholder="Ville">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gmail">Email</label>
                    <input type="email" class="form-control " value="{{$client->gmail}}"  name="gmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="date_naissance">Matricule Voiture</label>
                    <input type="text" class="form-control" name="matricule_voiture" value="{{$client->Matricule_Voiture}}" placeholder="Date de Naissance">
                </div>
            </div>
            <button class="btn btn-primary btn-lg my-3">Ajouter</button>
            {{-- <button type="button" class="btn btn-secondary" onclick="history.back()">Précédent</button> --}
        </form>
    </div> --}}
  
<div class="container mt-5" >
    <div class="card position-relative">
        <div class="card-header text-center d-flex align-items-center justify-content-between">
            <h4>Informations de <span class="text-info"> {{$client->nom ." ". $client->prenom}} </span></h4>
            <a onclick="return confirm('Voulez-vous return au page préceedent ?');" href="{{route('clients.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
        </div>
        <div class="card-body">
            <p><span class="text-info fw-bold">Nom:</span> {{ $client->nom }}</p>
            <p><span class="text-info fw-bold">Prénom: </span>{{ $client->prenom }}</p>
            <p><span class="text-info fw-bold">CIN:</span> {{ $client->cin }}</p>
            <p><span class="text-info fw-bold">Téléphone:</span> {{ $client->tel }}</p>
            <p><span class="text-info fw-bold">Adresse:</span> {{ $client->adresse }}</p>
            <p><span class="text-info fw-bold">Ville:</span> {{ $client->ville }}</p>
            <p><span class="text-info fw-bold">Email:</span> {{ $client->gmail }}</p>
            {{-- <a onclick="return confirm('Voulez-vous return au page préceedent ?');" href="{{route('clients.index')}}" class="btn btn-secondary bt my-3">Précedent </a> --}}
        </div>
    </div>
</div>
    

@endsection