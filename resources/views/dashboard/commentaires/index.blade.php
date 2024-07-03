@extends('dashboard._sidebar_dashboard')
@section('title')
    Commentaires
@endsection
@section('title_principale')
commentaire
@endsection
@section('content')
<div class="container-fluid mt-5">     
    {{-- <a href="{{ route('tachs.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a> --}}
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gmail Client</th>
            <th scope="col">Tel Client</th>
            <th scope="col">Ville Client</th>
            <th scope="col">Message</th>
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($commentaires as $commentaire)
          <tr>
            <th scope="row">{{$commentaire->id}}</th>
            <td>{{$commentaire->client->gmail}}</td>
            <td>{{$commentaire->client->tel}}</td>
            <td>{{$commentaire->client->ville}}</td>
            <td>{{$commentaire->message}}</td>
            <td>
              <a href="{{route('commentaires.show',$commentaire->id)}}" class="btn btn-sm btn-info">C</a>
              <a href="{{route('commentaires.edit',$commentaire->id)}}" class="btn btn-sm btn-warning my-1">M</a>
              <form class="d-" action="{{route('commentaires.destroy',$commentaire->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button  onclick="return confirm('Voulez-vous supprimer le commentaire de {{$commentaire->client->gmail}}?');" class="btn btn-sm btn-danger">S</button>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection