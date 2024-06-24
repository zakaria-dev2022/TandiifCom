@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')
@section('title')
    Modifier le client "<span class="text-info"> {{$client->nom ." ". $client->prenom}} </span>"
@endsection
@section('content')
<div class="container-fluid my-4">
    <table class="table text-center">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
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
            <form action="{{route('clients.update',$client->id)}}" method="post">
                @method('PUT')
                @csrf
                <tr>
                  <input class="form-control text-center" type="hidden" value="{{$client->id}}" name="id" placeholder="">
                  <td><input class="form-control text-center" type="text" value="{{$client->nom}}" name="nom" placeholder="Nom"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->prenom}}" name="prenom" placeholder="Prenom"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->cin}}" name="cin" placeholder="Cin"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->tel}}" name="tel" placeholder="Tel"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->adresse}}" name="adresse" placeholder="Adresse"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->Matricule_Voiture}}" name="Matricule_Voiture" placeholder="Matricule Voiture"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->ville}}" name="ville" placeholder="Ville"></td>
                  <td><input class="form-control text-center col-12" type="email" value="{{$client->gmail}}" name="gmail" placeholder="Gmail"></td>
                  {{-- <td><input class="form-control" type="text" name="nom" placeholder="nom"></td> --}}
                  <td>
                    <button class="btn btn-info">Modifier</button>
                      {{-- <a href="" class="btn btn-sm btn-info">C</a> --}}
                  </td>
                </tr>
            </form>
              </tbody>
            </table>


</div>
@endsection