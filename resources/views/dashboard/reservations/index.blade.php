@extends('dashboard._sidebar_dashboard')

@section('title')
    Réservations
@endsection

@section('title_principale')
    Réservation
@endsection

@section('content')
<div class="container-fluid my-4">

    <a href="{{ route('reservations.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">CIN</th>
            <th scope="col">Tel</th>
            {{-- <th scope="col">Adresse</th>
            <th scope="col">Matricule Voiture</th>
            <th scope="col">Ville</th> --}}
            <th scope="col">Gmail</th>
            <th scope="col">Service</th>
            <th scope="col">Date de Réservation</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservations as $reservation)
          <tr>
            <th scope="row">{{ $reservation->id }}</th>
            <td>{{ $reservation->nom }}</td>
            <td>{{ $reservation->prenom }}</td>
            <td>{{ $reservation->cin }}</td>
            <td>{{ $reservation->tel }}</td>
            {{-- <td>{{ $reservation->adresse }}</td>
            <td>{{ $reservation->matricule_voiture }}</td>
            <td>{{ $reservation->ville }}</td> --}}
            <td>{{ $reservation->gmail }}</td>
            <td>{{ $reservation->service->type }}</td>
            <td>{{ $reservation->date_reservation }}</td>
            <td>
                <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-sm btn-info">C</a>
                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-warning">M</a>
                <form class="d-inline" action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Voulez-vous supprimer la réservation de {{ $reservation->nom }} {{ $reservation->prenom }} ?');" class="btn btn-sm btn-danger">S</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
