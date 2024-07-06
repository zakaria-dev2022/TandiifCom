<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Demande_emploie;
use App\Models\employee;
use App\Models\reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::count();
        $employees=employee::count();
        $demandes = Demande_emploie::count();
        $reservations = reservation::count();

        return view('dashboard.dashboard', compact('clients', 'employees', 'demandes','reservations'));
        // return view('dashboard.demandes.index',compact('demandes'));
    }
}
