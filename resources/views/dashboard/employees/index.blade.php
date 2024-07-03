@extends('dashboard._sidebar_dashboard')
@section('title')
    Employee
@endsection
@section('title_principale')
Employee
@endsection
@section('content')
<div class="container-fluid my-4">
            
    <a href="{{ route('employees.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover  text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Cin</th>
            <th scope="col">Tel</th>  
            {{-- <th scope="col">Adresse</th>  --}}
            <th scope="col">Ville</th>  
            <th scope="col">Gmail</th> 
            <th scope="col">Date Naissance</th> 
            <th scope="col">Type Permis</th> 
            <th scope="col">Copy Cin</th> 
            <th scope="col">Copy Permis</th> 
            {{-- <th scope="col">Matricule Voiture</th> --}}
            <th scope="col">Photo</th> 
            <th scope="col">Action</th> 
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($employees as $employee)
          <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->nom}}</td>
            <td>{{$employee->prenom}}</td>
            <td>{{$employee->cin}}</td>
            <td>{{$employee->tel}}</td>
            {{-- <td>{{$employee->adresse}}</td> --}}
            <td>{{$employee->ville}}</td>
            <td>{{$employee->gmail}}</td>
            <td>{{$employee->date_naissance}}</td>
            <td>{{$employee->type_permis}}</td>
            <td><img src="{{$employee->copy_cin}}" alt="" width="80px" height="70px"></td>
            <td><img src="{{$employee->copy_permis}}" alt="" width="80px" height="70px"></td>
            {{-- <td>{{$employee->voiture->marque}}</td> --}}
            <td><img src="{{$employee->photo}}" alt="" width="80px" height="70px"></td>
            <td > 
              <a href="{{route('employees.show',$employee->id)}}" class="btn btn-sm btn-info px-3">C</a>
              <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-sm btn-warning px-3 my-2">M</a>
              <form class="d-" action="{{route('employees.destroy',$employee->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button  onclick="return confirm('Voulez-vous supprimer le employee {{$employee->nom }} {{$employee->prenom }}?');" class="btn btn-sm btn-danger px-3">S</button>
              </form>
          </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
@endsection