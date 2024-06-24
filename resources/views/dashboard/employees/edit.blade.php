@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')
@section('title')
    Edit Employees
@endsection
@section('content')
<div class="card-body">
  <form action="{{route('employees.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<a onclick="return confirm('Voulez-vous annuler la modification de employee {{ $employee->nom }} {{ $employee->prenom }}?');" href="{{route('employees.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
<button class="btn btn-success btn-lg my-3">Modifier</button>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" value="{{ $employee->nom }}" name="nom" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" value="{{ $employee->prenom }}" name="prenom" placeholder="Prénom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cin">CIN</label>
                    <input type="text" class="form-control" value="{{ $employee->cin }}" name="cin" placeholder="CIN">
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" value="{{ $employee->tel }}" name="tel" placeholder="Téléphone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" value="{{ $employee->adresse }}" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" value="{{ $employee->ville }}" name="ville" placeholder="Ville">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gmail">Email</label>
                    <input type="email" class="form-control" value="{{ $employee->gmail }}" name="gmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="date_naissance">Date de Naissance</label>
                    <input type="date" class="form-control" value="{{ $employee->date_naissance }}" name="date_naissance" placeholder="Date de Naissance">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="type_permis">Type de Permis</label>
                    <select name="type_permis" id="" class="form-control">
                        
                      <option {{($employee->type_permis==='B')? "selected":""}}  value="B">B</option>
                      <option {{($employee->type_permis==='C1')? "selected":""}}  value="C1">C1</option>
                      <option {{($employee->type_permis==='BE')? "selected":""}}  value="BE">BE</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="copy_cin">Copie CIN</label>
                    <input type="file" value="{{ $employee->copy_cin }}" class="form-control-file" name="copy_cin">
                </div>
                <div class="form-group col-md-4">
                    <label for="copy_permis">Copie Permis</label>
                    <input type="file" value="{{ $employee->copy_permis }}" class="form-control-file" name="copy_permis">
                </div>
                <div class="form-group col-md-4">
                    <label for="photo">Photo</label>
                    <input type="file" value="{{ $employee->photo }}" class="form-control-file" name="photo">
                </div>
            </div>
        </form>
    </div>
@endsection