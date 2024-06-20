@extends('dashboard._sidebar_dashboard')
{{-- @extends('dashboard._coderesource') --}}
@section('title')
    Tachs
@endsection
@section('content')
<div class="container my-4">
            
    <a href="{{ route('tachs.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cin Client</th>
            <th scope="col">Cin Employee</th>
            <th scope="col">Code Validation</th>
            <th scope="col">Status</th>  
            <th scope="col">Handle</th> 
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