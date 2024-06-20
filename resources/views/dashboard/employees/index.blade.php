@extends('dashboard._sidebar_dashboard')
@section('title')
    Employees
@endsection
@section('content')
<div class="container my-4">
            
    <a href="{{ route('employees.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Cin</th>
            <th scope="col">Tel</th>  
            <th scope="col">Adresse</th> 
            <th scope="col">Ville</th>  
            <th scope="col">Gmail</th> 
            <th scope="col">Date Naissance</th> 
            <th scope="col">Type Permis</th> 
            <th scope="col">Copy Cin</th> 
            <th scope="col">Copy Permis</th> 
            <th scope="col">Matricule Voiture</th>
            <th scope="col">Photo</th> 
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
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection