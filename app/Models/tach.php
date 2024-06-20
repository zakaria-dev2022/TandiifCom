<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tach extends Model
{
    use HasFactory;
    protected $fillable=[
    'reservation_id',
    'employee_id',
    'code_secret',
    'status'];

    /**
     * Get the reservation that owns the tach
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(reservation::class);
    }

    /**
     * Get the employee that owns the tach
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(employee::class);
    }
}
