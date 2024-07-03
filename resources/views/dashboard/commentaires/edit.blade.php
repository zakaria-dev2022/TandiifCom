@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')
@section('title')
Modifier Commentaire 
@endsection
@section('title_principale')
commentaire
@endsection
@section('content')
<div class="container-fluid my-4">
    <table class="table text-center">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Gmail Client</th>
            <th scope="col">message</th>
            {{-- <th scope="col">Cin</th>
            <th scope="col">Tel</th>  
            <th scope="col">Adresse</th> 
            <th scope="col">Matricule Voiture</th>
            <th scope="col">Ville</th>  
            <th scope="col">Gmail</th>  --}}
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody>
            <form action="{{route('commentaires.update',$commentaire->id)}}" method="post">
                @method('PUT')
                @csrf
                <tr>
                  <input class="form-control text-center" type="hidden" value="{{$commentaire->id}}" name="id" placeholder="">
                  <input class="form-control text-center" type="hidden" value="{{$commentaire->client->id}}" name="client-id" placeholder="">
                  <td><input class="form-control text-center" type="text" readonly value="{{$commentaire->client->gmail}}" name="" placeholder="Nom"></td>
                  <td><input class="form-control text-center" type="text" value="{{$commentaire->message}}" name="message" placeholder="Prenom"></td>
                  {{-- <td><input class="form-control text-center" type="text" value="{{$client->cin}}" name="cin" placeholder="Cin"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->tel}}" name="tel" placeholder="Tel"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->adresse}}" name="adresse" placeholder="Adresse"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->Matricule_Voiture}}" name="Matricule_Voiture" placeholder="Matricule Voiture"></td>
                  <td><input class="form-control text-center" type="text" value="{{$client->ville}}" name="ville" placeholder="Ville"></td>
                  <td><input class="form-control text-center col-12" type="email" value="{{$client->gmail}}" name="gmail" placeholder="Gmail"></td> --}}
                  {{-- <td><input class="form-control" type="text" name="nom" placeholder="nom"></td> --}}
                  <td>
                    <button class="btn btn-info">Modifier</button>
                    <a href="{{route('commentaires.index')}}" class="btn btn-danger">Annuler</a>
                      {{-- <a href="" class="btn btn-sm btn-info">C</a> --}}
                  </td>
                </tr>
            </form>
              </tbody>
            </table>


</div>
@endsection