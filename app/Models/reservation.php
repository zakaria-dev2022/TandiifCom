<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class reservation extends Model
{
    use HasFactory;
    protected $fillable=[
    "nom",
    "prenom",
    "cin",
    "tel",
    "adresse",
    "matricule_voiture",
    "ville",
    "gmail",
    'service_id',
    'date_reservation'];



    // Relations

    /**
     * Get the client that owns the reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function service() : BelongsTo
    {
        return $this->belongsTo(service::class);
    }

    /**
     * Get all of the tachs for the reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tachs(): HasMany
    {
        return $this->hasMany(tach::class);
    }
}
