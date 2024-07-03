<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use App\Models\employee;
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
    function store(){
       
        
    }
}
