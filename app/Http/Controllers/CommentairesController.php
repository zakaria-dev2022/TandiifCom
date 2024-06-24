<?php

namespace App\Http\Controllers;

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
        return view('dashboard.commentaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
