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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection