<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\commentaire;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = commentaire::all();
        return view('dashboard.commentaires.index',compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.commentaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données d'entrée
        // $validatedData = $request->validate([
        //         'email' => 'required|email',
        //         'message' => 'required|string',
        //     ]);
            
            // Rechercher le client par email
            $client = Client::where('gmail', $request['gmail'])->first();
            // print_r($client);
            // exit();

        if (!$client) {
            // Si le client n'est pas trouvé, afficher un message d'erreur
            // return redirect()->back()->with('error', "Tu n'es pas un client");
            return redirect()->back()->with('error', "Désoler!Tu n'es pas un client");

        }

        // Si le client est trouvé, créer le commentaire
        Commentaire::create(['client_id' => $client->id,'message' => $request['message']]);
        $message = 'Merci pour votre commentaire, ' . $client->prenom . ' ' . $client->nom . '!';
        return redirect('/')->with('success', $message);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentaire = commentaire::find($id);
        return view('dashboard.commentaires.show', compact('commentaire'));
        // return view('dashboard.commentaires.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commentaire = commentaire::find($id);
        return view('dashboard.commentaires.edit', compact('commentaire'));
        // return view('dashboard.commentaires.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commentaire = commentaire::find($id);
        $commentaire->update($request->all());
        return redirect()->route('commentaires.index');
        // return view('dashboard.commentaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commentaire = commentaire::find($id);
        $commentaire->delete();
        return redirect()->route('commentaires.index');
        // return view('dashboard.commentaire.index');
    }
}
