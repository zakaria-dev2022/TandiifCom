<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_emploie extends Model
{
    use HasFactory;
    protected $fillable=[
        "nom",
        "prenom",
        "cin",
        "tel",
        "adresse",
        "ville",
        "gmail",
        "date_naissance",
        "type_permis",
        "copy_cin",
        "copy_permis",
        "voiture_id",
        "photo"];
}
