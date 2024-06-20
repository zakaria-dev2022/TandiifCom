<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    /**
     * Get the voiture that owns the employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function voiture(): BelongsTo
    {
        return $this->belongsTo(voiture::class);
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
