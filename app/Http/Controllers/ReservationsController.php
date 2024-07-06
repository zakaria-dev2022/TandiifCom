<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\reservation;
use App\Models\service;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = reservation::all();
        return view('dashboard.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = service::all();
        return view('dashboard.reservations.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = Client::where('gmail', $request['gmail'])->first();

        // print_r();
        // exit();

        if (!$client) {
            Client::create([
                'nom' => $request['nom'],
                'prenom' => $request['prenom'],
                'cin' => $request['cin'],
                'tel' => $request['tel'],
                'adresse' => $request['adresse'],
                'matricule_Voiture' => $request['matricule_Voiture'],
                'ville' => $request['ville'],
                'gmail' => $request['gmail']]);
                
                reservation::create([
                    'nom' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'cin' => $request['cin'],
                    'tel' => $request['tel'],
                    'adresse' => $request['adresse'],
                    'matricule_voiture' => $request['matricule_Voiture'],
                    'ville' => $request['ville'],
                    'gmail' => $request['gmail'],
                    'service_id' => $request['service_id'],
                    'date_reservation' => $request['date_reservation'],
                ]);
                $message = 'Réservation Effectuer,Bienvenue Chez Nous ' .  $request['prenom'] . ' ' .  $request['nom'] ;
                
            return redirect('/')->with('success', $message);
        }

        // Création de la réservation
        Reservation::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'cin' => $request['cin'],
            'tel' => $request['tel'],
            'adresse' => $request['adresse'],
            'matricule_voiture' => $request['matricule_Voiture'],
            'ville' => $request['ville'],
            'gmail' => $request['gmail'],
            'service_id' => $request['service_id'],
            'date_reservation' => $request['date_reservation'],
        ]);
        // if (request()->is('reservations')) {
        //     return redirect('/reservations');
        // } else {
        //     return redirect('/')->with('success', 'Réservation Effectuer,Merci pour votre réservation!');
        // }
        return redirect('/')->with('success', 'Réservation Effectuer,Merci pour votre réservation!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.reservations.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.reservations.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('dashboard.reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('dashboard.reservations.index');
    }
}
