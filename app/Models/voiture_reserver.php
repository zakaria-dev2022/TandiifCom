<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class voiture_reserver extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','voiture_id'];

    /**
     * Get the client that owns the voiture_reserver
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(client::class);
    }
    /**
     * Get the voiture that owns the voiture_reserver
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function voiture(): BelongsTo
    {
        return $this->belongsTo(voiture::class);
    }
}
