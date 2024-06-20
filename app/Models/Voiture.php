<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = [
    'marque',
    'model',
    'type_carburant',
    'photo_assurance',
    'photo_carte_grise',
    'date_fin_assurance'];


    /**
     * Get all of the employees for the Voiture
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(employee::class);
    }
    /**
     * Get all of the voitures_reserver for the Voiture
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function voitures_reserver(): HasMany
    {
        return $this->hasMany(voiture_reserver::class);
    }
}
