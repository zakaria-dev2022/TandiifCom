<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable=[
    "nom",
    "prenom",
    "cin",
    "tel",
    "adresse",
    "Matricule_Voiture",
    "ville",
    "gmail"];

     /**
     * Get all of the reservations for the service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(reservation::class);
    }

     /**
     * Get all of the commentaires for the commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires(): HasMany
    {
        return $this->hasMany(commentaire::class);
    }
}
