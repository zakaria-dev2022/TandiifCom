@extends('dashboard._sidebar_dashboard')
@section('title')
    Demande
@endsection
@section('title_principale')
Demande Emploie
@endsection
@section('content')
<div class="container-fluid my-4">
            
    {{-- <a href="{{ route('demandes.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a> --}}
    <table class="table table-hover  text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Cin</th>
            <th scope="col">Tel</th>  
            {{-- <th scope="col">Adresse</th>  --}}
            <th scope="col">Ville</th>  
            <th scope="col">Gmail</th> 
            <th scope="col">Date Naissance</th> 
            <th scope="col">Type Permis</th> 
            <th scope="col">Copy Cin</th> 
            <th scope="col">Copy Permis</th> 
            {{-- <th scope="col">Matricule Voiture</th> --}}
            <th scope="col">Photo</th> 
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($demandes as $demande)
          <tr>
            <th scope="row">{{$demande->id}}</th>
            <td>{{$demande->nom}}</td>
            <td>{{$demande->prenom}}</td>
            <td>{{$demande->cin}}</td>
            <td>{{$demande->tel}}</td>
            {{-- <td>{{$demande->adresse}}</td> --}}
            <td>{{$demande->ville}}</td>
            <td>{{$demande->gmail}}</td>
            <td>{{$demande->date_naissance}}</td>
            <td>{{$demande->type_permis}}</td>
            <td><img src="{{$demande->copy_cin}}" alt="" width="80px" height="70px"></td>
            <td><img src="{{$demande->copy_permis}}" alt="" width="80px" height="70px"></td>
            {{-- <td>{{$demande->voiture->marque}}</td> --}}
            <td><img src="{{$demande->photo}}" alt="" width="80px" height="70px"></td>
            <td > 
              <a href="{{route('demandes.show',$demande->id)}}" class="btn btn-sm btn-info px-3">C</a>
              {{-- <a href="{{route('demandes.edit',$demande->id)}}" class="btn btn-sm btn-warning px-3 my-2">M</a> --}}
              <form class="d-" action="{{route('demandes.destroy',$demande->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button  onclick="return confirm('Voulez-vous supprimer le demande {{$demande->nom }} {{$demande->prenom }}?');" class="btn btn-sm btn-danger px-3">S</button>
              </form>
          </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
@endsection