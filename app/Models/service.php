<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class service extends Model
{
    use HasFactory;

    protected $fillable=[
    'type',
    'prix',
    'description',
    'photo'];

    /**
     * Get all of the reservations for the service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(reservation::class);
    }
}
