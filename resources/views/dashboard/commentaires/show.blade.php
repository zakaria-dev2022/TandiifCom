@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
    Consulter le commentaire de "<span class="text-info"> {{$commentaire->client->nom ." ". $commentaire->client->prenom}} </span>"
@endsection
@section('content')
    <div class="container row d-flex justify-content-center mt-5">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->nom}}" type="text" name="nom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->prenom}}" type="text" name="prenom">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->cin}}" type="text" name="cin">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->tel}}" type="text" name="tel">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->adresse}}" type="text" name="adresse">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->Matricule_Voiture}}" type="text" name="Matricule_Voiture">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->ville}}" type="text" name="ville">
<input class="form-control col-3 col-md-4 m-3 text-center" readonly value="{{$commentaire->client->gmail}}" type="text" name="gmail">
<textarea class="form-control" name="message" id="" cols="30" rows="2" readonly>{{$commentaire->message}}</textarea>
    </div>
@endsection