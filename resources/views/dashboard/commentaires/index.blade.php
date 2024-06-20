@extends('dashboard._sidebar_dashboard')
@section('title')
    Commentaires
@endsection
@section('content')
<div class="container mt-5">     
    {{-- <a href="{{ route('tachs.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a> --}}
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gmail Client</th>
            <th scope="col">Message</th>
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($commentaires as $commentaire)
          <tr>
            <th scope="row">{{$commentaire->id}}</th>
            <td>{{$commentaire->client->gmail}}</td>
            <td>{{$commentaire->message}}</td>
            <td>
              <a href="" class="btn btn-sm btn-info">C</a>
                <a href="" class="btn btn-sm btn-warning">M</a>
                <form class="d-inline" action="" method="post">
                @method('DELETE')
                @csrf
                <button  class="btn btn-sm btn-danger">S</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection