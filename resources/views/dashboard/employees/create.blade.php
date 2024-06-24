@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
    Ajouter Employee
@endsection
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
                    <input type="text" class="form-control" name="tel" placeholder="Téléphone">
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
                    <label for="date_naissance">Date de Naissance</label>
                    <input type="date" class="form-control" name="date_naissance" placeholder="Date de Naissance">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="type_permis">Type de Permis</label>
                    {{-- <input type="text" class="form-control" name="type_permis" placeholder="Type de Permis"> --}}
                    <select name="type_permis" id="" class="form-control">
                      <option selected value="">Choisir type de permis </option>
                      <option  value="B">B</option>
                      <option  value="C1">C1</option>
                      <option  value="BE">BE</option>
                    </select>
                </div>
                {{-- <div class="form-group col-md-6">
                    <label for="voiture_id">Voiture</label>
                    <select name="voiture_id" id="" class="form-control">
                      <option selected value="">Choisir la voiture donner au client</option>
                      @foreach($voitures as $voiture)
                      <option value="{{$voiture->id}}">{{$voiture->marque}} {{$voiture->modele}}</option>
                      @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" id="voiture_id" placeholder="Voiture ID"> --}
                </div> --}}
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="copy_cin">Copie CIN</label>
                    <input type="file" class="form-control-file" name="copy_cin">
                </div>
                <div class="form-group col-md-4">
                    <label for="copy_permis">Copie Permis</label>
                    <input type="file" class="form-control-file" name="copy_permis">
                </div>
                <div class="form-group col-md-4">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control-file" name="photo">
                </div>
            </div>
            
            {{-- <button type="button" class="btn btn-secondary" onclick="history.back()">Précédent</button> --}}
        </form>
    </div>
@endsection
