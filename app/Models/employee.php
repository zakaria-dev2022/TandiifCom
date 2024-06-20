<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class employee extends Model
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


    /**
     * Get all of the tachs for the employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tachs(): HasMany
    {
        return $this->hasMany(tach::class);
    }
}
