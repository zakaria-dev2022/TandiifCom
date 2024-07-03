<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = service::all();
        return view('dashboard.services.index',compact('services'));
        // return view('dashboard.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $voitures=Voiture::all();
        return view('dashboard.services.create');
        // return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dossier='img_service';
        $nom_photo=time().'service'.'.'.$request->photo->extension();
        $request->photo->move(public_path($dossier),$nom_photo);
        $data=$request->all();
        $data['photo']=$dossier.'/'.$nom_photo;
        service::create($data);
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service=service::find($id);
        return view('dashboard.services.show',compact('service'));
        // return view('dashboard.services.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service=service::find($id);
        return view('dashboard.services.edit',compact('service'));
        // return view('dashboard.services.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $service = service::find($id);
        // $service->update($request->all());
        // return redirect()->route('services.index');
        // return view('dashboard.services.index');
        $service = service::find($id);
        $dossier='img_service';
        $nom_photo=time().'service'.'.'.$request->photo->extension();
        $request->photo->move(public_path($dossier),$nom_photo);
        $data=$request->all();
        $data['photo']=$dossier.'/'.$nom_photo;
        $service->update($data);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = service::find($id);
        $service->delete();
        return redirect()->route('services.index');
        // return view('dashboard.services.index');
    }
}
