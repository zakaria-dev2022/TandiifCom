@extends('dashboard._sidebar_dashboard')
@section('title')
    Clients
@endsection
@section('title_principale')
    Client
@endsection
@section('content')
<div class="container-fluid my-4">
            
    <a href="{{ route('clients.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover  text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Cin</th>
            <th scope="col">Tel</th>  
            <th scope="col">Adresse</th> 
            <th scope="col">Matricule Voiture</th>
            <th scope="col">Ville</th>  
            <th scope="col">Gmail</th> 
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
          <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->nom}}</td>
            <td>{{$client->prenom}}</td>
            <td>{{$client->cin}}</td>
            <td>{{$client->tel}}</td>
            <td>{{$client->adresse}}</td>
            <td>{{$client->Matricule_Voiture}}</td>
            <td>{{$client->ville}}</td>
            <td>{{$client->gmail}}</td>
            <td>
                <a href="{{route('clients.show',$client->id)}}" class="btn btn-sm btn-info">C</a>
                <a href="{{route('clients.edit',$client->id)}}" class="btn btn-sm btn-warning">M</a>
                <form class="d-inline" action="{{route('clients.destroy',$client->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button  onclick="return confirm('Voulez-vous supprimer le client {{$client->nom }} {{$client->prenom }}?');" class="btn btn-sm btn-danger">S</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection