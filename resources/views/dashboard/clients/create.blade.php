@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
    Ajouter Client
@endsection
{{-- @section('content')
<div class="container-fluid my-4">
    <table class="table text-center">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}
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
            <form action="{{route('clients.store')}}" method="post">
                @csrf
                <tr>
                  <td><input class="form-control text-center" type="text" name="nom" placeholder="Nom"></td>
                  <td><input class="form-control text-center" type="text" name="prenom" placeholder="Prenom"></td>
                  <td><input class="form-control text-center" type="text" name="cin" placeholder="Cin"></td>
                  <td><input class="form-control text-center" type="text" name="tel" placeholder="Tel"></td>
                  <td><input class="form-control text-center" type="text" name="adresse" placeholder="Adresse"></td>
                  <td><input class="form-control text-center" type="text" name="Matricule_Voiture" placeholder="Matricule Voiture"></td>
                  <td><input class="form-control text-center" type="text" name="ville" placeholder="Ville"></td>
                  <td><input class="form-control text-center col-12" type="email" name="gmail" placeholder="Gmail"></td>
                  {{-- <td><input class="form-control" type="text" name="nom" placeholder="nom"></td> --}
                  <td>
                    <button class="btn btn-info">Ajouter</button>
                      {{-- <a href="" class="btn btn-sm btn-info">C</a> --}
                  </td>
                </tr>
            </form>
              </tbody>
            </table>


</div>

@endsection --}}

@section('content')
<div class="card-body">
  <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
<a onclick="return confirm('Voulez-vous annuler l\'ajoute d\'un employee ?');" href="{{route('employees.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
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
                    <input type="text" class="form-control" name="matricule_voiture" placeholder="Matricule Voiture">
                </div>
            </div>
        </form>
    </div>
@endsection