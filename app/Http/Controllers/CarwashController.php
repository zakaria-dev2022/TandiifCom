<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use App\Models\Demande_emploie;
use App\Models\employee;
use App\Models\reservation;
use App\Models\service;
use Illuminate\Http\Request;

class CarwashController extends Controller
{
    function index(){
        $employees=employee::all();
        $commentaires=commentaire::all();
        $services=service::all();
        return view('carwash',compact('employees','commentaires','services'));
    }
    function store(Request $request){
        // print_r($request->all());
        // exit();
        reservation::create($request->all());
        return redirect()->route('carwash.index');
    }
    function demande_employee(Request $request){
        // print_r($request->all());
        // exit();
        $dossier='img_demande_employee';
        $nom_photo=time().'personnel'.'.'.$request->photo->extension();
        $nom_copy_permis=time().'permis'.'.'.$request->copy_cin->extension();
        $nom_copy_cin=time().'cin'.'.'.$request->copy_permis->extension();
        $request->photo->move(public_path($dossier),$nom_photo);
        $request->copy_cin->move(public_path($dossier),$nom_copy_cin);
        $request->copy_permis->move(public_path($dossier),$nom_copy_permis);
        $data=$request->all();
        $data['photo']=$dossier.'/'.$nom_photo;
        $data['copy_cin']=$dossier.'/'.$nom_copy_cin;
        $data['copy_permis']=$dossier.'/'.$nom_copy_permis;
        Demande_emploie::create($data);
        $message = 'Demande Effectuer, Attente Notre Message ' .  $request['prenom'] . ' ' .  $request['nom'] ;
        return redirect()->route('carwash.index')->with('success', $message);
    }
    
    function create(){
        // reservation::create($request->all());
        return view('formulaire');
    }

}
