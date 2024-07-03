@extends('dashboard._sidebar_dashboard')
@extends('dashboard._coderesource')
@section('title')
    Ajouter Services
@endsection
@section('title_principale')
Service
@endsection
@section('content')
<div class="card-body">
  <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
<a onclick="return confirm('Voulez-vous annuler l\'ajoute d\'un service ?');" href="{{route('services.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
<button class="btn btn-primary btn-lg my-3">Ajouter</button>
          @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">prix</label>
                    <input type="text" class="form-control" name="prix" placeholder="prix">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="cin">Description</label>
                    {{-- <input type="text" class="form-control" name="description" placeholder="Description"> --}}
                    <textarea class="form-control" name="description" id="" cols="30" rows="1"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control-file" name="photo">
                </div>
            </div>
        </form>
    </div>
@endsection