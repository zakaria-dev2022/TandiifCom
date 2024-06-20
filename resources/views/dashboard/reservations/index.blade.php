@extends('dashboard._sidebar_dashboard')
@section('title')
    reservations
@endsection
@section('content')
<div class="container my-4">
            
    <a href="{{ route('reservations.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cin Client</th>
            <th scope="col">Type D'offre</th>
            <th scope="col">Date Reservation</th>
            <th scope="col">Status</th>  
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection