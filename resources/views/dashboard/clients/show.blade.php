@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
Consulter Client 
@endsection
@section('title_principale')
    Client
@endsection
@section('content')
    
  
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