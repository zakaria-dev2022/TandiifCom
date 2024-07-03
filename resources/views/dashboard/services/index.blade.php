@extends('dashboard._sidebar_dashboard')
@section('title')
    Services
@endsection
@section('title_principale')
Service
@endsection
@section('content')
<div class="container-fluid my-4">
            
    <a href="{{ route('services.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover  text-center">
      <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col">photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($services as $service)
          <tr>
            <th scope="row">{{$service->id}}</th>
            <td>{{$service->type}}</td>
            <td>{{$service->prix}}</td>
            <td>{{$service->description}}</td>
            <td><img src="{{$service->photo}}" alt="" width="90px" height="90px"></td>
            <td > 
              <a href="{{route('services.show',$service->id)}}" class="btn btn-sm btn-info px-3">C</a>
              <a href="{{route('services.edit',$service->id)}}" class="btn btn-sm btn-warning px-3 my-2">M</a>
              <form class="d-" action="{{route('services.destroy',$service->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button  onclick="return confirm('Voulez-vous supprimer le service {{$service->type }}?');" class="btn btn-sm btn-danger px-3">S</button>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection