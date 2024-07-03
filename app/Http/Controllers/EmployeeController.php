<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Voiture;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::all();
        return view('dashboard.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $voitures=Voiture::all();
        return view('dashboard.employees.create',compact('voitures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $test=$request->photo->extension();
        // dd($test);
        $dossier='img_employee';
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
        employee::create($data);
        return redirect()->route('employees.index');
        // return view('dashboard.employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee=employee::find($id);
        return view('dashboard.employees.show',compact('employee'));
        // return view('dashboard.employees.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee=employee::find($id);
        return view('dashboard.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = employee::find($id);
        $dossier='img_employee';
        // dd($request->copy_permis." ***********".$request->copy_cin."************");
        $nom_photo=time().'personnel'.'.'.$request->photo->extension();
        $nom_copy_permis=time().'permis'.'.'.$request->copy_permis->extension();
        $nom_copy_cin=time().'cin'.'.'.$request->copy_cin->extension();
        $request->photo->move(public_path($dossier),$nom_photo);
        $request->copy_cin->move(public_path($dossier),$nom_copy_cin);
        $request->copy_permis->move(public_path($dossier),$nom_copy_permis);
        $data=$request->all();
        $data['photo']=$dossier.'/'.$nom_photo;
        $data['copy_cin']=$dossier.'/'.$nom_copy_cin;
        $data['copy_permis']=$dossier.'/'.$nom_copy_permis;
        $employee->update($data);
        return redirect()->route('employees.index');
        // return view('dashboard.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
        // return view('dashboard.employees.index');
    }
}
