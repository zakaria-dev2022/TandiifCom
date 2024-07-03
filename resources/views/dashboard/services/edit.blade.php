@extends('dashboard._sidebar_dashboard')
@extends('dashboard._codeEdit')
@section('title')
    Modifier Services
@endsection
@section('title_principale')
Service
@endsection
@section('content')
<div class="card-body">
  <form action="{{route('services.update',$service->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<a onclick="return confirm('Voulez-vous annuler la modification de service {{ $service->type }}?');" href="{{route('employees.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
<button class="btn btn-success btn-lg my-3">Modifier</button>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Type</label>
                    <input type="text" class="form-control" value="{{ $service->type }}" name="type" placeholder="Type">
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prix</label>
                    <input type="text" class="form-control" value="{{ $service->prix }}" name="prix" placeholder="Prix">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cin">Description</label>
                    {{-- <input type="text" class="form-control" value="{{ $service->description }}" name="description" placeholder="Description"> --}}
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $service->description }}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="photo">Photo</label>
                    <input type="file" value="{{ $service->photo }}" class="form-control-file" name="photo">
                </div>
            </div>
        </form>
    </div>
@endsection