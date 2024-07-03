@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')

@section('title')
    Consulter Commentaire
@endsection

@section('title_principale')
    Commentaire
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center d-flex align-items-center justify-content-between">
            <h4>Informations du <span class="text-info">{{$commentaire->client->nom}} {{$commentaire->client->prenom}}</span></h4>
            <a onclick="return confirm('Voulez-vous revenir à la page précédente ?');" href="{{ route('commentaires.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        </div>
        <div class="card-body">
            <p><span class="text-info fw-bold">Nom & Prenom Client </span> {{ $commentaire->client->nom }} {{$commentaire->client->prenom}}</p>
            <p><span class="text-info fw-bold">Cin Client </span> {{ $commentaire->client->cin }}</p>
            <p><span class="text-info fw-bold">Gmail Client </span> {{ $commentaire->client->gmail }}</p>
            <p><span class="text-info fw-bold">Tel Client </span> {{ $commentaire->client->tel }}</p>
            <p><span class="text-info fw-bold">Ville Client </span> {{ $commentaire->client->ville }} </p>
            <p><span class="text-info fw-bold">Date Message </span> {{ $commentaire->client->created_at }} </p>
            <p><span class="text-info fw-bold">Message:</span> {{ $commentaire->message }}</p>
        </div>
    </div>
</div>
@endsection
